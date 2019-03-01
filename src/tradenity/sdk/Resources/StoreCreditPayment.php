<?php
/**
 * StoreCreditPayment
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
 * StoreCreditPayment Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class StoreCreditPayment
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
    protected static $swaggerModelName = 'StoreCreditPayment';

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
        'store_credit' => '\Tradenity\SDK\Resources\StoreCredit'
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
        'store_credit' => null
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
        'store_credit' => 'storeCredit'
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
        'store_credit' => 'setStoreCredit'
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
        'store_credit' => 'getStoreCredit'
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
        $this->container['store_credit'] = isset($data['store_credit']) ? $data['store_credit'] : null; 
        $this->container['store_credit'] = isset($data['storeCredit']) ? $data['storeCredit'] : null;
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

        if ($this->container['store_credit'] === null) {
            $invalidProperties[] = "'store_credit' can't be null";
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
     * Gets store_credit
     *
     * @return \Tradenity\SDK\Resources\StoreCredit
     */
    public function getStoreCredit()
    {
        return $this->container['store_credit'];
    }

    /**
     * Sets store_credit
     *
     * @param \Tradenity\SDK\Resources\StoreCredit $store_credit store_credit
     *
     * @return $this
     */
    public function setStoreCredit($store_credit)
    {
        /* */
        $this->container['store_credit'] = $store_credit;

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
     * List StoreCreditPayments
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[StoreCreditPayment]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllStoreCreditPayments(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllStoreCreditPayments();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllStoreCreditPayments($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllStoreCreditPayments($parameters)[0];
    }


    /**
     * Operation getStoreCreditPaymentById
     *
     * Find StoreCreditPayment By ID
     *
     * @param  string $id ID of StoreCreditPayment to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\StoreCreditPayment
     */
    public static function findById($id)
    {
        return self::getStoreCreditPaymentById($id);
    }

    /**
     * Operation create
     *
     * Create New StoreCreditPayment
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\StoreCreditPayment
     */
    public function create()
    {
        $instance = self::createStoreCreditPayment($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateStoreCreditPaymentById
    *
    * Update StoreCreditPayment
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\StoreCreditPayment
    */
    public function update()
    {
        return self::updateStoreCreditPaymentById($this->getId(), $this);
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
        self::deleteStoreCreditPaymentById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete StoreCreditPayment By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteStoreCreditPaymentById($id);
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
     * Operation createStoreCreditPayment
     *
     * Create StoreCreditPayment
     *
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\StoreCreditPayment
     */
    public static function createStoreCreditPayment($store_credit_payment)
    {
        list($response) = self::createStoreCreditPaymentWithHttpInfo($store_credit_payment);
        return $response;
    }


    /**
     * Operation createStoreCreditPaymentWithHttpInfo
     *
     * Create StoreCreditPayment
     *
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StoreCreditPayment, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createStoreCreditPaymentWithHttpInfo($store_credit_payment)
    {
        $returnType = '\Tradenity\SDK\Resources\StoreCreditPayment';  
        $request = self::createStoreCreditPaymentRequest($store_credit_payment); 

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
                        '\Tradenity\SDK\Resources\StoreCreditPayment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createStoreCreditPaymentAsync
    *
    * Create StoreCreditPayment
    *
    * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createStoreCreditPaymentAsync($store_credit_payment)
    {
        return self::createStoreCreditPaymentAsyncWithHttpInfo($store_credit_payment)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createStoreCreditPaymentAsyncWithHttpInfo
     *
     * Create StoreCreditPayment
     *
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createStoreCreditPaymentAsyncWithHttpInfo($store_credit_payment) 
    {
        $returnType = '\Tradenity\SDK\Resources\StoreCreditPayment';  
        $request = self::createStoreCreditPaymentRequest($store_credit_payment); 

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
     * Create request for operation 'createStoreCreditPayment'
     *
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createStoreCreditPaymentRequest($store_credit_payment) 
    {
        // verify the required parameter 'store_credit_payment' is set
        if ($store_credit_payment === null || (is_array($store_credit_payment) && count($store_credit_payment) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_credit_payment when calling createStoreCreditPayment'
            );
        }

        $resourcePath = '/storeCreditPayments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($store_credit_payment)) {
            $_tempBody = $store_credit_payment;
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
     * Operation deleteStoreCreditPaymentById
     *
     * Delete StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteStoreCreditPaymentById($store_credit_payment_id)
    {
        self::deleteStoreCreditPaymentByIdWithHttpInfo($store_credit_payment_id);
    }


    /**
     * Operation deleteStoreCreditPaymentByIdWithHttpInfo
     *
     * Delete StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteStoreCreditPaymentByIdWithHttpInfo($store_credit_payment_id)
    {
        $returnType = '';  
        $request = self::deleteStoreCreditPaymentByIdRequest($store_credit_payment_id); 

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
    * Operation deleteStoreCreditPaymentByIdAsync
    *
    * Delete StoreCreditPayment
    *
    * @param  string $store_credit_payment_id ID of storeCreditPayment to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteStoreCreditPaymentByIdAsync($store_credit_payment_id)
    {
        return self::deleteStoreCreditPaymentByIdAsyncWithHttpInfo($store_credit_payment_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteStoreCreditPaymentByIdAsyncWithHttpInfo
     *
     * Delete StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteStoreCreditPaymentByIdAsyncWithHttpInfo($store_credit_payment_id) 
    {
        $returnType = '';  
        $request = self::deleteStoreCreditPaymentByIdRequest($store_credit_payment_id); 

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
     * Create request for operation 'deleteStoreCreditPaymentById'
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteStoreCreditPaymentByIdRequest($store_credit_payment_id) 
    {
        // verify the required parameter 'store_credit_payment_id' is set
        if ($store_credit_payment_id === null || (is_array($store_credit_payment_id) && count($store_credit_payment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_credit_payment_id when calling deleteStoreCreditPaymentById'
            );
        }

        $resourcePath = '/storeCreditPayments/{storeCreditPaymentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($store_credit_payment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'storeCreditPaymentId' . '}',
                ObjectSerializer::toPathValue($store_credit_payment_id),
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
     * Operation getStoreCreditPaymentById
     *
     * Find StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\StoreCreditPayment
     */
    public static function getStoreCreditPaymentById($store_credit_payment_id)
    {
        list($response) = self::getStoreCreditPaymentByIdWithHttpInfo($store_credit_payment_id);
        return $response;
    }


    /**
     * Operation getStoreCreditPaymentByIdWithHttpInfo
     *
     * Find StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StoreCreditPayment, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getStoreCreditPaymentByIdWithHttpInfo($store_credit_payment_id)
    {
        $returnType = '\Tradenity\SDK\Resources\StoreCreditPayment';  
        $request = self::getStoreCreditPaymentByIdRequest($store_credit_payment_id); 

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
                        '\Tradenity\SDK\Resources\StoreCreditPayment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getStoreCreditPaymentByIdAsync
    *
    * Find StoreCreditPayment
    *
    * @param  string $store_credit_payment_id ID of storeCreditPayment to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getStoreCreditPaymentByIdAsync($store_credit_payment_id)
    {
        return self::getStoreCreditPaymentByIdAsyncWithHttpInfo($store_credit_payment_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getStoreCreditPaymentByIdAsyncWithHttpInfo
     *
     * Find StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getStoreCreditPaymentByIdAsyncWithHttpInfo($store_credit_payment_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\StoreCreditPayment';  
        $request = self::getStoreCreditPaymentByIdRequest($store_credit_payment_id); 

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
     * Create request for operation 'getStoreCreditPaymentById'
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getStoreCreditPaymentByIdRequest($store_credit_payment_id) 
    {
        // verify the required parameter 'store_credit_payment_id' is set
        if ($store_credit_payment_id === null || (is_array($store_credit_payment_id) && count($store_credit_payment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_credit_payment_id when calling getStoreCreditPaymentById'
            );
        }

        $resourcePath = '/storeCreditPayments/{storeCreditPaymentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($store_credit_payment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'storeCreditPaymentId' . '}',
                ObjectSerializer::toPathValue($store_credit_payment_id),
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
    * Operation listAllStoreCreditPayments
    *
    * List StoreCreditPayments
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\StoreCreditPayment[page]
    */
    public static function listAllStoreCreditPayments(array $parameters = [])
    {
        list($response) = self::listAllStoreCreditPaymentsWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllStoreCreditPaymentsWithHttpInfo
     *
     * List StoreCreditPayments
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StoreCreditPayment[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllStoreCreditPaymentsWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\StoreCreditPayment[page]'; 
        $request = self::listAllStoreCreditPaymentsRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\StoreCreditPayment[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllStoreCreditPaymentsAsync
     *
     * List StoreCreditPayments
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllStoreCreditPaymentsAsync(array $parameters = [])
    {
        return self::listAllStoreCreditPaymentsAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllStoreCreditPaymentsAsyncWithHttpInfo
     *
     * List StoreCreditPayments
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllStoreCreditPaymentsAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\StoreCreditPayment[page]'; 
        $request = self::listAllStoreCreditPaymentsRequest($parameters);  

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
     * Create request for operation 'listAllStoreCreditPayments'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllStoreCreditPaymentsRequest(array $parameters = [])  
    {

        $resourcePath = '/storeCreditPayments';
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
     * Operation replaceStoreCreditPaymentById
     *
     * Replace StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to replace (required)
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\StoreCreditPayment
     */
    public static function replaceStoreCreditPaymentById($store_credit_payment_id, $store_credit_payment)
    {
        list($response) = self::replaceStoreCreditPaymentByIdWithHttpInfo($store_credit_payment_id, $store_credit_payment);
        return $response;
    }


    /**
     * Operation replaceStoreCreditPaymentByIdWithHttpInfo
     *
     * Replace StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to replace (required)
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StoreCreditPayment, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceStoreCreditPaymentByIdWithHttpInfo($store_credit_payment_id, $store_credit_payment)
    {
        $returnType = '\Tradenity\SDK\Resources\StoreCreditPayment';  
        $request = self::replaceStoreCreditPaymentByIdRequest($store_credit_payment_id, $store_credit_payment); 

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
                        '\Tradenity\SDK\Resources\StoreCreditPayment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceStoreCreditPaymentByIdAsync
    *
    * Replace StoreCreditPayment
    *
    * @param  string $store_credit_payment_id ID of storeCreditPayment to replace (required)
    * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceStoreCreditPaymentByIdAsync($store_credit_payment_id, $store_credit_payment)
    {
        return self::replaceStoreCreditPaymentByIdAsyncWithHttpInfo($store_credit_payment_id, $store_credit_payment)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceStoreCreditPaymentByIdAsyncWithHttpInfo
     *
     * Replace StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to replace (required)
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceStoreCreditPaymentByIdAsyncWithHttpInfo($store_credit_payment_id, $store_credit_payment) 
    {
        $returnType = '\Tradenity\SDK\Resources\StoreCreditPayment';  
        $request = self::replaceStoreCreditPaymentByIdRequest($store_credit_payment_id, $store_credit_payment); 

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
     * Create request for operation 'replaceStoreCreditPaymentById'
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to replace (required)
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceStoreCreditPaymentByIdRequest($store_credit_payment_id, $store_credit_payment) 
    {
        // verify the required parameter 'store_credit_payment_id' is set
        if ($store_credit_payment_id === null || (is_array($store_credit_payment_id) && count($store_credit_payment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_credit_payment_id when calling replaceStoreCreditPaymentById'
            );
        }
        // verify the required parameter 'store_credit_payment' is set
        if ($store_credit_payment === null || (is_array($store_credit_payment) && count($store_credit_payment) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_credit_payment when calling replaceStoreCreditPaymentById'
            );
        }

        $resourcePath = '/storeCreditPayments/{storeCreditPaymentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($store_credit_payment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'storeCreditPaymentId' . '}',
                ObjectSerializer::toPathValue($store_credit_payment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($store_credit_payment)) {
            $_tempBody = $store_credit_payment;
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
     * Operation updateStoreCreditPaymentById
     *
     * Update StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to update. (required)
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\StoreCreditPayment
     */
    public static function updateStoreCreditPaymentById($store_credit_payment_id, $store_credit_payment)
    {
        list($response) = self::updateStoreCreditPaymentByIdWithHttpInfo($store_credit_payment_id, $store_credit_payment);
        return $response;
    }


    /**
     * Operation updateStoreCreditPaymentByIdWithHttpInfo
     *
     * Update StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to update. (required)
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StoreCreditPayment, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateStoreCreditPaymentByIdWithHttpInfo($store_credit_payment_id, $store_credit_payment)
    {
        $returnType = '\Tradenity\SDK\Resources\StoreCreditPayment';  
        $request = self::updateStoreCreditPaymentByIdRequest($store_credit_payment_id, $store_credit_payment); 

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
                        '\Tradenity\SDK\Resources\StoreCreditPayment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateStoreCreditPaymentByIdAsync
    *
    * Update StoreCreditPayment
    *
    * @param  string $store_credit_payment_id ID of storeCreditPayment to update. (required)
    * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateStoreCreditPaymentByIdAsync($store_credit_payment_id, $store_credit_payment)
    {
        return self::updateStoreCreditPaymentByIdAsyncWithHttpInfo($store_credit_payment_id, $store_credit_payment)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateStoreCreditPaymentByIdAsyncWithHttpInfo
     *
     * Update StoreCreditPayment
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to update. (required)
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateStoreCreditPaymentByIdAsyncWithHttpInfo($store_credit_payment_id, $store_credit_payment) 
    {
        $returnType = '\Tradenity\SDK\Resources\StoreCreditPayment';  
        $request = self::updateStoreCreditPaymentByIdRequest($store_credit_payment_id, $store_credit_payment); 

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
     * Create request for operation 'updateStoreCreditPaymentById'
     *
     * @param  string $store_credit_payment_id ID of storeCreditPayment to update. (required)
     * @param  \Tradenity\SDK\Resources\StoreCreditPayment $store_credit_payment Attributes of storeCreditPayment to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateStoreCreditPaymentByIdRequest($store_credit_payment_id, $store_credit_payment) 
    {
        // verify the required parameter 'store_credit_payment_id' is set
        if ($store_credit_payment_id === null || (is_array($store_credit_payment_id) && count($store_credit_payment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_credit_payment_id when calling updateStoreCreditPaymentById'
            );
        }
        // verify the required parameter 'store_credit_payment' is set
        if ($store_credit_payment === null || (is_array($store_credit_payment) && count($store_credit_payment) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_credit_payment when calling updateStoreCreditPaymentById'
            );
        }

        $resourcePath = '/storeCreditPayments/{storeCreditPaymentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($store_credit_payment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'storeCreditPaymentId' . '}',
                ObjectSerializer::toPathValue($store_credit_payment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($store_credit_payment)) {
            $_tempBody = $store_credit_payment;
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
