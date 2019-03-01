<?php
/**
 * TaxRate
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
 * TaxRate Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class TaxRate
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
    protected static $swaggerModelName = 'TaxRate';

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
        'description' => 'string',
        'type' => 'string',
        'percentage' => 'float',
        'fixed_rate' => 'int',
        'status' => 'string',
        'tax_class' => '\Tradenity\SDK\Resources\TaxClass',
        'geo_zone' => '\Tradenity\SDK\Resources\GeoZone',
        'customer_groups' => '\Tradenity\SDK\Resources\CustomerGroup[]',
        'based_on' => 'string'
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
        'description' => null,
        'type' => null,
        'percentage' => 'float',
        'fixed_rate' => 'int32',
        'status' => null,
        'tax_class' => null,
        'geo_zone' => null,
        'customer_groups' => null,
        'based_on' => null
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
        'description' => 'description',
        'type' => 'type',
        'percentage' => 'percentage',
        'fixed_rate' => 'fixedRate',
        'status' => 'status',
        'tax_class' => 'taxClass',
        'geo_zone' => 'geoZone',
        'customer_groups' => 'customerGroups',
        'based_on' => 'basedOn'
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
        'description' => 'setDescription',
        'type' => 'setType',
        'percentage' => 'setPercentage',
        'fixed_rate' => 'setFixedRate',
        'status' => 'setStatus',
        'tax_class' => 'setTaxClass',
        'geo_zone' => 'setGeoZone',
        'customer_groups' => 'setCustomerGroups',
        'based_on' => 'setBasedOn'
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
        'description' => 'getDescription',
        'type' => 'getType',
        'percentage' => 'getPercentage',
        'fixed_rate' => 'getFixedRate',
        'status' => 'getStatus',
        'tax_class' => 'getTaxClass',
        'geo_zone' => 'getGeoZone',
        'customer_groups' => 'getCustomerGroups',
        'based_on' => 'getBasedOn'
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
    public function getTypeAllowableValues()
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBasedOnAllowableValues()
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null; 
        $this->container['type'] = isset($data['type']) ? $data['type'] : null; 
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null; 
        $this->container['fixed_rate'] = isset($data['fixed_rate']) ? $data['fixed_rate'] : null; 
        $this->container['fixed_rate'] = isset($data['fixedRate']) ? $data['fixedRate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null; 
        $this->container['tax_class'] = isset($data['tax_class']) ? $data['tax_class'] : null; 
        $this->container['tax_class'] = isset($data['taxClass']) ? $data['taxClass'] : null;
        $this->container['geo_zone'] = isset($data['geo_zone']) ? $data['geo_zone'] : null; 
        $this->container['geo_zone'] = isset($data['geoZone']) ? $data['geoZone'] : null;
        $this->container['customer_groups'] = isset($data['customer_groups']) ? $data['customer_groups'] : null; 
        $this->container['customer_groups'] = isset($data['customerGroups']) ? $data['customerGroups'] : null;
        $this->container['based_on'] = isset($data['based_on']) ? $data['based_on'] : null; 
        $this->container['based_on'] = isset($data['basedOn']) ? $data['basedOn'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['percentage'] === null) {
            $invalidProperties[] = "'percentage' can't be null";
        }
        if ($this->container['fixed_rate'] === null) {
            $invalidProperties[] = "'fixed_rate' can't be null";
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

        if ($this->container['tax_class'] === null) {
            $invalidProperties[] = "'tax_class' can't be null";
        }
        if ($this->container['geo_zone'] === null) {
            $invalidProperties[] = "'geo_zone' can't be null";
        }
        $allowedValues = $this->getBasedOnAllowableValues();
        if (!is_null($this->container['based_on']) && !in_array($this->container['based_on'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'based_on', must be one of '%s'",
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        /* */
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        /*
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
 */
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param float $percentage percentage
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {
        /* */
        $this->container['percentage'] = $percentage;

        return $this;
    }

    /**
     * Gets fixed_rate
     *
     * @return int
     */
    public function getFixedRate()
    {
        return $this->container['fixed_rate'];
    }

    /**
     * Sets fixed_rate
     *
     * @param int $fixed_rate fixed_rate
     *
     * @return $this
     */
    public function setFixedRate($fixed_rate)
    {
        /* */
        $this->container['fixed_rate'] = $fixed_rate;

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
     * Gets tax_class
     *
     * @return \Tradenity\SDK\Resources\TaxClass
     */
    public function getTaxClass()
    {
        return $this->container['tax_class'];
    }

    /**
     * Sets tax_class
     *
     * @param \Tradenity\SDK\Resources\TaxClass $tax_class tax_class
     *
     * @return $this
     */
    public function setTaxClass($tax_class)
    {
        /* */
        $this->container['tax_class'] = $tax_class;

        return $this;
    }

    /**
     * Gets geo_zone
     *
     * @return \Tradenity\SDK\Resources\GeoZone
     */
    public function getGeoZone()
    {
        return $this->container['geo_zone'];
    }

    /**
     * Sets geo_zone
     *
     * @param \Tradenity\SDK\Resources\GeoZone $geo_zone geo_zone
     *
     * @return $this
     */
    public function setGeoZone($geo_zone)
    {
        /* */
        $this->container['geo_zone'] = $geo_zone;

        return $this;
    }

    /**
     * Gets customer_groups
     *
     * @return \Tradenity\SDK\Resources\CustomerGroup[]
     */
    public function getCustomerGroups()
    {
        return $this->container['customer_groups'];
    }

    /**
     * Sets customer_groups
     *
     * @param \Tradenity\SDK\Resources\CustomerGroup[] $customer_groups customer_groups
     *
     * @return $this
     */
    public function setCustomerGroups($customer_groups)
    {
        /* */
        $this->container['customer_groups'] = $customer_groups;

        return $this;
    }

    /**
     * Gets based_on
     *
     * @return string
     */
    public function getBasedOn()
    {
        return $this->container['based_on'];
    }

    /**
     * Sets based_on
     *
     * @param string $based_on based_on
     *
     * @return $this
     */
    public function setBasedOn($based_on)
    {
        /*
        $allowedValues = $this->getBasedOnAllowableValues();
        if (!is_null($based_on) && !in_array($based_on, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'based_on', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
 */
        $this->container['based_on'] = $based_on;

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
     * List TaxRates
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[TaxRate]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllTaxRates(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllTaxRates();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllTaxRates($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllTaxRates($parameters)[0];
    }


    /**
     * Operation getTaxRateById
     *
     * Find TaxRate By ID
     *
     * @param  string $id ID of TaxRate to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\TaxRate
     */
    public static function findById($id)
    {
        return self::getTaxRateById($id);
    }

    /**
     * Operation create
     *
     * Create New TaxRate
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\TaxRate
     */
    public function create()
    {
        $instance = self::createTaxRate($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateTaxRateById
    *
    * Update TaxRate
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\TaxRate
    */
    public function update()
    {
        return self::updateTaxRateById($this->getId(), $this);
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
        self::deleteTaxRateById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete TaxRate By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteTaxRateById($id);
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
     * Operation createTaxRate
     *
     * Create TaxRate
     *
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\TaxRate
     */
    public static function createTaxRate($tax_rate)
    {
        list($response) = self::createTaxRateWithHttpInfo($tax_rate);
        return $response;
    }


    /**
     * Operation createTaxRateWithHttpInfo
     *
     * Create TaxRate
     *
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\TaxRate, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createTaxRateWithHttpInfo($tax_rate)
    {
        $returnType = '\Tradenity\SDK\Resources\TaxRate';  
        $request = self::createTaxRateRequest($tax_rate); 

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
                        '\Tradenity\SDK\Resources\TaxRate',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createTaxRateAsync
    *
    * Create TaxRate
    *
    * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createTaxRateAsync($tax_rate)
    {
        return self::createTaxRateAsyncWithHttpInfo($tax_rate)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createTaxRateAsyncWithHttpInfo
     *
     * Create TaxRate
     *
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createTaxRateAsyncWithHttpInfo($tax_rate) 
    {
        $returnType = '\Tradenity\SDK\Resources\TaxRate';  
        $request = self::createTaxRateRequest($tax_rate); 

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
     * Create request for operation 'createTaxRate'
     *
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createTaxRateRequest($tax_rate) 
    {
        // verify the required parameter 'tax_rate' is set
        if ($tax_rate === null || (is_array($tax_rate) && count($tax_rate) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tax_rate when calling createTaxRate'
            );
        }

        $resourcePath = '/taxRates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($tax_rate)) {
            $_tempBody = $tax_rate;
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
     * Operation deleteTaxRateById
     *
     * Delete TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteTaxRateById($tax_rate_id)
    {
        self::deleteTaxRateByIdWithHttpInfo($tax_rate_id);
    }


    /**
     * Operation deleteTaxRateByIdWithHttpInfo
     *
     * Delete TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteTaxRateByIdWithHttpInfo($tax_rate_id)
    {
        $returnType = '';  
        $request = self::deleteTaxRateByIdRequest($tax_rate_id); 

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
    * Operation deleteTaxRateByIdAsync
    *
    * Delete TaxRate
    *
    * @param  string $tax_rate_id ID of taxRate to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteTaxRateByIdAsync($tax_rate_id)
    {
        return self::deleteTaxRateByIdAsyncWithHttpInfo($tax_rate_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteTaxRateByIdAsyncWithHttpInfo
     *
     * Delete TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteTaxRateByIdAsyncWithHttpInfo($tax_rate_id) 
    {
        $returnType = '';  
        $request = self::deleteTaxRateByIdRequest($tax_rate_id); 

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
     * Create request for operation 'deleteTaxRateById'
     *
     * @param  string $tax_rate_id ID of taxRate to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteTaxRateByIdRequest($tax_rate_id) 
    {
        // verify the required parameter 'tax_rate_id' is set
        if ($tax_rate_id === null || (is_array($tax_rate_id) && count($tax_rate_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tax_rate_id when calling deleteTaxRateById'
            );
        }

        $resourcePath = '/taxRates/{taxRateId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($tax_rate_id !== null) {
            $resourcePath = str_replace(
                '{' . 'taxRateId' . '}',
                ObjectSerializer::toPathValue($tax_rate_id),
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
     * Operation getTaxRateById
     *
     * Find TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\TaxRate
     */
    public static function getTaxRateById($tax_rate_id)
    {
        list($response) = self::getTaxRateByIdWithHttpInfo($tax_rate_id);
        return $response;
    }


    /**
     * Operation getTaxRateByIdWithHttpInfo
     *
     * Find TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\TaxRate, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getTaxRateByIdWithHttpInfo($tax_rate_id)
    {
        $returnType = '\Tradenity\SDK\Resources\TaxRate';  
        $request = self::getTaxRateByIdRequest($tax_rate_id); 

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
                        '\Tradenity\SDK\Resources\TaxRate',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getTaxRateByIdAsync
    *
    * Find TaxRate
    *
    * @param  string $tax_rate_id ID of taxRate to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getTaxRateByIdAsync($tax_rate_id)
    {
        return self::getTaxRateByIdAsyncWithHttpInfo($tax_rate_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getTaxRateByIdAsyncWithHttpInfo
     *
     * Find TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getTaxRateByIdAsyncWithHttpInfo($tax_rate_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\TaxRate';  
        $request = self::getTaxRateByIdRequest($tax_rate_id); 

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
     * Create request for operation 'getTaxRateById'
     *
     * @param  string $tax_rate_id ID of taxRate to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getTaxRateByIdRequest($tax_rate_id) 
    {
        // verify the required parameter 'tax_rate_id' is set
        if ($tax_rate_id === null || (is_array($tax_rate_id) && count($tax_rate_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tax_rate_id when calling getTaxRateById'
            );
        }

        $resourcePath = '/taxRates/{taxRateId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($tax_rate_id !== null) {
            $resourcePath = str_replace(
                '{' . 'taxRateId' . '}',
                ObjectSerializer::toPathValue($tax_rate_id),
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
    * Operation listAllTaxRates
    *
    * List TaxRates
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\TaxRate[page]
    */
    public static function listAllTaxRates(array $parameters = [])
    {
        list($response) = self::listAllTaxRatesWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllTaxRatesWithHttpInfo
     *
     * List TaxRates
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\TaxRate[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllTaxRatesWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\TaxRate[page]'; 
        $request = self::listAllTaxRatesRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\TaxRate[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllTaxRatesAsync
     *
     * List TaxRates
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllTaxRatesAsync(array $parameters = [])
    {
        return self::listAllTaxRatesAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllTaxRatesAsyncWithHttpInfo
     *
     * List TaxRates
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllTaxRatesAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\TaxRate[page]'; 
        $request = self::listAllTaxRatesRequest($parameters);  

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
     * Create request for operation 'listAllTaxRates'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllTaxRatesRequest(array $parameters = [])  
    {

        $resourcePath = '/taxRates';
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
     * Operation replaceTaxRateById
     *
     * Replace TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to replace (required)
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\TaxRate
     */
    public static function replaceTaxRateById($tax_rate_id, $tax_rate)
    {
        list($response) = self::replaceTaxRateByIdWithHttpInfo($tax_rate_id, $tax_rate);
        return $response;
    }


    /**
     * Operation replaceTaxRateByIdWithHttpInfo
     *
     * Replace TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to replace (required)
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\TaxRate, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceTaxRateByIdWithHttpInfo($tax_rate_id, $tax_rate)
    {
        $returnType = '\Tradenity\SDK\Resources\TaxRate';  
        $request = self::replaceTaxRateByIdRequest($tax_rate_id, $tax_rate); 

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
                        '\Tradenity\SDK\Resources\TaxRate',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceTaxRateByIdAsync
    *
    * Replace TaxRate
    *
    * @param  string $tax_rate_id ID of taxRate to replace (required)
    * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceTaxRateByIdAsync($tax_rate_id, $tax_rate)
    {
        return self::replaceTaxRateByIdAsyncWithHttpInfo($tax_rate_id, $tax_rate)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceTaxRateByIdAsyncWithHttpInfo
     *
     * Replace TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to replace (required)
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceTaxRateByIdAsyncWithHttpInfo($tax_rate_id, $tax_rate) 
    {
        $returnType = '\Tradenity\SDK\Resources\TaxRate';  
        $request = self::replaceTaxRateByIdRequest($tax_rate_id, $tax_rate); 

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
     * Create request for operation 'replaceTaxRateById'
     *
     * @param  string $tax_rate_id ID of taxRate to replace (required)
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceTaxRateByIdRequest($tax_rate_id, $tax_rate) 
    {
        // verify the required parameter 'tax_rate_id' is set
        if ($tax_rate_id === null || (is_array($tax_rate_id) && count($tax_rate_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tax_rate_id when calling replaceTaxRateById'
            );
        }
        // verify the required parameter 'tax_rate' is set
        if ($tax_rate === null || (is_array($tax_rate) && count($tax_rate) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tax_rate when calling replaceTaxRateById'
            );
        }

        $resourcePath = '/taxRates/{taxRateId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($tax_rate_id !== null) {
            $resourcePath = str_replace(
                '{' . 'taxRateId' . '}',
                ObjectSerializer::toPathValue($tax_rate_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($tax_rate)) {
            $_tempBody = $tax_rate;
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
     * Operation updateTaxRateById
     *
     * Update TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to update. (required)
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\TaxRate
     */
    public static function updateTaxRateById($tax_rate_id, $tax_rate)
    {
        list($response) = self::updateTaxRateByIdWithHttpInfo($tax_rate_id, $tax_rate);
        return $response;
    }


    /**
     * Operation updateTaxRateByIdWithHttpInfo
     *
     * Update TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to update. (required)
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\TaxRate, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateTaxRateByIdWithHttpInfo($tax_rate_id, $tax_rate)
    {
        $returnType = '\Tradenity\SDK\Resources\TaxRate';  
        $request = self::updateTaxRateByIdRequest($tax_rate_id, $tax_rate); 

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
                        '\Tradenity\SDK\Resources\TaxRate',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateTaxRateByIdAsync
    *
    * Update TaxRate
    *
    * @param  string $tax_rate_id ID of taxRate to update. (required)
    * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateTaxRateByIdAsync($tax_rate_id, $tax_rate)
    {
        return self::updateTaxRateByIdAsyncWithHttpInfo($tax_rate_id, $tax_rate)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateTaxRateByIdAsyncWithHttpInfo
     *
     * Update TaxRate
     *
     * @param  string $tax_rate_id ID of taxRate to update. (required)
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateTaxRateByIdAsyncWithHttpInfo($tax_rate_id, $tax_rate) 
    {
        $returnType = '\Tradenity\SDK\Resources\TaxRate';  
        $request = self::updateTaxRateByIdRequest($tax_rate_id, $tax_rate); 

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
     * Create request for operation 'updateTaxRateById'
     *
     * @param  string $tax_rate_id ID of taxRate to update. (required)
     * @param  \Tradenity\SDK\Resources\TaxRate $tax_rate Attributes of taxRate to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateTaxRateByIdRequest($tax_rate_id, $tax_rate) 
    {
        // verify the required parameter 'tax_rate_id' is set
        if ($tax_rate_id === null || (is_array($tax_rate_id) && count($tax_rate_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tax_rate_id when calling updateTaxRateById'
            );
        }
        // verify the required parameter 'tax_rate' is set
        if ($tax_rate === null || (is_array($tax_rate) && count($tax_rate) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tax_rate when calling updateTaxRateById'
            );
        }

        $resourcePath = '/taxRates/{taxRateId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($tax_rate_id !== null) {
            $resourcePath = str_replace(
                '{' . 'taxRateId' . '}',
                ObjectSerializer::toPathValue($tax_rate_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($tax_rate)) {
            $_tempBody = $tax_rate;
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
