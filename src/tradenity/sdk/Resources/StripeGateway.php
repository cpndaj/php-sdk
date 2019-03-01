<?php
/**
 * StripeGateway
 * PHP version 5
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */

/**
 * Tradenity API
 *
 * Tradenity eCommerce Rest API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@tradenity.com
 * By: https://github.com/tradenity
 */



namespace Tradenity\SDK\Resources;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Tradenity\SDK\ApiClient;
use Tradenity\SDK\ApiException;
use Tradenity\SDK\Configuration;
use Tradenity\SDK\HeaderSelector;
use Tradenity\SDK\ObjectSerializer;

/**
 * StripeGateway Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class StripeGateway
{

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected static $headerSelector;

    
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StripeGateway';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        '__meta' => '\Tradenity\SDK\Resources\InstanceMeta',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'name' => 'string',
        'mode' => 'string',
        'authorize_only' => 'bool',
        'account_id' => 'string',
        'status' => 'string',
        'secret_key' => 'string',
        'public_key' => 'string',
        'test_secret_key' => 'string',
        'test_public_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        '__meta' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'name' => null,
        'mode' => null,
        'authorize_only' => null,
        'account_id' => null,
        'status' => null,
        'secret_key' => null,
        'public_key' => null,
        'test_secret_key' => null,
        'test_public_key' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        '__meta' => '__meta',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'name' => 'name',
        'mode' => 'mode',
        'authorize_only' => 'authorizeOnly',
        'account_id' => 'accountId',
        'status' => 'status',
        'secret_key' => 'secretKey',
        'public_key' => 'publicKey',
        'test_secret_key' => 'testSecretKey',
        'test_public_key' => 'testPublicKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        '__meta' => 'setMeta',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'name' => 'setName',
        'mode' => 'setMode',
        'authorize_only' => 'setAuthorizeOnly',
        'account_id' => 'setAccountId',
        'status' => 'setStatus',
        'secret_key' => 'setSecretKey',
        'public_key' => 'setPublicKey',
        'test_secret_key' => 'setTestSecretKey',
        'test_public_key' => 'setTestPublicKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        '__meta' => 'getMeta',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'name' => 'getName',
        'mode' => 'getMode',
        'authorize_only' => 'getAuthorizeOnly',
        'account_id' => 'getAccountId',
        'status' => 'getStatus',
        'secret_key' => 'getSecretKey',
        'public_key' => 'getPublicKey',
        'test_secret_key' => 'getTestSecretKey',
        'test_public_key' => 'getTestPublicKey'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['__meta'] = isset($data['__meta']) ? $data['__meta'] : null; 
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null; 
        $this->container['created_at'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null; 
        $this->container['updated_at'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null; 
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null; 
        $this->container['authorize_only'] = isset($data['authorize_only']) ? $data['authorize_only'] : null; 
        $this->container['authorize_only'] = isset($data['authorizeOnly']) ? $data['authorizeOnly'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null; 
        $this->container['account_id'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null; 
        $this->container['secret_key'] = isset($data['secret_key']) ? $data['secret_key'] : null; 
        $this->container['secret_key'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['public_key'] = isset($data['public_key']) ? $data['public_key'] : null; 
        $this->container['public_key'] = isset($data['publicKey']) ? $data['publicKey'] : null;
        $this->container['test_secret_key'] = isset($data['test_secret_key']) ? $data['test_secret_key'] : null; 
        $this->container['test_secret_key'] = isset($data['testSecretKey']) ? $data['testSecretKey'] : null;
        $this->container['test_public_key'] = isset($data['test_public_key']) ? $data['test_public_key'] : null; 
        $this->container['test_public_key'] = isset($data['testPublicKey']) ? $data['testPublicKey'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    public function getId()
    {
        if($this->container['id'] != null){
            return $this->container['id'];
        }else if($this->getMeta() != null){
            $href = $this->getMeta()->getHref();
            $strs = explode('/', $href);
            $this->container['id'] = end($strs);
        }else{
            $this->container['id'] = null;
        }
        return $this->container['id'];
    }

    public function setId($id)
    {
        $this->container['id'] = $id;
    }

    /**
     * Gets __meta
     *
     * @return \Tradenity\SDK\Resources\InstanceMeta
     */
    public function getMeta()
    {
        return $this->container['__meta'];
    }

    /**
     * Sets __meta
     *
     * @param \Tradenity\SDK\Resources\InstanceMeta $__meta __meta
     *
     * @return $this
     */
    public function setMeta($__meta)
    {
        /* */
        $this->container['__meta'] = $__meta;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        /* */
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        /* */
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        /* */
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        /*
        $allowedValues = $this->getModeAllowableValues();
        if (!in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
 */
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets authorize_only
     *
     * @return bool
     */
    public function getAuthorizeOnly()
    {
        return $this->container['authorize_only'];
    }

    /**
     * Sets authorize_only
     *
     * @param bool $authorize_only authorize_only
     *
     * @return $this
     */
    public function setAuthorizeOnly($authorize_only)
    {
        /* */
        $this->container['authorize_only'] = $authorize_only;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        /* */
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        /*
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
 */
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets secret_key
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->container['secret_key'];
    }

    /**
     * Sets secret_key
     *
     * @param string $secret_key secret_key
     *
     * @return $this
     */
    public function setSecretKey($secret_key)
    {
        /* */
        $this->container['secret_key'] = $secret_key;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string $public_key public_key
     *
     * @return $this
     */
    public function setPublicKey($public_key)
    {
        /* */
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets test_secret_key
     *
     * @return string
     */
    public function getTestSecretKey()
    {
        return $this->container['test_secret_key'];
    }

    /**
     * Sets test_secret_key
     *
     * @param string $test_secret_key test_secret_key
     *
     * @return $this
     */
    public function setTestSecretKey($test_secret_key)
    {
        /* */
        $this->container['test_secret_key'] = $test_secret_key;

        return $this;
    }

    /**
     * Gets test_public_key
     *
     * @return string
     */
    public function getTestPublicKey()
    {
        return $this->container['test_public_key'];
    }

    /**
     * Sets test_public_key
     *
     * @param string $test_public_key test_public_key
     *
     * @return $this
     */
    public function setTestPublicKey($test_public_key)
    {
        /* */
        $this->container['test_public_key'] = $test_public_key;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }



    /**
     * Operation list All
     *
     * List StripeGateways
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[StripeGateway]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllStripeGateways(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllStripeGateways();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllStripeGateways($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllStripeGateways($parameters)[0];
    }


    /**
     * Operation getStripeGatewayById
     *
     * Find StripeGateway By ID
     *
     * @param  string $id ID of StripeGateway to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\StripeGateway
     */
    public static function findById($id)
    {
        return self::getStripeGatewayById($id);
    }

    /**
     * Operation create
     *
     * Create New StripeGateway
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\StripeGateway
     */
    public function create()
    {
        $instance = self::createStripeGateway($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateStripeGatewayById
    *
    * Update StripeGateway
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\StripeGateway
    */
    public function update()
    {
        return self::updateStripeGatewayById($this->getId(), $this);
    }

    /**
    * Operation delete
    *
    *
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public function delete()
    {
        self::deleteStripeGatewayById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete StripeGateway By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteStripeGatewayById($id);
    }


    protected static function getApiClient()
    {
        return ApiClient::getInstance();
    }

    protected static function getHttpClient()
    {
        return ApiClient::getInstance()->getClient();
    }

    protected static function getConfig()
    {
        return ApiClient::getInstance()->getConfig();
    }

    /**
    * @return HeaderSelector
    */
    public static function getHeaderSelector()
    {
        if(self::$headerSelector == null){
            self::$headerSelector = new HeaderSelector();
        }
        return self::$headerSelector;
    }

    /**
     * Operation createStripeGateway
     *
     * Create StripeGateway
     *
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\StripeGateway
     */
    public static function createStripeGateway($stripe_gateway)
    {
        list($response) = self::createStripeGatewayWithHttpInfo($stripe_gateway);
        return $response;
    }


    /**
     * Operation createStripeGatewayWithHttpInfo
     *
     * Create StripeGateway
     *
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StripeGateway, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createStripeGatewayWithHttpInfo($stripe_gateway)
    {
        $returnType = '\Tradenity\SDK\Resources\StripeGateway';  
        $request = self::createStripeGatewayRequest($stripe_gateway); 

        try {
            $options = self::createHttpClientOption();
            try {
                $response = self::getHttpClient()->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Tradenity\SDK\Resources\StripeGateway',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createStripeGatewayAsync
    *
    * Create StripeGateway
    *
    * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createStripeGatewayAsync($stripe_gateway)
    {
        return self::createStripeGatewayAsyncWithHttpInfo($stripe_gateway)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createStripeGatewayAsyncWithHttpInfo
     *
     * Create StripeGateway
     *
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createStripeGatewayAsyncWithHttpInfo($stripe_gateway) 
    {
        $returnType = '\Tradenity\SDK\Resources\StripeGateway';  
        $request = self::createStripeGatewayRequest($stripe_gateway); 

        return self::getHttpClient()
            ->sendAsync($request, self::createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createStripeGateway'
     *
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createStripeGatewayRequest($stripe_gateway) 
    {
        // verify the required parameter 'stripe_gateway' is set
        if ($stripe_gateway === null || (is_array($stripe_gateway) && count($stripe_gateway) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $stripe_gateway when calling createStripeGateway'
            );
        }

        $resourcePath = '/stripeGateways';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($stripe_gateway)) {
            $_tempBody = $stripe_gateway;
        }

        if ($multipart) {
            $headers = self::getHeaderSelector()->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = self::getHeaderSelector()->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if (self::getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = self::getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            self::getConfig()->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteStripeGatewayById
     *
     * Delete StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteStripeGatewayById($stripe_gateway_id)
    {
        self::deleteStripeGatewayByIdWithHttpInfo($stripe_gateway_id);
    }


    /**
     * Operation deleteStripeGatewayByIdWithHttpInfo
     *
     * Delete StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteStripeGatewayByIdWithHttpInfo($stripe_gateway_id)
    {
        $returnType = '';  
        $request = self::deleteStripeGatewayByIdRequest($stripe_gateway_id); 

        try {
            $options = self::createHttpClientOption();
            try {
                $response = self::getHttpClient()->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
    * Operation deleteStripeGatewayByIdAsync
    *
    * Delete StripeGateway
    *
    * @param  string $stripe_gateway_id ID of stripeGateway to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteStripeGatewayByIdAsync($stripe_gateway_id)
    {
        return self::deleteStripeGatewayByIdAsyncWithHttpInfo($stripe_gateway_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteStripeGatewayByIdAsyncWithHttpInfo
     *
     * Delete StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteStripeGatewayByIdAsyncWithHttpInfo($stripe_gateway_id) 
    {
        $returnType = '';  
        $request = self::deleteStripeGatewayByIdRequest($stripe_gateway_id); 

        return self::getHttpClient()
            ->sendAsync($request, self::createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteStripeGatewayById'
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteStripeGatewayByIdRequest($stripe_gateway_id) 
    {
        // verify the required parameter 'stripe_gateway_id' is set
        if ($stripe_gateway_id === null || (is_array($stripe_gateway_id) && count($stripe_gateway_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $stripe_gateway_id when calling deleteStripeGatewayById'
            );
        }

        $resourcePath = '/stripeGateways/{stripeGatewayId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($stripe_gateway_id !== null) {
            $resourcePath = str_replace(
                '{' . 'stripeGatewayId' . '}',
                ObjectSerializer::toPathValue($stripe_gateway_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = self::getHeaderSelector()->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = self::getHeaderSelector()->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if (self::getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = self::getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            self::getConfig()->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getStripeGatewayById
     *
     * Find StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\StripeGateway
     */
    public static function getStripeGatewayById($stripe_gateway_id)
    {
        list($response) = self::getStripeGatewayByIdWithHttpInfo($stripe_gateway_id);
        return $response;
    }


    /**
     * Operation getStripeGatewayByIdWithHttpInfo
     *
     * Find StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StripeGateway, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getStripeGatewayByIdWithHttpInfo($stripe_gateway_id)
    {
        $returnType = '\Tradenity\SDK\Resources\StripeGateway';  
        $request = self::getStripeGatewayByIdRequest($stripe_gateway_id); 

        try {
            $options = self::createHttpClientOption();
            try {
                $response = self::getHttpClient()->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Tradenity\SDK\Resources\StripeGateway',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getStripeGatewayByIdAsync
    *
    * Find StripeGateway
    *
    * @param  string $stripe_gateway_id ID of stripeGateway to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getStripeGatewayByIdAsync($stripe_gateway_id)
    {
        return self::getStripeGatewayByIdAsyncWithHttpInfo($stripe_gateway_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getStripeGatewayByIdAsyncWithHttpInfo
     *
     * Find StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getStripeGatewayByIdAsyncWithHttpInfo($stripe_gateway_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\StripeGateway';  
        $request = self::getStripeGatewayByIdRequest($stripe_gateway_id); 

        return self::getHttpClient()
            ->sendAsync($request, self::createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getStripeGatewayById'
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getStripeGatewayByIdRequest($stripe_gateway_id) 
    {
        // verify the required parameter 'stripe_gateway_id' is set
        if ($stripe_gateway_id === null || (is_array($stripe_gateway_id) && count($stripe_gateway_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $stripe_gateway_id when calling getStripeGatewayById'
            );
        }

        $resourcePath = '/stripeGateways/{stripeGatewayId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($stripe_gateway_id !== null) {
            $resourcePath = str_replace(
                '{' . 'stripeGatewayId' . '}',
                ObjectSerializer::toPathValue($stripe_gateway_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = self::getHeaderSelector()->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = self::getHeaderSelector()->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if (self::getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = self::getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            self::getConfig()->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
    * Operation listAllStripeGateways
    *
    * List StripeGateways
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\StripeGateway[page]
    */
    public static function listAllStripeGateways(array $parameters = [])
    {
        list($response) = self::listAllStripeGatewaysWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllStripeGatewaysWithHttpInfo
     *
     * List StripeGateways
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StripeGateway[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllStripeGatewaysWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\StripeGateway[page]'; 
        $request = self::listAllStripeGatewaysRequest($parameters);  

        try {
            $options = self::createHttpClientOption();
            try {
                $response = self::getHttpClient()->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Tradenity\SDK\Resources\StripeGateway[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllStripeGatewaysAsync
     *
     * List StripeGateways
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllStripeGatewaysAsync(array $parameters = [])
    {
        return self::listAllStripeGatewaysAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllStripeGatewaysAsyncWithHttpInfo
     *
     * List StripeGateways
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllStripeGatewaysAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\StripeGateway[page]'; 
        $request = self::listAllStripeGatewaysRequest($parameters);  

        return self::getHttpClient()
            ->sendAsync($request, self::createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listAllStripeGateways'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllStripeGatewaysRequest(array $parameters = [])  
    {

        $resourcePath = '/stripeGateways';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        foreach ($parameters as $key => $value) {
            $queryParams[$key] = ObjectSerializer::toQueryValue($value);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = self::getHeaderSelector()->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = self::getHeaderSelector()->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if (self::getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = self::getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            self::getConfig()->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation replaceStripeGatewayById
     *
     * Replace StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to replace (required)
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\StripeGateway
     */
    public static function replaceStripeGatewayById($stripe_gateway_id, $stripe_gateway)
    {
        list($response) = self::replaceStripeGatewayByIdWithHttpInfo($stripe_gateway_id, $stripe_gateway);
        return $response;
    }


    /**
     * Operation replaceStripeGatewayByIdWithHttpInfo
     *
     * Replace StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to replace (required)
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StripeGateway, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceStripeGatewayByIdWithHttpInfo($stripe_gateway_id, $stripe_gateway)
    {
        $returnType = '\Tradenity\SDK\Resources\StripeGateway';  
        $request = self::replaceStripeGatewayByIdRequest($stripe_gateway_id, $stripe_gateway); 

        try {
            $options = self::createHttpClientOption();
            try {
                $response = self::getHttpClient()->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Tradenity\SDK\Resources\StripeGateway',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceStripeGatewayByIdAsync
    *
    * Replace StripeGateway
    *
    * @param  string $stripe_gateway_id ID of stripeGateway to replace (required)
    * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceStripeGatewayByIdAsync($stripe_gateway_id, $stripe_gateway)
    {
        return self::replaceStripeGatewayByIdAsyncWithHttpInfo($stripe_gateway_id, $stripe_gateway)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceStripeGatewayByIdAsyncWithHttpInfo
     *
     * Replace StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to replace (required)
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceStripeGatewayByIdAsyncWithHttpInfo($stripe_gateway_id, $stripe_gateway) 
    {
        $returnType = '\Tradenity\SDK\Resources\StripeGateway';  
        $request = self::replaceStripeGatewayByIdRequest($stripe_gateway_id, $stripe_gateway); 

        return self::getHttpClient()
            ->sendAsync($request, self::createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'replaceStripeGatewayById'
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to replace (required)
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceStripeGatewayByIdRequest($stripe_gateway_id, $stripe_gateway) 
    {
        // verify the required parameter 'stripe_gateway_id' is set
        if ($stripe_gateway_id === null || (is_array($stripe_gateway_id) && count($stripe_gateway_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $stripe_gateway_id when calling replaceStripeGatewayById'
            );
        }
        // verify the required parameter 'stripe_gateway' is set
        if ($stripe_gateway === null || (is_array($stripe_gateway) && count($stripe_gateway) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $stripe_gateway when calling replaceStripeGatewayById'
            );
        }

        $resourcePath = '/stripeGateways/{stripeGatewayId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($stripe_gateway_id !== null) {
            $resourcePath = str_replace(
                '{' . 'stripeGatewayId' . '}',
                ObjectSerializer::toPathValue($stripe_gateway_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($stripe_gateway)) {
            $_tempBody = $stripe_gateway;
        }

        if ($multipart) {
            $headers = self::getHeaderSelector()->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = self::getHeaderSelector()->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if (self::getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = self::getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            self::getConfig()->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateStripeGatewayById
     *
     * Update StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to update. (required)
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\StripeGateway
     */
    public static function updateStripeGatewayById($stripe_gateway_id, $stripe_gateway)
    {
        list($response) = self::updateStripeGatewayByIdWithHttpInfo($stripe_gateway_id, $stripe_gateway);
        return $response;
    }


    /**
     * Operation updateStripeGatewayByIdWithHttpInfo
     *
     * Update StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to update. (required)
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StripeGateway, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateStripeGatewayByIdWithHttpInfo($stripe_gateway_id, $stripe_gateway)
    {
        $returnType = '\Tradenity\SDK\Resources\StripeGateway';  
        $request = self::updateStripeGatewayByIdRequest($stripe_gateway_id, $stripe_gateway); 

        try {
            $options = self::createHttpClientOption();
            try {
                $response = self::getHttpClient()->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Tradenity\SDK\Resources\StripeGateway',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateStripeGatewayByIdAsync
    *
    * Update StripeGateway
    *
    * @param  string $stripe_gateway_id ID of stripeGateway to update. (required)
    * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateStripeGatewayByIdAsync($stripe_gateway_id, $stripe_gateway)
    {
        return self::updateStripeGatewayByIdAsyncWithHttpInfo($stripe_gateway_id, $stripe_gateway)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateStripeGatewayByIdAsyncWithHttpInfo
     *
     * Update StripeGateway
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to update. (required)
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateStripeGatewayByIdAsyncWithHttpInfo($stripe_gateway_id, $stripe_gateway) 
    {
        $returnType = '\Tradenity\SDK\Resources\StripeGateway';  
        $request = self::updateStripeGatewayByIdRequest($stripe_gateway_id, $stripe_gateway); 

        return self::getHttpClient()
            ->sendAsync($request, self::createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateStripeGatewayById'
     *
     * @param  string $stripe_gateway_id ID of stripeGateway to update. (required)
     * @param  \Tradenity\SDK\Resources\StripeGateway $stripe_gateway Attributes of stripeGateway to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateStripeGatewayByIdRequest($stripe_gateway_id, $stripe_gateway) 
    {
        // verify the required parameter 'stripe_gateway_id' is set
        if ($stripe_gateway_id === null || (is_array($stripe_gateway_id) && count($stripe_gateway_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $stripe_gateway_id when calling updateStripeGatewayById'
            );
        }
        // verify the required parameter 'stripe_gateway' is set
        if ($stripe_gateway === null || (is_array($stripe_gateway) && count($stripe_gateway) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $stripe_gateway when calling updateStripeGatewayById'
            );
        }

        $resourcePath = '/stripeGateways/{stripeGatewayId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($stripe_gateway_id !== null) {
            $resourcePath = str_replace(
                '{' . 'stripeGatewayId' . '}',
                ObjectSerializer::toPathValue($stripe_gateway_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($stripe_gateway)) {
            $_tempBody = $stripe_gateway;
        }

        if ($multipart) {
            $headers = self::getHeaderSelector()->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = self::getHeaderSelector()->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if (self::getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = self::getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            self::getConfig()->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected static function createHttpClientOption()
    {
        $options = [];
        if (self::getConfig()->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen(self::getConfig()->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . self::getConfig()->getDebugFile());
            }
        }

        return $options;
    }
}
