<?php
/**
 * TableRateShipping
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
 * TableRateShipping Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class TableRateShipping
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
    protected static $swaggerModelName = 'TableRateShipping';

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
        'slug' => 'string',
        'message' => 'string',
        'description' => 'string',
        'geo_zone' => '\Tradenity\SDK\Resources\GeoZone',
        'customer_groups' => '\Tradenity\SDK\Resources\CustomerGroup[]',
        'status' => 'string',
        'use_discounted_subtotal' => 'bool',
        'include_taxes' => 'bool',
        'cost_type' => 'string',
        'ranges' => '\Tradenity\SDK\Resources\TableRateRule[]'
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
        'slug' => null,
        'message' => null,
        'description' => null,
        'geo_zone' => null,
        'customer_groups' => null,
        'status' => null,
        'use_discounted_subtotal' => null,
        'include_taxes' => null,
        'cost_type' => null,
        'ranges' => null
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
        'slug' => 'slug',
        'message' => 'message',
        'description' => 'description',
        'geo_zone' => 'geoZone',
        'customer_groups' => 'customerGroups',
        'status' => 'status',
        'use_discounted_subtotal' => 'useDiscountedSubtotal',
        'include_taxes' => 'includeTaxes',
        'cost_type' => 'costType',
        'ranges' => 'ranges'
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
        'slug' => 'setSlug',
        'message' => 'setMessage',
        'description' => 'setDescription',
        'geo_zone' => 'setGeoZone',
        'customer_groups' => 'setCustomerGroups',
        'status' => 'setStatus',
        'use_discounted_subtotal' => 'setUseDiscountedSubtotal',
        'include_taxes' => 'setIncludeTaxes',
        'cost_type' => 'setCostType',
        'ranges' => 'setRanges'
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
        'slug' => 'getSlug',
        'message' => 'getMessage',
        'description' => 'getDescription',
        'geo_zone' => 'getGeoZone',
        'customer_groups' => 'getCustomerGroups',
        'status' => 'getStatus',
        'use_discounted_subtotal' => 'getUseDiscountedSubtotal',
        'include_taxes' => 'getIncludeTaxes',
        'cost_type' => 'getCostType',
        'ranges' => 'getRanges'
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
    public function getCostTypeAllowableValues()
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
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null; 
        $this->container['message'] = isset($data['message']) ? $data['message'] : null; 
        $this->container['description'] = isset($data['description']) ? $data['description'] : null; 
        $this->container['geo_zone'] = isset($data['geo_zone']) ? $data['geo_zone'] : null; 
        $this->container['geo_zone'] = isset($data['geoZone']) ? $data['geoZone'] : null;
        $this->container['customer_groups'] = isset($data['customer_groups']) ? $data['customer_groups'] : null; 
        $this->container['customer_groups'] = isset($data['customerGroups']) ? $data['customerGroups'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null; 
        $this->container['use_discounted_subtotal'] = isset($data['use_discounted_subtotal']) ? $data['use_discounted_subtotal'] : null; 
        $this->container['use_discounted_subtotal'] = isset($data['useDiscountedSubtotal']) ? $data['useDiscountedSubtotal'] : null;
        $this->container['include_taxes'] = isset($data['include_taxes']) ? $data['include_taxes'] : null; 
        $this->container['include_taxes'] = isset($data['includeTaxes']) ? $data['includeTaxes'] : null;
        $this->container['cost_type'] = isset($data['cost_type']) ? $data['cost_type'] : null; 
        $this->container['cost_type'] = isset($data['costType']) ? $data['costType'] : null;
        $this->container['ranges'] = isset($data['ranges']) ? $data['ranges'] : null; 
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
        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
        }
        if ($this->container['geo_zone'] === null) {
            $invalidProperties[] = "'geo_zone' can't be null";
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

        if ($this->container['cost_type'] === null) {
            $invalidProperties[] = "'cost_type' can't be null";
        }
        $allowedValues = $this->getCostTypeAllowableValues();
        if (!is_null($this->container['cost_type']) && !in_array($this->container['cost_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cost_type', must be one of '%s'",
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
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        /* */
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        /* */
        $this->container['message'] = $message;

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
     * Gets use_discounted_subtotal
     *
     * @return bool
     */
    public function getUseDiscountedSubtotal()
    {
        return $this->container['use_discounted_subtotal'];
    }

    /**
     * Sets use_discounted_subtotal
     *
     * @param bool $use_discounted_subtotal use_discounted_subtotal
     *
     * @return $this
     */
    public function setUseDiscountedSubtotal($use_discounted_subtotal)
    {
        /* */
        $this->container['use_discounted_subtotal'] = $use_discounted_subtotal;

        return $this;
    }

    /**
     * Gets include_taxes
     *
     * @return bool
     */
    public function getIncludeTaxes()
    {
        return $this->container['include_taxes'];
    }

    /**
     * Sets include_taxes
     *
     * @param bool $include_taxes include_taxes
     *
     * @return $this
     */
    public function setIncludeTaxes($include_taxes)
    {
        /* */
        $this->container['include_taxes'] = $include_taxes;

        return $this;
    }

    /**
     * Gets cost_type
     *
     * @return string
     */
    public function getCostType()
    {
        return $this->container['cost_type'];
    }

    /**
     * Sets cost_type
     *
     * @param string $cost_type cost_type
     *
     * @return $this
     */
    public function setCostType($cost_type)
    {
        /*
        $allowedValues = $this->getCostTypeAllowableValues();
        if (!in_array($cost_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cost_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
 */
        $this->container['cost_type'] = $cost_type;

        return $this;
    }

    /**
     * Gets ranges
     *
     * @return \Tradenity\SDK\Resources\TableRateRule[]
     */
    public function getRanges()
    {
        return $this->container['ranges'];
    }

    /**
     * Sets ranges
     *
     * @param \Tradenity\SDK\Resources\TableRateRule[] $ranges ranges
     *
     * @return $this
     */
    public function setRanges($ranges)
    {
        /* */
        $this->container['ranges'] = $ranges;

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
     * List TableRateShippings
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[TableRateShipping]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllTableRateShippings(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllTableRateShippings();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllTableRateShippings($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllTableRateShippings($parameters)[0];
    }


    /**
     * Operation getTableRateShippingById
     *
     * Find TableRateShipping By ID
     *
     * @param  string $id ID of TableRateShipping to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\TableRateShipping
     */
    public static function findById($id)
    {
        return self::getTableRateShippingById($id);
    }

    /**
     * Operation create
     *
     * Create New TableRateShipping
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\TableRateShipping
     */
    public function create()
    {
        $instance = self::createTableRateShipping($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateTableRateShippingById
    *
    * Update TableRateShipping
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\TableRateShipping
    */
    public function update()
    {
        return self::updateTableRateShippingById($this->getId(), $this);
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
        self::deleteTableRateShippingById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete TableRateShipping By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteTableRateShippingById($id);
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
     * Operation createTableRateShipping
     *
     * Create TableRateShipping
     *
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\TableRateShipping
     */
    public static function createTableRateShipping($table_rate_shipping)
    {
        list($response) = self::createTableRateShippingWithHttpInfo($table_rate_shipping);
        return $response;
    }


    /**
     * Operation createTableRateShippingWithHttpInfo
     *
     * Create TableRateShipping
     *
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\TableRateShipping, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createTableRateShippingWithHttpInfo($table_rate_shipping)
    {
        $returnType = '\Tradenity\SDK\Resources\TableRateShipping';  
        $request = self::createTableRateShippingRequest($table_rate_shipping); 

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
                        '\Tradenity\SDK\Resources\TableRateShipping',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createTableRateShippingAsync
    *
    * Create TableRateShipping
    *
    * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createTableRateShippingAsync($table_rate_shipping)
    {
        return self::createTableRateShippingAsyncWithHttpInfo($table_rate_shipping)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createTableRateShippingAsyncWithHttpInfo
     *
     * Create TableRateShipping
     *
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createTableRateShippingAsyncWithHttpInfo($table_rate_shipping) 
    {
        $returnType = '\Tradenity\SDK\Resources\TableRateShipping';  
        $request = self::createTableRateShippingRequest($table_rate_shipping); 

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
     * Create request for operation 'createTableRateShipping'
     *
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createTableRateShippingRequest($table_rate_shipping) 
    {
        // verify the required parameter 'table_rate_shipping' is set
        if ($table_rate_shipping === null || (is_array($table_rate_shipping) && count($table_rate_shipping) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $table_rate_shipping when calling createTableRateShipping'
            );
        }

        $resourcePath = '/tableRateShippings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($table_rate_shipping)) {
            $_tempBody = $table_rate_shipping;
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
     * Operation deleteTableRateShippingById
     *
     * Delete TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteTableRateShippingById($table_rate_shipping_id)
    {
        self::deleteTableRateShippingByIdWithHttpInfo($table_rate_shipping_id);
    }


    /**
     * Operation deleteTableRateShippingByIdWithHttpInfo
     *
     * Delete TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteTableRateShippingByIdWithHttpInfo($table_rate_shipping_id)
    {
        $returnType = '';  
        $request = self::deleteTableRateShippingByIdRequest($table_rate_shipping_id); 

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
    * Operation deleteTableRateShippingByIdAsync
    *
    * Delete TableRateShipping
    *
    * @param  string $table_rate_shipping_id ID of tableRateShipping to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteTableRateShippingByIdAsync($table_rate_shipping_id)
    {
        return self::deleteTableRateShippingByIdAsyncWithHttpInfo($table_rate_shipping_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteTableRateShippingByIdAsyncWithHttpInfo
     *
     * Delete TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteTableRateShippingByIdAsyncWithHttpInfo($table_rate_shipping_id) 
    {
        $returnType = '';  
        $request = self::deleteTableRateShippingByIdRequest($table_rate_shipping_id); 

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
     * Create request for operation 'deleteTableRateShippingById'
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteTableRateShippingByIdRequest($table_rate_shipping_id) 
    {
        // verify the required parameter 'table_rate_shipping_id' is set
        if ($table_rate_shipping_id === null || (is_array($table_rate_shipping_id) && count($table_rate_shipping_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $table_rate_shipping_id when calling deleteTableRateShippingById'
            );
        }

        $resourcePath = '/tableRateShippings/{tableRateShippingId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($table_rate_shipping_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tableRateShippingId' . '}',
                ObjectSerializer::toPathValue($table_rate_shipping_id),
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
     * Operation getTableRateShippingById
     *
     * Find TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\TableRateShipping
     */
    public static function getTableRateShippingById($table_rate_shipping_id)
    {
        list($response) = self::getTableRateShippingByIdWithHttpInfo($table_rate_shipping_id);
        return $response;
    }


    /**
     * Operation getTableRateShippingByIdWithHttpInfo
     *
     * Find TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\TableRateShipping, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getTableRateShippingByIdWithHttpInfo($table_rate_shipping_id)
    {
        $returnType = '\Tradenity\SDK\Resources\TableRateShipping';  
        $request = self::getTableRateShippingByIdRequest($table_rate_shipping_id); 

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
                        '\Tradenity\SDK\Resources\TableRateShipping',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getTableRateShippingByIdAsync
    *
    * Find TableRateShipping
    *
    * @param  string $table_rate_shipping_id ID of tableRateShipping to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getTableRateShippingByIdAsync($table_rate_shipping_id)
    {
        return self::getTableRateShippingByIdAsyncWithHttpInfo($table_rate_shipping_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getTableRateShippingByIdAsyncWithHttpInfo
     *
     * Find TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getTableRateShippingByIdAsyncWithHttpInfo($table_rate_shipping_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\TableRateShipping';  
        $request = self::getTableRateShippingByIdRequest($table_rate_shipping_id); 

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
     * Create request for operation 'getTableRateShippingById'
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getTableRateShippingByIdRequest($table_rate_shipping_id) 
    {
        // verify the required parameter 'table_rate_shipping_id' is set
        if ($table_rate_shipping_id === null || (is_array($table_rate_shipping_id) && count($table_rate_shipping_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $table_rate_shipping_id when calling getTableRateShippingById'
            );
        }

        $resourcePath = '/tableRateShippings/{tableRateShippingId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($table_rate_shipping_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tableRateShippingId' . '}',
                ObjectSerializer::toPathValue($table_rate_shipping_id),
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
    * Operation listAllTableRateShippings
    *
    * List TableRateShippings
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\TableRateShipping[page]
    */
    public static function listAllTableRateShippings(array $parameters = [])
    {
        list($response) = self::listAllTableRateShippingsWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllTableRateShippingsWithHttpInfo
     *
     * List TableRateShippings
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\TableRateShipping[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllTableRateShippingsWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\TableRateShipping[page]'; 
        $request = self::listAllTableRateShippingsRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\TableRateShipping[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllTableRateShippingsAsync
     *
     * List TableRateShippings
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllTableRateShippingsAsync(array $parameters = [])
    {
        return self::listAllTableRateShippingsAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllTableRateShippingsAsyncWithHttpInfo
     *
     * List TableRateShippings
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllTableRateShippingsAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\TableRateShipping[page]'; 
        $request = self::listAllTableRateShippingsRequest($parameters);  

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
     * Create request for operation 'listAllTableRateShippings'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllTableRateShippingsRequest(array $parameters = [])  
    {

        $resourcePath = '/tableRateShippings';
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
     * Operation replaceTableRateShippingById
     *
     * Replace TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to replace (required)
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\TableRateShipping
     */
    public static function replaceTableRateShippingById($table_rate_shipping_id, $table_rate_shipping)
    {
        list($response) = self::replaceTableRateShippingByIdWithHttpInfo($table_rate_shipping_id, $table_rate_shipping);
        return $response;
    }


    /**
     * Operation replaceTableRateShippingByIdWithHttpInfo
     *
     * Replace TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to replace (required)
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\TableRateShipping, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceTableRateShippingByIdWithHttpInfo($table_rate_shipping_id, $table_rate_shipping)
    {
        $returnType = '\Tradenity\SDK\Resources\TableRateShipping';  
        $request = self::replaceTableRateShippingByIdRequest($table_rate_shipping_id, $table_rate_shipping); 

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
                        '\Tradenity\SDK\Resources\TableRateShipping',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceTableRateShippingByIdAsync
    *
    * Replace TableRateShipping
    *
    * @param  string $table_rate_shipping_id ID of tableRateShipping to replace (required)
    * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceTableRateShippingByIdAsync($table_rate_shipping_id, $table_rate_shipping)
    {
        return self::replaceTableRateShippingByIdAsyncWithHttpInfo($table_rate_shipping_id, $table_rate_shipping)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceTableRateShippingByIdAsyncWithHttpInfo
     *
     * Replace TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to replace (required)
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceTableRateShippingByIdAsyncWithHttpInfo($table_rate_shipping_id, $table_rate_shipping) 
    {
        $returnType = '\Tradenity\SDK\Resources\TableRateShipping';  
        $request = self::replaceTableRateShippingByIdRequest($table_rate_shipping_id, $table_rate_shipping); 

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
     * Create request for operation 'replaceTableRateShippingById'
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to replace (required)
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceTableRateShippingByIdRequest($table_rate_shipping_id, $table_rate_shipping) 
    {
        // verify the required parameter 'table_rate_shipping_id' is set
        if ($table_rate_shipping_id === null || (is_array($table_rate_shipping_id) && count($table_rate_shipping_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $table_rate_shipping_id when calling replaceTableRateShippingById'
            );
        }
        // verify the required parameter 'table_rate_shipping' is set
        if ($table_rate_shipping === null || (is_array($table_rate_shipping) && count($table_rate_shipping) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $table_rate_shipping when calling replaceTableRateShippingById'
            );
        }

        $resourcePath = '/tableRateShippings/{tableRateShippingId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($table_rate_shipping_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tableRateShippingId' . '}',
                ObjectSerializer::toPathValue($table_rate_shipping_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($table_rate_shipping)) {
            $_tempBody = $table_rate_shipping;
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
     * Operation updateTableRateShippingById
     *
     * Update TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to update. (required)
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\TableRateShipping
     */
    public static function updateTableRateShippingById($table_rate_shipping_id, $table_rate_shipping)
    {
        list($response) = self::updateTableRateShippingByIdWithHttpInfo($table_rate_shipping_id, $table_rate_shipping);
        return $response;
    }


    /**
     * Operation updateTableRateShippingByIdWithHttpInfo
     *
     * Update TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to update. (required)
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\TableRateShipping, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateTableRateShippingByIdWithHttpInfo($table_rate_shipping_id, $table_rate_shipping)
    {
        $returnType = '\Tradenity\SDK\Resources\TableRateShipping';  
        $request = self::updateTableRateShippingByIdRequest($table_rate_shipping_id, $table_rate_shipping); 

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
                        '\Tradenity\SDK\Resources\TableRateShipping',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateTableRateShippingByIdAsync
    *
    * Update TableRateShipping
    *
    * @param  string $table_rate_shipping_id ID of tableRateShipping to update. (required)
    * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateTableRateShippingByIdAsync($table_rate_shipping_id, $table_rate_shipping)
    {
        return self::updateTableRateShippingByIdAsyncWithHttpInfo($table_rate_shipping_id, $table_rate_shipping)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateTableRateShippingByIdAsyncWithHttpInfo
     *
     * Update TableRateShipping
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to update. (required)
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateTableRateShippingByIdAsyncWithHttpInfo($table_rate_shipping_id, $table_rate_shipping) 
    {
        $returnType = '\Tradenity\SDK\Resources\TableRateShipping';  
        $request = self::updateTableRateShippingByIdRequest($table_rate_shipping_id, $table_rate_shipping); 

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
     * Create request for operation 'updateTableRateShippingById'
     *
     * @param  string $table_rate_shipping_id ID of tableRateShipping to update. (required)
     * @param  \Tradenity\SDK\Resources\TableRateShipping $table_rate_shipping Attributes of tableRateShipping to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateTableRateShippingByIdRequest($table_rate_shipping_id, $table_rate_shipping) 
    {
        // verify the required parameter 'table_rate_shipping_id' is set
        if ($table_rate_shipping_id === null || (is_array($table_rate_shipping_id) && count($table_rate_shipping_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $table_rate_shipping_id when calling updateTableRateShippingById'
            );
        }
        // verify the required parameter 'table_rate_shipping' is set
        if ($table_rate_shipping === null || (is_array($table_rate_shipping) && count($table_rate_shipping) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $table_rate_shipping when calling updateTableRateShippingById'
            );
        }

        $resourcePath = '/tableRateShippings/{tableRateShippingId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($table_rate_shipping_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tableRateShippingId' . '}',
                ObjectSerializer::toPathValue($table_rate_shipping_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($table_rate_shipping)) {
            $_tempBody = $table_rate_shipping;
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
