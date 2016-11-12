<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:22 PM
 */

namespace Tradenity\SDK\Http;

use Exception, ErrorException;
use Unirest\Request;
use Tradenity\SDK\Exceptions\ApiErrors;
use Tradenity\SDK\Exceptions\CustomerCreationException;
use Tradenity\SDK\Exceptions\DataValidationException;
use Tradenity\SDK\Exceptions\ErrorMessage;
use Tradenity\SDK\Exceptions\GatewayErrorException;
use Tradenity\SDK\Exceptions\HTTPMethodNotAllowedException;
use Tradenity\SDK\Exceptions\InventoryErrorException;
use Tradenity\SDK\Exceptions\PaymentException;
use Tradenity\SDK\Exceptions\RefundException;
use Tradenity\SDK\Exceptions\SessionExpiredException;
use Tradenity\SDK\Exceptions\ShoppingCartException;
use Tradenity\SDK\Exceptions\ClientErrorException;
use Tradenity\SDK\Exceptions\BadRequestException;
use Tradenity\SDK\Exceptions\AuthenticationException;
use Tradenity\SDK\Exceptions\AuthorizationException;
use Tradenity\SDK\Exceptions\EntityNotFoundException;
use Tradenity\SDK\Exceptions\ServerErrorException;



class Client
{
    const AUTH_TOKEN_HEADER_NAME = 'X-Tradenity-Session-ID';

    public $endPoint;
    public $key;
    public $sessionIdAccessor;

    public function __construct($endPoint, $key, $sessionIdAccessor)
    {
        $this->endPoint = $endPoint;
        $this->key = $key;
        $this->sessionIdAccessor = $sessionIdAccessor;
    }

    public function resetSession()
    {
        $this->sessionIdAccessor->reset();
    }

    public function http_op($op, $url, $data)
    {
        $headers = array();
        $username = null;
        $password = '';
        $auth_token = $this->sessionIdAccessor->getSessionId();
        if($auth_token == null) {
            $username = $this->key;
        }
        else {
            $headers[self::AUTH_TOKEN_HEADER_NAME] = $auth_token;
        }

        try {
            switch ($op) {
                case 'GET':
                    $response = Request::get($url, $headers, $data, $username, $password);
                    break;
                case 'POST':
                    $body = Request\Body::form($data);
                    $response = Request::post($url, $headers, $body, $username, $password);
                  break;
                case 'PUT':
                    $body = Request\Body::form($data);
                    $response = Request::put($url, $headers, $body, $username, $password);
                  break;
                case 'DELETE':
                    $response = Request::delete($url, $headers, array(), $username, $password);
                  break;
                default:
                    throw new ErrorException('You must provide a valid Http method.');
            }
        }
        catch(Exception $e){
            dump($e);
            throw new ClientErrorException();
        }

        if(array_key_exists(self::AUTH_TOKEN_HEADER_NAME, $response->headers)) {
            $this->sessionIdAccessor->storeSessionId($response->headers[self::AUTH_TOKEN_HEADER_NAME]);
        }
        if ($response->code >= 400) {
            $this->handleErrors($response);
        }

        return $response->body;
    }

    public function get($url, $data=null)
    {
        return $this->http_op('GET', $url, $data);
    }

    public function post($url, $data)
    {
        return $this->http_op('POST', $url, $data);
    }

    public function put($url, $data)
    {

        return $this->http_op('PUT', $url, $data);
    }

    public function delete($url){
        return $this->http_op('DELETE', $url, array());
    }

    public function handleErrors($response)
    {
        $responseCode = $response->code;
        $responseBody = $response->body;
        $errorMessage = new ErrorMessage($responseBody);

        if ($responseCode >= 500) {
            throw new ServerErrorException($responseBody);
        }else if($responseCode == 400){
            $errorCode = $responseBody->errorCode;
            if($errorCode == ApiErrors::DATA_VALIDATION_ERROR_CODE){
                throw new DataValidationException($errorMessage);
            }else if($errorCode == ApiErrors::INVALID_PAYMENT_ERROR_CODE){
                throw new PaymentException($errorMessage);
            }else if($errorCode == ApiErrors::REFUND_ERROR_ERROR_CODE){
                throw new RefundException($errorMessage);
            }else if($errorCode == ApiErrors::GATEWAY_ERROR){
                throw new GatewayErrorException($errorMessage);
            }else if($errorCode == ApiErrors::EXISTING_EMAIL_ERROR_CODE || $errorCode == ApiErrors::EXISTING_USERNAME_ERROR_CODE){
                throw new CustomerCreationException($errorMessage);
            }else if($errorCode == ApiErrors::CART_INVALID_ITEM_ERROR_CODE){
                throw new ShoppingCartException($errorMessage);
            }else if($errorCode == ApiErrors::INVALID_PAYMENT_ERROR_CODE){
                throw new InventoryErrorException($errorMessage);
            }else {
                throw new BadRequestException($errorMessage);
            }
        }else if($responseCode == 401){
            if($this->sessionIdAccessor->hasSessionId()){
                throw new SessionExpiredException($errorMessage);
            }else {
                throw new AuthenticationException($errorMessage);
            }
        }else if($responseCode == 403){
            throw new AuthorizationException($errorMessage);
        }else if($responseCode == 404){
            throw new EntityNotFoundException($errorMessage);
        }else if($responseCode == 405){
            throw new HTTPMethodNotAllowedException($errorMessage);
        }
    }

}
