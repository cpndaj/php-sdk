<?php
/**
 * PaymentCard
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
 * PaymentCard Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class PaymentCard
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
    protected static $swaggerModelName = 'PaymentCard';

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
        'customer' => '\Tradenity\SDK\Resources\Customer',
        'reusable' => 'bool',
        'status' => 'string',
        'card_holder_name' => 'string',
        'address' => '\Tradenity\SDK\Resources\Address',
        'brand' => 'string',
        'expiration_month' => 'string',
        'expiration_year' => 'string',
        'ccv' => 'string',
        'card_number' => 'string',
        'card_last_four_digits' => 'string'
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
        'customer' => null,
        'reusable' => null,
        'status' => null,
        'card_holder_name' => null,
        'address' => null,
        'brand' => null,
        'expiration_month' => null,
        'expiration_year' => null,
        'ccv' => null,
        'card_number' => null,
        'card_last_four_digits' => null
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
        'customer' => 'customer',
        'reusable' => 'reusable',
        'status' => 'status',
        'card_holder_name' => 'cardHolderName',
        'address' => 'address',
        'brand' => 'brand',
        'expiration_month' => 'expirationMonth',
        'expiration_year' => 'expirationYear',
        'ccv' => 'CCV',
        'card_number' => 'cardNumber',
        'card_last_four_digits' => 'cardLastFourDigits'
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
        'customer' => 'setCustomer',
        'reusable' => 'setReusable',
        'status' => 'setStatus',
        'card_holder_name' => 'setCardHolderName',
        'address' => 'setAddress',
        'brand' => 'setBrand',
        'expiration_month' => 'setExpirationMonth',
        'expiration_year' => 'setExpirationYear',
        'ccv' => 'setCcv',
        'card_number' => 'setCardNumber',
        'card_last_four_digits' => 'setCardLastFourDigits'
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
        'customer' => 'getCustomer',
        'reusable' => 'getReusable',
        'status' => 'getStatus',
        'card_holder_name' => 'getCardHolderName',
        'address' => 'getAddress',
        'brand' => 'getBrand',
        'expiration_month' => 'getExpirationMonth',
        'expiration_year' => 'getExpirationYear',
        'ccv' => 'getCcv',
        'card_number' => 'getCardNumber',
        'card_last_four_digits' => 'getCardLastFourDigits'
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
    public function getBrandAllowableValues()
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
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null; 
        $this->container['reusable'] = isset($data['reusable']) ? $data['reusable'] : null; 
        $this->container['status'] = isset($data['status']) ? $data['status'] : null; 
        $this->container['card_holder_name'] = isset($data['card_holder_name']) ? $data['card_holder_name'] : null; 
        $this->container['card_holder_name'] = isset($data['cardHolderName']) ? $data['cardHolderName'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null; 
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null; 
        $this->container['expiration_month'] = isset($data['expiration_month']) ? $data['expiration_month'] : null; 
        $this->container['expiration_month'] = isset($data['expirationMonth']) ? $data['expirationMonth'] : null;
        $this->container['expiration_year'] = isset($data['expiration_year']) ? $data['expiration_year'] : null; 
        $this->container['expiration_year'] = isset($data['expirationYear']) ? $data['expirationYear'] : null;
        $this->container['ccv'] = isset($data['ccv']) ? $data['ccv'] : null; 
        $this->container['ccv'] = isset($data['CCV']) ? $data['CCV'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null; 
        $this->container['card_number'] = isset($data['cardNumber']) ? $data['cardNumber'] : null;
        $this->container['card_last_four_digits'] = isset($data['card_last_four_digits']) ? $data['card_last_four_digits'] : null; 
        $this->container['card_last_four_digits'] = isset($data['cardLastFourDigits']) ? $data['cardLastFourDigits'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
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

        if ($this->container['brand'] === null) {
            $invalidProperties[] = "'brand' can't be null";
        }
        $allowedValues = $this->getBrandAllowableValues();
        if (!is_null($this->container['brand']) && !in_array($this->container['brand'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'brand', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['expiration_month'] === null) {
            $invalidProperties[] = "'expiration_month' can't be null";
        }
        if ($this->container['expiration_year'] === null) {
            $invalidProperties[] = "'expiration_year' can't be null";
        }
        if ($this->container['ccv'] === null) {
            $invalidProperties[] = "'ccv' can't be null";
        }
        if ($this->container['card_number'] === null) {
            $invalidProperties[] = "'card_number' can't be null";
        }
        if ($this->container['card_last_four_digits'] === null) {
            $invalidProperties[] = "'card_last_four_digits' can't be null";
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
     * Gets customer
     *
     * @return \Tradenity\SDK\Resources\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Tradenity\SDK\Resources\Customer $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        /* */
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets reusable
     *
     * @return bool
     */
    public function getReusable()
    {
        return $this->container['reusable'];
    }

    /**
     * Sets reusable
     *
     * @param bool $reusable reusable
     *
     * @return $this
     */
    public function setReusable($reusable)
    {
        /* */
        $this->container['reusable'] = $reusable;

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
     * Gets card_holder_name
     *
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->container['card_holder_name'];
    }

    /**
     * Sets card_holder_name
     *
     * @param string $card_holder_name card_holder_name
     *
     * @return $this
     */
    public function setCardHolderName($card_holder_name)
    {
        /* */
        $this->container['card_holder_name'] = $card_holder_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Tradenity\SDK\Resources\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Tradenity\SDK\Resources\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        /* */
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        /*
        $allowedValues = $this->getBrandAllowableValues();
        if (!in_array($brand, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'brand', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
 */
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets expiration_month
     *
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->container['expiration_month'];
    }

    /**
     * Sets expiration_month
     *
     * @param string $expiration_month expiration_month
     *
     * @return $this
     */
    public function setExpirationMonth($expiration_month)
    {
        /* */
        $this->container['expiration_month'] = $expiration_month;

        return $this;
    }

    /**
     * Gets expiration_year
     *
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->container['expiration_year'];
    }

    /**
     * Sets expiration_year
     *
     * @param string $expiration_year expiration_year
     *
     * @return $this
     */
    public function setExpirationYear($expiration_year)
    {
        /* */
        $this->container['expiration_year'] = $expiration_year;

        return $this;
    }

    /**
     * Gets ccv
     *
     * @return string
     */
    public function getCcv()
    {
        return $this->container['ccv'];
    }

    /**
     * Sets ccv
     *
     * @param string $ccv ccv
     *
     * @return $this
     */
    public function setCcv($ccv)
    {
        /* */
        $this->container['ccv'] = $ccv;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string $card_number card_number
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        /* */
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_last_four_digits
     *
     * @return string
     */
    public function getCardLastFourDigits()
    {
        return $this->container['card_last_four_digits'];
    }

    /**
     * Sets card_last_four_digits
     *
     * @param string $card_last_four_digits card_last_four_digits
     *
     * @return $this
     */
    public function setCardLastFourDigits($card_last_four_digits)
    {
        /* */
        $this->container['card_last_four_digits'] = $card_last_four_digits;

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
     * List PaymentCards
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[PaymentCard]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllPaymentCards(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllPaymentCards();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllPaymentCards($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllPaymentCards($parameters)[0];
    }


    /**
     * Operation getPaymentCardById
     *
     * Find PaymentCard By ID
     *
     * @param  string $id ID of PaymentCard to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\PaymentCard
     */
    public static function findById($id)
    {
        return self::getPaymentCardById($id);
    }

    /**
     * Operation create
     *
     * Create New PaymentCard
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\PaymentCard
     */
    public function create()
    {
        $instance = self::createPaymentCard($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updatePaymentCardById
    *
    * Update PaymentCard
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\PaymentCard
    */
    public function update()
    {
        return self::updatePaymentCardById($this->getId(), $this);
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
        self::deletePaymentCardById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete PaymentCard By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deletePaymentCardById($id);
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
     * Operation createPaymentCard
     *
     * Create PaymentCard
     *
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\PaymentCard
     */
    public static function createPaymentCard($payment_card)
    {
        list($response) = self::createPaymentCardWithHttpInfo($payment_card);
        return $response;
    }


    /**
     * Operation createPaymentCardWithHttpInfo
     *
     * Create PaymentCard
     *
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\PaymentCard, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createPaymentCardWithHttpInfo($payment_card)
    {
        $returnType = '\Tradenity\SDK\Resources\PaymentCard';  
        $request = self::createPaymentCardRequest($payment_card); 

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
                        '\Tradenity\SDK\Resources\PaymentCard',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createPaymentCardAsync
    *
    * Create PaymentCard
    *
    * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createPaymentCardAsync($payment_card)
    {
        return self::createPaymentCardAsyncWithHttpInfo($payment_card)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createPaymentCardAsyncWithHttpInfo
     *
     * Create PaymentCard
     *
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createPaymentCardAsyncWithHttpInfo($payment_card) 
    {
        $returnType = '\Tradenity\SDK\Resources\PaymentCard';  
        $request = self::createPaymentCardRequest($payment_card); 

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
     * Create request for operation 'createPaymentCard'
     *
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createPaymentCardRequest($payment_card) 
    {
        // verify the required parameter 'payment_card' is set
        if ($payment_card === null || (is_array($payment_card) && count($payment_card) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_card when calling createPaymentCard'
            );
        }

        $resourcePath = '/paymentCards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($payment_card)) {
            $_tempBody = $payment_card;
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
     * Operation deletePaymentCardById
     *
     * Delete PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deletePaymentCardById($payment_card_id)
    {
        self::deletePaymentCardByIdWithHttpInfo($payment_card_id);
    }


    /**
     * Operation deletePaymentCardByIdWithHttpInfo
     *
     * Delete PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deletePaymentCardByIdWithHttpInfo($payment_card_id)
    {
        $returnType = '';  
        $request = self::deletePaymentCardByIdRequest($payment_card_id); 

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
    * Operation deletePaymentCardByIdAsync
    *
    * Delete PaymentCard
    *
    * @param  string $payment_card_id ID of paymentCard to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deletePaymentCardByIdAsync($payment_card_id)
    {
        return self::deletePaymentCardByIdAsyncWithHttpInfo($payment_card_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deletePaymentCardByIdAsyncWithHttpInfo
     *
     * Delete PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deletePaymentCardByIdAsyncWithHttpInfo($payment_card_id) 
    {
        $returnType = '';  
        $request = self::deletePaymentCardByIdRequest($payment_card_id); 

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
     * Create request for operation 'deletePaymentCardById'
     *
     * @param  string $payment_card_id ID of paymentCard to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deletePaymentCardByIdRequest($payment_card_id) 
    {
        // verify the required parameter 'payment_card_id' is set
        if ($payment_card_id === null || (is_array($payment_card_id) && count($payment_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_card_id when calling deletePaymentCardById'
            );
        }

        $resourcePath = '/paymentCards/{paymentCardId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($payment_card_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentCardId' . '}',
                ObjectSerializer::toPathValue($payment_card_id),
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
     * Operation getPaymentCardById
     *
     * Find PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\PaymentCard
     */
    public static function getPaymentCardById($payment_card_id)
    {
        list($response) = self::getPaymentCardByIdWithHttpInfo($payment_card_id);
        return $response;
    }


    /**
     * Operation getPaymentCardByIdWithHttpInfo
     *
     * Find PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\PaymentCard, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getPaymentCardByIdWithHttpInfo($payment_card_id)
    {
        $returnType = '\Tradenity\SDK\Resources\PaymentCard';  
        $request = self::getPaymentCardByIdRequest($payment_card_id); 

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
                        '\Tradenity\SDK\Resources\PaymentCard',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getPaymentCardByIdAsync
    *
    * Find PaymentCard
    *
    * @param  string $payment_card_id ID of paymentCard to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getPaymentCardByIdAsync($payment_card_id)
    {
        return self::getPaymentCardByIdAsyncWithHttpInfo($payment_card_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getPaymentCardByIdAsyncWithHttpInfo
     *
     * Find PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getPaymentCardByIdAsyncWithHttpInfo($payment_card_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\PaymentCard';  
        $request = self::getPaymentCardByIdRequest($payment_card_id); 

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
     * Create request for operation 'getPaymentCardById'
     *
     * @param  string $payment_card_id ID of paymentCard to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getPaymentCardByIdRequest($payment_card_id) 
    {
        // verify the required parameter 'payment_card_id' is set
        if ($payment_card_id === null || (is_array($payment_card_id) && count($payment_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_card_id when calling getPaymentCardById'
            );
        }

        $resourcePath = '/paymentCards/{paymentCardId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($payment_card_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentCardId' . '}',
                ObjectSerializer::toPathValue($payment_card_id),
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
    * Operation listAllPaymentCards
    *
    * List PaymentCards
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\PaymentCard[page]
    */
    public static function listAllPaymentCards(array $parameters = [])
    {
        list($response) = self::listAllPaymentCardsWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllPaymentCardsWithHttpInfo
     *
     * List PaymentCards
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\PaymentCard[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllPaymentCardsWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\PaymentCard[page]'; 
        $request = self::listAllPaymentCardsRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\PaymentCard[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllPaymentCardsAsync
     *
     * List PaymentCards
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllPaymentCardsAsync(array $parameters = [])
    {
        return self::listAllPaymentCardsAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllPaymentCardsAsyncWithHttpInfo
     *
     * List PaymentCards
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllPaymentCardsAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\PaymentCard[page]'; 
        $request = self::listAllPaymentCardsRequest($parameters);  

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
     * Create request for operation 'listAllPaymentCards'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllPaymentCardsRequest(array $parameters = [])  
    {

        $resourcePath = '/paymentCards';
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
     * Operation replacePaymentCardById
     *
     * Replace PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to replace (required)
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\PaymentCard
     */
    public static function replacePaymentCardById($payment_card_id, $payment_card)
    {
        list($response) = self::replacePaymentCardByIdWithHttpInfo($payment_card_id, $payment_card);
        return $response;
    }


    /**
     * Operation replacePaymentCardByIdWithHttpInfo
     *
     * Replace PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to replace (required)
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\PaymentCard, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replacePaymentCardByIdWithHttpInfo($payment_card_id, $payment_card)
    {
        $returnType = '\Tradenity\SDK\Resources\PaymentCard';  
        $request = self::replacePaymentCardByIdRequest($payment_card_id, $payment_card); 

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
                        '\Tradenity\SDK\Resources\PaymentCard',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replacePaymentCardByIdAsync
    *
    * Replace PaymentCard
    *
    * @param  string $payment_card_id ID of paymentCard to replace (required)
    * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replacePaymentCardByIdAsync($payment_card_id, $payment_card)
    {
        return self::replacePaymentCardByIdAsyncWithHttpInfo($payment_card_id, $payment_card)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replacePaymentCardByIdAsyncWithHttpInfo
     *
     * Replace PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to replace (required)
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replacePaymentCardByIdAsyncWithHttpInfo($payment_card_id, $payment_card) 
    {
        $returnType = '\Tradenity\SDK\Resources\PaymentCard';  
        $request = self::replacePaymentCardByIdRequest($payment_card_id, $payment_card); 

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
     * Create request for operation 'replacePaymentCardById'
     *
     * @param  string $payment_card_id ID of paymentCard to replace (required)
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replacePaymentCardByIdRequest($payment_card_id, $payment_card) 
    {
        // verify the required parameter 'payment_card_id' is set
        if ($payment_card_id === null || (is_array($payment_card_id) && count($payment_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_card_id when calling replacePaymentCardById'
            );
        }
        // verify the required parameter 'payment_card' is set
        if ($payment_card === null || (is_array($payment_card) && count($payment_card) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_card when calling replacePaymentCardById'
            );
        }

        $resourcePath = '/paymentCards/{paymentCardId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($payment_card_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentCardId' . '}',
                ObjectSerializer::toPathValue($payment_card_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($payment_card)) {
            $_tempBody = $payment_card;
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
     * Operation updatePaymentCardById
     *
     * Update PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to update. (required)
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\PaymentCard
     */
    public static function updatePaymentCardById($payment_card_id, $payment_card)
    {
        list($response) = self::updatePaymentCardByIdWithHttpInfo($payment_card_id, $payment_card);
        return $response;
    }


    /**
     * Operation updatePaymentCardByIdWithHttpInfo
     *
     * Update PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to update. (required)
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\PaymentCard, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updatePaymentCardByIdWithHttpInfo($payment_card_id, $payment_card)
    {
        $returnType = '\Tradenity\SDK\Resources\PaymentCard';  
        $request = self::updatePaymentCardByIdRequest($payment_card_id, $payment_card); 

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
                        '\Tradenity\SDK\Resources\PaymentCard',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updatePaymentCardByIdAsync
    *
    * Update PaymentCard
    *
    * @param  string $payment_card_id ID of paymentCard to update. (required)
    * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updatePaymentCardByIdAsync($payment_card_id, $payment_card)
    {
        return self::updatePaymentCardByIdAsyncWithHttpInfo($payment_card_id, $payment_card)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updatePaymentCardByIdAsyncWithHttpInfo
     *
     * Update PaymentCard
     *
     * @param  string $payment_card_id ID of paymentCard to update. (required)
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updatePaymentCardByIdAsyncWithHttpInfo($payment_card_id, $payment_card) 
    {
        $returnType = '\Tradenity\SDK\Resources\PaymentCard';  
        $request = self::updatePaymentCardByIdRequest($payment_card_id, $payment_card); 

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
     * Create request for operation 'updatePaymentCardById'
     *
     * @param  string $payment_card_id ID of paymentCard to update. (required)
     * @param  \Tradenity\SDK\Resources\PaymentCard $payment_card Attributes of paymentCard to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updatePaymentCardByIdRequest($payment_card_id, $payment_card) 
    {
        // verify the required parameter 'payment_card_id' is set
        if ($payment_card_id === null || (is_array($payment_card_id) && count($payment_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_card_id when calling updatePaymentCardById'
            );
        }
        // verify the required parameter 'payment_card' is set
        if ($payment_card === null || (is_array($payment_card) && count($payment_card) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_card when calling updatePaymentCardById'
            );
        }

        $resourcePath = '/paymentCards/{paymentCardId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($payment_card_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentCardId' . '}',
                ObjectSerializer::toPathValue($payment_card_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($payment_card)) {
            $_tempBody = $payment_card;
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
