<?php
/**
 * Currency
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
 * Currency Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class Currency
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
    protected static $swaggerModelName = 'Currency';

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
        'code' => 'string',
        'symbol' => 'string',
        'decimal_point_placement' => 'int',
        'smallest_unit' => 'int',
        'status' => 'string',
        'exchange_rate' => 'float'
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
        'code' => null,
        'symbol' => null,
        'decimal_point_placement' => 'int32',
        'smallest_unit' => 'int32',
        'status' => null,
        'exchange_rate' => 'float'
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
        'code' => 'code',
        'symbol' => 'symbol',
        'decimal_point_placement' => 'decimalPointPlacement',
        'smallest_unit' => 'smallestUnit',
        'status' => 'status',
        'exchange_rate' => 'exchangeRate'
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
        'code' => 'setCode',
        'symbol' => 'setSymbol',
        'decimal_point_placement' => 'setDecimalPointPlacement',
        'smallest_unit' => 'setSmallestUnit',
        'status' => 'setStatus',
        'exchange_rate' => 'setExchangeRate'
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
        'code' => 'getCode',
        'symbol' => 'getSymbol',
        'decimal_point_placement' => 'getDecimalPointPlacement',
        'smallest_unit' => 'getSmallestUnit',
        'status' => 'getStatus',
        'exchange_rate' => 'getExchangeRate'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null; 
        $this->container['code'] = isset($data['code']) ? $data['code'] : null; 
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null; 
        $this->container['decimal_point_placement'] = isset($data['decimal_point_placement']) ? $data['decimal_point_placement'] : null; 
        $this->container['decimal_point_placement'] = isset($data['decimalPointPlacement']) ? $data['decimalPointPlacement'] : null;
        $this->container['smallest_unit'] = isset($data['smallest_unit']) ? $data['smallest_unit'] : null; 
        $this->container['smallest_unit'] = isset($data['smallestUnit']) ? $data['smallestUnit'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null; 
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null; 
        $this->container['exchange_rate'] = isset($data['exchangeRate']) ? $data['exchangeRate'] : null;
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
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        /* */
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol symbol
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        /* */
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets decimal_point_placement
     *
     * @return int
     */
    public function getDecimalPointPlacement()
    {
        return $this->container['decimal_point_placement'];
    }

    /**
     * Sets decimal_point_placement
     *
     * @param int $decimal_point_placement decimal_point_placement
     *
     * @return $this
     */
    public function setDecimalPointPlacement($decimal_point_placement)
    {
        /* */
        $this->container['decimal_point_placement'] = $decimal_point_placement;

        return $this;
    }

    /**
     * Gets smallest_unit
     *
     * @return int
     */
    public function getSmallestUnit()
    {
        return $this->container['smallest_unit'];
    }

    /**
     * Sets smallest_unit
     *
     * @param int $smallest_unit smallest_unit
     *
     * @return $this
     */
    public function setSmallestUnit($smallest_unit)
    {
        /* */
        $this->container['smallest_unit'] = $smallest_unit;

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
     * Gets exchange_rate
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param float $exchange_rate exchange_rate
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        /* */
        $this->container['exchange_rate'] = $exchange_rate;

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
     * List Currencys
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[Currency]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllCurrencies(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllCurrencies();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllCurrencies($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllCurrencies($parameters)[0];
    }


    /**
     * Operation getCurrencyById
     *
     * Find Currency By ID
     *
     * @param  string $id ID of Currency to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\Currency
     */
    public static function findById($id)
    {
        return self::getCurrencyById($id);
    }

    /**
     * Operation create
     *
     * Create New Currency
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\Currency
     */
    public function create()
    {
        $instance = self::createCurrency($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateCurrencyById
    *
    * Update Currency
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\Currency
    */
    public function update()
    {
        return self::updateCurrencyById($this->getId(), $this);
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
        self::deleteCurrencyById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete Currency By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteCurrencyById($id);
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
     * Operation createCurrency
     *
     * Create Currency
     *
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\Currency
     */
    public static function createCurrency($currency)
    {
        list($response) = self::createCurrencyWithHttpInfo($currency);
        return $response;
    }


    /**
     * Operation createCurrencyWithHttpInfo
     *
     * Create Currency
     *
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\Currency, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createCurrencyWithHttpInfo($currency)
    {
        $returnType = '\Tradenity\SDK\Resources\Currency';  
        $request = self::createCurrencyRequest($currency); 

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
                        '\Tradenity\SDK\Resources\Currency',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createCurrencyAsync
    *
    * Create Currency
    *
    * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createCurrencyAsync($currency)
    {
        return self::createCurrencyAsyncWithHttpInfo($currency)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createCurrencyAsyncWithHttpInfo
     *
     * Create Currency
     *
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createCurrencyAsyncWithHttpInfo($currency) 
    {
        $returnType = '\Tradenity\SDK\Resources\Currency';  
        $request = self::createCurrencyRequest($currency); 

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
     * Create request for operation 'createCurrency'
     *
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createCurrencyRequest($currency) 
    {
        // verify the required parameter 'currency' is set
        if ($currency === null || (is_array($currency) && count($currency) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency when calling createCurrency'
            );
        }

        $resourcePath = '/currencies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($currency)) {
            $_tempBody = $currency;
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
     * Operation deleteCurrencyById
     *
     * Delete Currency
     *
     * @param  string $currency_id ID of currency to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteCurrencyById($currency_id)
    {
        self::deleteCurrencyByIdWithHttpInfo($currency_id);
    }


    /**
     * Operation deleteCurrencyByIdWithHttpInfo
     *
     * Delete Currency
     *
     * @param  string $currency_id ID of currency to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteCurrencyByIdWithHttpInfo($currency_id)
    {
        $returnType = '';  
        $request = self::deleteCurrencyByIdRequest($currency_id); 

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
    * Operation deleteCurrencyByIdAsync
    *
    * Delete Currency
    *
    * @param  string $currency_id ID of currency to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteCurrencyByIdAsync($currency_id)
    {
        return self::deleteCurrencyByIdAsyncWithHttpInfo($currency_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteCurrencyByIdAsyncWithHttpInfo
     *
     * Delete Currency
     *
     * @param  string $currency_id ID of currency to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteCurrencyByIdAsyncWithHttpInfo($currency_id) 
    {
        $returnType = '';  
        $request = self::deleteCurrencyByIdRequest($currency_id); 

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
     * Create request for operation 'deleteCurrencyById'
     *
     * @param  string $currency_id ID of currency to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteCurrencyByIdRequest($currency_id) 
    {
        // verify the required parameter 'currency_id' is set
        if ($currency_id === null || (is_array($currency_id) && count($currency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency_id when calling deleteCurrencyById'
            );
        }

        $resourcePath = '/currencies/{currencyId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($currency_id !== null) {
            $resourcePath = str_replace(
                '{' . 'currencyId' . '}',
                ObjectSerializer::toPathValue($currency_id),
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
     * Operation getCurrencyById
     *
     * Find Currency
     *
     * @param  string $currency_id ID of currency to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\Currency
     */
    public static function getCurrencyById($currency_id)
    {
        list($response) = self::getCurrencyByIdWithHttpInfo($currency_id);
        return $response;
    }


    /**
     * Operation getCurrencyByIdWithHttpInfo
     *
     * Find Currency
     *
     * @param  string $currency_id ID of currency to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\Currency, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getCurrencyByIdWithHttpInfo($currency_id)
    {
        $returnType = '\Tradenity\SDK\Resources\Currency';  
        $request = self::getCurrencyByIdRequest($currency_id); 

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
                        '\Tradenity\SDK\Resources\Currency',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getCurrencyByIdAsync
    *
    * Find Currency
    *
    * @param  string $currency_id ID of currency to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getCurrencyByIdAsync($currency_id)
    {
        return self::getCurrencyByIdAsyncWithHttpInfo($currency_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getCurrencyByIdAsyncWithHttpInfo
     *
     * Find Currency
     *
     * @param  string $currency_id ID of currency to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getCurrencyByIdAsyncWithHttpInfo($currency_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\Currency';  
        $request = self::getCurrencyByIdRequest($currency_id); 

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
     * Create request for operation 'getCurrencyById'
     *
     * @param  string $currency_id ID of currency to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getCurrencyByIdRequest($currency_id) 
    {
        // verify the required parameter 'currency_id' is set
        if ($currency_id === null || (is_array($currency_id) && count($currency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency_id when calling getCurrencyById'
            );
        }

        $resourcePath = '/currencies/{currencyId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($currency_id !== null) {
            $resourcePath = str_replace(
                '{' . 'currencyId' . '}',
                ObjectSerializer::toPathValue($currency_id),
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
    * Operation listAllCurrencies
    *
    * List Currencies
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\Currency[page]
    */
    public static function listAllCurrencies(array $parameters = [])
    {
        list($response) = self::listAllCurrenciesWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllCurrenciesWithHttpInfo
     *
     * List Currencies
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\Currency[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllCurrenciesWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\Currency[page]'; 
        $request = self::listAllCurrenciesRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\Currency[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllCurrenciesAsync
     *
     * List Currencies
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllCurrenciesAsync(array $parameters = [])
    {
        return self::listAllCurrenciesAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllCurrenciesAsyncWithHttpInfo
     *
     * List Currencies
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllCurrenciesAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\Currency[page]'; 
        $request = self::listAllCurrenciesRequest($parameters);  

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
     * Create request for operation 'listAllCurrencies'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllCurrenciesRequest(array $parameters = [])  
    {

        $resourcePath = '/currencies';
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
     * Operation replaceCurrencyById
     *
     * Replace Currency
     *
     * @param  string $currency_id ID of currency to replace (required)
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\Currency
     */
    public static function replaceCurrencyById($currency_id, $currency)
    {
        list($response) = self::replaceCurrencyByIdWithHttpInfo($currency_id, $currency);
        return $response;
    }


    /**
     * Operation replaceCurrencyByIdWithHttpInfo
     *
     * Replace Currency
     *
     * @param  string $currency_id ID of currency to replace (required)
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\Currency, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceCurrencyByIdWithHttpInfo($currency_id, $currency)
    {
        $returnType = '\Tradenity\SDK\Resources\Currency';  
        $request = self::replaceCurrencyByIdRequest($currency_id, $currency); 

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
                        '\Tradenity\SDK\Resources\Currency',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceCurrencyByIdAsync
    *
    * Replace Currency
    *
    * @param  string $currency_id ID of currency to replace (required)
    * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceCurrencyByIdAsync($currency_id, $currency)
    {
        return self::replaceCurrencyByIdAsyncWithHttpInfo($currency_id, $currency)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceCurrencyByIdAsyncWithHttpInfo
     *
     * Replace Currency
     *
     * @param  string $currency_id ID of currency to replace (required)
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceCurrencyByIdAsyncWithHttpInfo($currency_id, $currency) 
    {
        $returnType = '\Tradenity\SDK\Resources\Currency';  
        $request = self::replaceCurrencyByIdRequest($currency_id, $currency); 

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
     * Create request for operation 'replaceCurrencyById'
     *
     * @param  string $currency_id ID of currency to replace (required)
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceCurrencyByIdRequest($currency_id, $currency) 
    {
        // verify the required parameter 'currency_id' is set
        if ($currency_id === null || (is_array($currency_id) && count($currency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency_id when calling replaceCurrencyById'
            );
        }
        // verify the required parameter 'currency' is set
        if ($currency === null || (is_array($currency) && count($currency) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency when calling replaceCurrencyById'
            );
        }

        $resourcePath = '/currencies/{currencyId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($currency_id !== null) {
            $resourcePath = str_replace(
                '{' . 'currencyId' . '}',
                ObjectSerializer::toPathValue($currency_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($currency)) {
            $_tempBody = $currency;
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
     * Operation updateCurrencyById
     *
     * Update Currency
     *
     * @param  string $currency_id ID of currency to update. (required)
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\Currency
     */
    public static function updateCurrencyById($currency_id, $currency)
    {
        list($response) = self::updateCurrencyByIdWithHttpInfo($currency_id, $currency);
        return $response;
    }


    /**
     * Operation updateCurrencyByIdWithHttpInfo
     *
     * Update Currency
     *
     * @param  string $currency_id ID of currency to update. (required)
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\Currency, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateCurrencyByIdWithHttpInfo($currency_id, $currency)
    {
        $returnType = '\Tradenity\SDK\Resources\Currency';  
        $request = self::updateCurrencyByIdRequest($currency_id, $currency); 

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
                        '\Tradenity\SDK\Resources\Currency',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateCurrencyByIdAsync
    *
    * Update Currency
    *
    * @param  string $currency_id ID of currency to update. (required)
    * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateCurrencyByIdAsync($currency_id, $currency)
    {
        return self::updateCurrencyByIdAsyncWithHttpInfo($currency_id, $currency)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateCurrencyByIdAsyncWithHttpInfo
     *
     * Update Currency
     *
     * @param  string $currency_id ID of currency to update. (required)
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateCurrencyByIdAsyncWithHttpInfo($currency_id, $currency) 
    {
        $returnType = '\Tradenity\SDK\Resources\Currency';  
        $request = self::updateCurrencyByIdRequest($currency_id, $currency); 

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
     * Create request for operation 'updateCurrencyById'
     *
     * @param  string $currency_id ID of currency to update. (required)
     * @param  \Tradenity\SDK\Resources\Currency $currency Attributes of currency to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateCurrencyByIdRequest($currency_id, $currency) 
    {
        // verify the required parameter 'currency_id' is set
        if ($currency_id === null || (is_array($currency_id) && count($currency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency_id when calling updateCurrencyById'
            );
        }
        // verify the required parameter 'currency' is set
        if ($currency === null || (is_array($currency) && count($currency) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency when calling updateCurrencyById'
            );
        }

        $resourcePath = '/currencies/{currencyId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($currency_id !== null) {
            $resourcePath = str_replace(
                '{' . 'currencyId' . '}',
                ObjectSerializer::toPathValue($currency_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($currency)) {
            $_tempBody = $currency;
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
