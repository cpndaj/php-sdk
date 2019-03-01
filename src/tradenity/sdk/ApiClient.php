<?php


namespace Tradenity\SDK;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\Client;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;


function add_auth_header(ApiClient $apiClient)
{
    return function (callable $handler) use ($apiClient) {
        return function (RequestInterface $request, array $options) use ($handler, $apiClient) {
            if($apiClient::getSessionIdAccessor()->hasSessionId()){
                $request = $request->withHeader($apiClient::AUTH_TOKEN_HEADER_NAME, $apiClient::getSessionIdAccessor()->getSessionId());
            }else {
                $credentials = base64_encode($apiClient::$ApiKey . ":" . "");
                $authHeaderName = 'Authorization';
                $authHeaderValue = 'Basic ' . $credentials;
                $request = $request->withHeader($authHeaderName, $authHeaderValue);
            }
            $promise = $handler($request, $options);
            return $promise->then(
                function (ResponseInterface $response) use ($apiClient) {
                    if(! $apiClient::getSessionIdAccessor()->hasSessionId() && $response->hasHeader($apiClient::AUTH_TOKEN_HEADER_NAME)){
                        $apiClient::getSessionIdAccessor()->storeSessionId($response->getHeader($apiClient::AUTH_TOKEN_HEADER_NAME));
                    }
                    return $response;
                }
            );
        };
    };
}

class ApiClient
{

    const AUTH_TOKEN_HEADER_NAME = 'X-Tradenity-Session-ID';

    public static $sessionIdAccessor;

    public static $ApiKey;

    public static $apiEndPoint;

    protected $client;
    protected $config;
    protected static $instance;

    function __construct()
    {
        $this->config = new Configuration();
        $this->config->setHost(self::$apiEndPoint);
        $this->config->setUsername(self::$ApiKey);
        $this->config->setPassword("");

        $handler = new CurlHandler();
        $stack = HandlerStack::create($handler);
        $stack->push(add_auth_header($this));
        $this->client = new Client(['handler' => $stack]);
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new ApiClient();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public static function getSessionIdAccessor()
    {
        return self::$sessionIdAccessor;
    }




}