<?php
/**
 * CreditCardPayment
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
 * CreditCardPayment Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class CreditCardPayment
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
    protected static $swaggerModelName = 'CreditCardPayment';

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
        'amount' => 'int',
        'order' => '\Tradenity\SDK\Resources\Order',
        'payment_source' => '\Tradenity\SDK\Resources\PaymentSource',
        'currency' => '\Tradenity\SDK\Resources\Currency',
        'status' => 'string',
        'gateway' => '\Tradenity\SDK\Resources\Gateway',
        'payment_mode' => 'string',
        'gateway_operation_id' => 'string'
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
        'amount' => 'int32',
        'order' => null,
        'payment_source' => null,
        'currency' => null,
        'status' => null,
        'gateway' => null,
        'payment_mode' => null,
        'gateway_operation_id' => null
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
        'amount' => 'amount',
        'order' => 'order',
        'payment_source' => 'paymentSource',
        'currency' => 'currency',
        'status' => 'status',
        'gateway' => 'gateway',
        'payment_mode' => 'paymentMode',
        'gateway_operation_id' => 'gatewayOperationId'
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
        'amount' => 'setAmount',
        'order' => 'setOrder',
        'payment_source' => 'setPaymentSource',
        'currency' => 'setCurrency',
        'status' => 'setStatus',
        'gateway' => 'setGateway',
        'payment_mode' => 'setPaymentMode',
        'gateway_operation_id' => 'setGatewayOperationId'
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
        'amount' => 'getAmount',
        'order' => 'getOrder',
        'payment_source' => 'getPaymentSource',
        'currency' => 'getCurrency',
        'status' => 'getStatus',
        'gateway' => 'getGateway',
        'payment_mode' => 'getPaymentMode',
        'gateway_operation_id' => 'getGatewayOperationId'
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
    public function getStatusAllowableValues()
    {
        return [
            
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentModeAllowableValues()
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null; 
        $this->container['order'] = isset($data['order']) ? $data['order'] : null; 
        $this->container['payment_source'] = isset($data['payment_source']) ? $data['payment_source'] : null; 
        $this->container['payment_source'] = isset($data['paymentSource']) ? $data['paymentSource'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null; 
        $this->container['status'] = isset($data['status']) ? $data['status'] : null; 
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null; 
        $this->container['payment_mode'] = isset($data['payment_mode']) ? $data['payment_mode'] : null; 
        $this->container['payment_mode'] = isset($data['paymentMode']) ? $data['paymentMode'] : null;
        $this->container['gateway_operation_id'] = isset($data['gateway_operation_id']) ? $data['gateway_operation_id'] : null; 
        $this->container['gateway_operation_id'] = isset($data['gatewayOperationId']) ? $data['gatewayOperationId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['payment_source'] === null) {
            $invalidProperties[] = "'payment_source' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
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

        if ($this->container['gateway'] === null) {
            $invalidProperties[] = "'gateway' can't be null";
        }
        $allowedValues = $this->getPaymentModeAllowableValues();
        if (!is_null($this->container['payment_mode']) && !in_array($this->container['payment_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['gateway_operation_id'] === null) {
            $invalidProperties[] = "'gateway_operation_id' can't be null";
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
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        /* */
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Tradenity\SDK\Resources\Order
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Tradenity\SDK\Resources\Order $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        /* */
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets payment_source
     *
     * @return \Tradenity\SDK\Resources\PaymentSource
     */
    public function getPaymentSource()
    {
        return $this->container['payment_source'];
    }

    /**
     * Sets payment_source
     *
     * @param \Tradenity\SDK\Resources\PaymentSource $payment_source payment_source
     *
     * @return $this
     */
    public function setPaymentSource($payment_source)
    {
        /* */
        $this->container['payment_source'] = $payment_source;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Tradenity\SDK\Resources\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Tradenity\SDK\Resources\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        /* */
        $this->container['currency'] = $currency;

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
     * Gets gateway
     *
     * @return \Tradenity\SDK\Resources\Gateway
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     *
     * @param \Tradenity\SDK\Resources\Gateway $gateway gateway
     *
     * @return $this
     */
    public function setGateway($gateway)
    {
        /* */
        $this->container['gateway'] = $gateway;

        return $this;
    }

    /**
     * Gets payment_mode
     *
     * @return string
     */
    public function getPaymentMode()
    {
        return $this->container['payment_mode'];
    }

    /**
     * Sets payment_mode
     *
     * @param string $payment_mode payment_mode
     *
     * @return $this
     */
    public function setPaymentMode($payment_mode)
    {
        /*
        $allowedValues = $this->getPaymentModeAllowableValues();
        if (!is_null($payment_mode) && !in_array($payment_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
 */
        $this->container['payment_mode'] = $payment_mode;

        return $this;
    }

    /**
     * Gets gateway_operation_id
     *
     * @return string
     */
    public function getGatewayOperationId()
    {
        return $this->container['gateway_operation_id'];
    }

    /**
     * Sets gateway_operation_id
     *
     * @param string $gateway_operation_id gateway_operation_id
     *
     * @return $this
     */
    public function setGatewayOperationId($gateway_operation_id)
    {
        /* */
        $this->container['gateway_operation_id'] = $gateway_operation_id;

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
     * List CreditCardPayments
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[CreditCardPayment]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllCreditCardPayments(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllCreditCardPayments();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllCreditCardPayments($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllCreditCardPayments($parameters)[0];
    }


    /**
     * Operation getCreditCardPaymentById
     *
     * Find CreditCardPayment By ID
     *
     * @param  string $id ID of CreditCardPayment to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\CreditCardPayment
     */
    public static function findById($id)
    {
        return self::getCreditCardPaymentById($id);
    }

    /**
     * Operation create
     *
     * Create New CreditCardPayment
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\CreditCardPayment
     */
    public function create()
    {
        $instance = self::createCreditCardPayment($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateCreditCardPaymentById
    *
    * Update CreditCardPayment
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\CreditCardPayment
    */
    public function update()
    {
        return self::updateCreditCardPaymentById($this->getId(), $this);
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
        self::deleteCreditCardPaymentById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete CreditCardPayment By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteCreditCardPaymentById($id);
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
     * Operation createCreditCardPayment
     *
     * Create CreditCardPayment
     *
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\CreditCardPayment
     */
    public static function createCreditCardPayment($credit_card_payment)
    {
        list($response) = self::createCreditCardPaymentWithHttpInfo($credit_card_payment);
        return $response;
    }


    /**
     * Operation createCreditCardPaymentWithHttpInfo
     *
     * Create CreditCardPayment
     *
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\CreditCardPayment, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createCreditCardPaymentWithHttpInfo($credit_card_payment)
    {
        $returnType = '\Tradenity\SDK\Resources\CreditCardPayment';  
        $request = self::createCreditCardPaymentRequest($credit_card_payment); 

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
                        '\Tradenity\SDK\Resources\CreditCardPayment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createCreditCardPaymentAsync
    *
    * Create CreditCardPayment
    *
    * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createCreditCardPaymentAsync($credit_card_payment)
    {
        return self::createCreditCardPaymentAsyncWithHttpInfo($credit_card_payment)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createCreditCardPaymentAsyncWithHttpInfo
     *
     * Create CreditCardPayment
     *
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createCreditCardPaymentAsyncWithHttpInfo($credit_card_payment) 
    {
        $returnType = '\Tradenity\SDK\Resources\CreditCardPayment';  
        $request = self::createCreditCardPaymentRequest($credit_card_payment); 

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
     * Create request for operation 'createCreditCardPayment'
     *
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createCreditCardPaymentRequest($credit_card_payment) 
    {
        // verify the required parameter 'credit_card_payment' is set
        if ($credit_card_payment === null || (is_array($credit_card_payment) && count($credit_card_payment) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_card_payment when calling createCreditCardPayment'
            );
        }

        $resourcePath = '/creditCardPayments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($credit_card_payment)) {
            $_tempBody = $credit_card_payment;
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
     * Operation deleteCreditCardPaymentById
     *
     * Delete CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteCreditCardPaymentById($credit_card_payment_id)
    {
        self::deleteCreditCardPaymentByIdWithHttpInfo($credit_card_payment_id);
    }


    /**
     * Operation deleteCreditCardPaymentByIdWithHttpInfo
     *
     * Delete CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteCreditCardPaymentByIdWithHttpInfo($credit_card_payment_id)
    {
        $returnType = '';  
        $request = self::deleteCreditCardPaymentByIdRequest($credit_card_payment_id); 

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
    * Operation deleteCreditCardPaymentByIdAsync
    *
    * Delete CreditCardPayment
    *
    * @param  string $credit_card_payment_id ID of creditCardPayment to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteCreditCardPaymentByIdAsync($credit_card_payment_id)
    {
        return self::deleteCreditCardPaymentByIdAsyncWithHttpInfo($credit_card_payment_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteCreditCardPaymentByIdAsyncWithHttpInfo
     *
     * Delete CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteCreditCardPaymentByIdAsyncWithHttpInfo($credit_card_payment_id) 
    {
        $returnType = '';  
        $request = self::deleteCreditCardPaymentByIdRequest($credit_card_payment_id); 

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
     * Create request for operation 'deleteCreditCardPaymentById'
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteCreditCardPaymentByIdRequest($credit_card_payment_id) 
    {
        // verify the required parameter 'credit_card_payment_id' is set
        if ($credit_card_payment_id === null || (is_array($credit_card_payment_id) && count($credit_card_payment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_card_payment_id when calling deleteCreditCardPaymentById'
            );
        }

        $resourcePath = '/creditCardPayments/{creditCardPaymentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_card_payment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditCardPaymentId' . '}',
                ObjectSerializer::toPathValue($credit_card_payment_id),
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
     * Operation getCreditCardPaymentById
     *
     * Find CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\CreditCardPayment
     */
    public static function getCreditCardPaymentById($credit_card_payment_id)
    {
        list($response) = self::getCreditCardPaymentByIdWithHttpInfo($credit_card_payment_id);
        return $response;
    }


    /**
     * Operation getCreditCardPaymentByIdWithHttpInfo
     *
     * Find CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\CreditCardPayment, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getCreditCardPaymentByIdWithHttpInfo($credit_card_payment_id)
    {
        $returnType = '\Tradenity\SDK\Resources\CreditCardPayment';  
        $request = self::getCreditCardPaymentByIdRequest($credit_card_payment_id); 

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
                        '\Tradenity\SDK\Resources\CreditCardPayment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getCreditCardPaymentByIdAsync
    *
    * Find CreditCardPayment
    *
    * @param  string $credit_card_payment_id ID of creditCardPayment to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getCreditCardPaymentByIdAsync($credit_card_payment_id)
    {
        return self::getCreditCardPaymentByIdAsyncWithHttpInfo($credit_card_payment_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getCreditCardPaymentByIdAsyncWithHttpInfo
     *
     * Find CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getCreditCardPaymentByIdAsyncWithHttpInfo($credit_card_payment_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\CreditCardPayment';  
        $request = self::getCreditCardPaymentByIdRequest($credit_card_payment_id); 

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
     * Create request for operation 'getCreditCardPaymentById'
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getCreditCardPaymentByIdRequest($credit_card_payment_id) 
    {
        // verify the required parameter 'credit_card_payment_id' is set
        if ($credit_card_payment_id === null || (is_array($credit_card_payment_id) && count($credit_card_payment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_card_payment_id when calling getCreditCardPaymentById'
            );
        }

        $resourcePath = '/creditCardPayments/{creditCardPaymentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_card_payment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditCardPaymentId' . '}',
                ObjectSerializer::toPathValue($credit_card_payment_id),
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
    * Operation listAllCreditCardPayments
    *
    * List CreditCardPayments
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\CreditCardPayment[page]
    */
    public static function listAllCreditCardPayments(array $parameters = [])
    {
        list($response) = self::listAllCreditCardPaymentsWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllCreditCardPaymentsWithHttpInfo
     *
     * List CreditCardPayments
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\CreditCardPayment[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllCreditCardPaymentsWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\CreditCardPayment[page]'; 
        $request = self::listAllCreditCardPaymentsRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\CreditCardPayment[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllCreditCardPaymentsAsync
     *
     * List CreditCardPayments
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllCreditCardPaymentsAsync(array $parameters = [])
    {
        return self::listAllCreditCardPaymentsAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllCreditCardPaymentsAsyncWithHttpInfo
     *
     * List CreditCardPayments
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllCreditCardPaymentsAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\CreditCardPayment[page]'; 
        $request = self::listAllCreditCardPaymentsRequest($parameters);  

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
     * Create request for operation 'listAllCreditCardPayments'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllCreditCardPaymentsRequest(array $parameters = [])  
    {

        $resourcePath = '/creditCardPayments';
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
     * Operation replaceCreditCardPaymentById
     *
     * Replace CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to replace (required)
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\CreditCardPayment
     */
    public static function replaceCreditCardPaymentById($credit_card_payment_id, $credit_card_payment)
    {
        list($response) = self::replaceCreditCardPaymentByIdWithHttpInfo($credit_card_payment_id, $credit_card_payment);
        return $response;
    }


    /**
     * Operation replaceCreditCardPaymentByIdWithHttpInfo
     *
     * Replace CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to replace (required)
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\CreditCardPayment, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceCreditCardPaymentByIdWithHttpInfo($credit_card_payment_id, $credit_card_payment)
    {
        $returnType = '\Tradenity\SDK\Resources\CreditCardPayment';  
        $request = self::replaceCreditCardPaymentByIdRequest($credit_card_payment_id, $credit_card_payment); 

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
                        '\Tradenity\SDK\Resources\CreditCardPayment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceCreditCardPaymentByIdAsync
    *
    * Replace CreditCardPayment
    *
    * @param  string $credit_card_payment_id ID of creditCardPayment to replace (required)
    * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceCreditCardPaymentByIdAsync($credit_card_payment_id, $credit_card_payment)
    {
        return self::replaceCreditCardPaymentByIdAsyncWithHttpInfo($credit_card_payment_id, $credit_card_payment)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceCreditCardPaymentByIdAsyncWithHttpInfo
     *
     * Replace CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to replace (required)
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceCreditCardPaymentByIdAsyncWithHttpInfo($credit_card_payment_id, $credit_card_payment) 
    {
        $returnType = '\Tradenity\SDK\Resources\CreditCardPayment';  
        $request = self::replaceCreditCardPaymentByIdRequest($credit_card_payment_id, $credit_card_payment); 

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
     * Create request for operation 'replaceCreditCardPaymentById'
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to replace (required)
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceCreditCardPaymentByIdRequest($credit_card_payment_id, $credit_card_payment) 
    {
        // verify the required parameter 'credit_card_payment_id' is set
        if ($credit_card_payment_id === null || (is_array($credit_card_payment_id) && count($credit_card_payment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_card_payment_id when calling replaceCreditCardPaymentById'
            );
        }
        // verify the required parameter 'credit_card_payment' is set
        if ($credit_card_payment === null || (is_array($credit_card_payment) && count($credit_card_payment) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_card_payment when calling replaceCreditCardPaymentById'
            );
        }

        $resourcePath = '/creditCardPayments/{creditCardPaymentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_card_payment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditCardPaymentId' . '}',
                ObjectSerializer::toPathValue($credit_card_payment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($credit_card_payment)) {
            $_tempBody = $credit_card_payment;
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
     * Operation updateCreditCardPaymentById
     *
     * Update CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to update. (required)
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\CreditCardPayment
     */
    public static function updateCreditCardPaymentById($credit_card_payment_id, $credit_card_payment)
    {
        list($response) = self::updateCreditCardPaymentByIdWithHttpInfo($credit_card_payment_id, $credit_card_payment);
        return $response;
    }


    /**
     * Operation updateCreditCardPaymentByIdWithHttpInfo
     *
     * Update CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to update. (required)
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\CreditCardPayment, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateCreditCardPaymentByIdWithHttpInfo($credit_card_payment_id, $credit_card_payment)
    {
        $returnType = '\Tradenity\SDK\Resources\CreditCardPayment';  
        $request = self::updateCreditCardPaymentByIdRequest($credit_card_payment_id, $credit_card_payment); 

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
                        '\Tradenity\SDK\Resources\CreditCardPayment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateCreditCardPaymentByIdAsync
    *
    * Update CreditCardPayment
    *
    * @param  string $credit_card_payment_id ID of creditCardPayment to update. (required)
    * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateCreditCardPaymentByIdAsync($credit_card_payment_id, $credit_card_payment)
    {
        return self::updateCreditCardPaymentByIdAsyncWithHttpInfo($credit_card_payment_id, $credit_card_payment)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateCreditCardPaymentByIdAsyncWithHttpInfo
     *
     * Update CreditCardPayment
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to update. (required)
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateCreditCardPaymentByIdAsyncWithHttpInfo($credit_card_payment_id, $credit_card_payment) 
    {
        $returnType = '\Tradenity\SDK\Resources\CreditCardPayment';  
        $request = self::updateCreditCardPaymentByIdRequest($credit_card_payment_id, $credit_card_payment); 

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
     * Create request for operation 'updateCreditCardPaymentById'
     *
     * @param  string $credit_card_payment_id ID of creditCardPayment to update. (required)
     * @param  \Tradenity\SDK\Resources\CreditCardPayment $credit_card_payment Attributes of creditCardPayment to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateCreditCardPaymentByIdRequest($credit_card_payment_id, $credit_card_payment) 
    {
        // verify the required parameter 'credit_card_payment_id' is set
        if ($credit_card_payment_id === null || (is_array($credit_card_payment_id) && count($credit_card_payment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_card_payment_id when calling updateCreditCardPaymentById'
            );
        }
        // verify the required parameter 'credit_card_payment' is set
        if ($credit_card_payment === null || (is_array($credit_card_payment) && count($credit_card_payment) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_card_payment when calling updateCreditCardPaymentById'
            );
        }

        $resourcePath = '/creditCardPayments/{creditCardPaymentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_card_payment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditCardPaymentId' . '}',
                ObjectSerializer::toPathValue($credit_card_payment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($credit_card_payment)) {
            $_tempBody = $credit_card_payment;
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
