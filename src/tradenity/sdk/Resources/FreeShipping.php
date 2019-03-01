<?php
/**
 * FreeShipping
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
 * FreeShipping Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class FreeShipping
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
    protected static $swaggerModelName = 'FreeShipping';

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
        'minimum_order' => 'int'
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
        'minimum_order' => 'int32'
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
        'minimum_order' => 'minimumOrder'
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
        'minimum_order' => 'setMinimumOrder'
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
        'minimum_order' => 'getMinimumOrder'
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
        $this->container['minimum_order'] = isset($data['minimum_order']) ? $data['minimum_order'] : null; 
        $this->container['minimum_order'] = isset($data['minimumOrder']) ? $data['minimumOrder'] : null;
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
     * Gets minimum_order
     *
     * @return int
     */
    public function getMinimumOrder()
    {
        return $this->container['minimum_order'];
    }

    /**
     * Sets minimum_order
     *
     * @param int $minimum_order minimum_order
     *
     * @return $this
     */
    public function setMinimumOrder($minimum_order)
    {
        /* */
        $this->container['minimum_order'] = $minimum_order;

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
     * List FreeShippings
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[FreeShipping]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllFreeShippings(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllFreeShippings();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllFreeShippings($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllFreeShippings($parameters)[0];
    }


    /**
     * Operation getFreeShippingById
     *
     * Find FreeShipping By ID
     *
     * @param  string $id ID of FreeShipping to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\FreeShipping
     */
    public static function findById($id)
    {
        return self::getFreeShippingById($id);
    }

    /**
     * Operation create
     *
     * Create New FreeShipping
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\FreeShipping
     */
    public function create()
    {
        $instance = self::createFreeShipping($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateFreeShippingById
    *
    * Update FreeShipping
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\FreeShipping
    */
    public function update()
    {
        return self::updateFreeShippingById($this->getId(), $this);
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
        self::deleteFreeShippingById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete FreeShipping By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteFreeShippingById($id);
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
     * Operation createFreeShipping
     *
     * Create FreeShipping
     *
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShipping
     */
    public static function createFreeShipping($free_shipping)
    {
        list($response) = self::createFreeShippingWithHttpInfo($free_shipping);
        return $response;
    }


    /**
     * Operation createFreeShippingWithHttpInfo
     *
     * Create FreeShipping
     *
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShipping, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createFreeShippingWithHttpInfo($free_shipping)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShipping';  
        $request = self::createFreeShippingRequest($free_shipping); 

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
                        '\Tradenity\SDK\Resources\FreeShipping',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createFreeShippingAsync
    *
    * Create FreeShipping
    *
    * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createFreeShippingAsync($free_shipping)
    {
        return self::createFreeShippingAsyncWithHttpInfo($free_shipping)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createFreeShippingAsyncWithHttpInfo
     *
     * Create FreeShipping
     *
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createFreeShippingAsyncWithHttpInfo($free_shipping) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShipping';  
        $request = self::createFreeShippingRequest($free_shipping); 

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
     * Create request for operation 'createFreeShipping'
     *
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createFreeShippingRequest($free_shipping) 
    {
        // verify the required parameter 'free_shipping' is set
        if ($free_shipping === null || (is_array($free_shipping) && count($free_shipping) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping when calling createFreeShipping'
            );
        }

        $resourcePath = '/freeShippings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($free_shipping)) {
            $_tempBody = $free_shipping;
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
     * Operation deleteFreeShippingById
     *
     * Delete FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteFreeShippingById($free_shipping_id)
    {
        self::deleteFreeShippingByIdWithHttpInfo($free_shipping_id);
    }


    /**
     * Operation deleteFreeShippingByIdWithHttpInfo
     *
     * Delete FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteFreeShippingByIdWithHttpInfo($free_shipping_id)
    {
        $returnType = '';  
        $request = self::deleteFreeShippingByIdRequest($free_shipping_id); 

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
    * Operation deleteFreeShippingByIdAsync
    *
    * Delete FreeShipping
    *
    * @param  string $free_shipping_id ID of freeShipping to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteFreeShippingByIdAsync($free_shipping_id)
    {
        return self::deleteFreeShippingByIdAsyncWithHttpInfo($free_shipping_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteFreeShippingByIdAsyncWithHttpInfo
     *
     * Delete FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteFreeShippingByIdAsyncWithHttpInfo($free_shipping_id) 
    {
        $returnType = '';  
        $request = self::deleteFreeShippingByIdRequest($free_shipping_id); 

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
     * Create request for operation 'deleteFreeShippingById'
     *
     * @param  string $free_shipping_id ID of freeShipping to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteFreeShippingByIdRequest($free_shipping_id) 
    {
        // verify the required parameter 'free_shipping_id' is set
        if ($free_shipping_id === null || (is_array($free_shipping_id) && count($free_shipping_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_id when calling deleteFreeShippingById'
            );
        }

        $resourcePath = '/freeShippings/{freeShippingId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingId' . '}',
                ObjectSerializer::toPathValue($free_shipping_id),
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
     * Operation getFreeShippingById
     *
     * Find FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShipping
     */
    public static function getFreeShippingById($free_shipping_id)
    {
        list($response) = self::getFreeShippingByIdWithHttpInfo($free_shipping_id);
        return $response;
    }


    /**
     * Operation getFreeShippingByIdWithHttpInfo
     *
     * Find FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShipping, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getFreeShippingByIdWithHttpInfo($free_shipping_id)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShipping';  
        $request = self::getFreeShippingByIdRequest($free_shipping_id); 

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
                        '\Tradenity\SDK\Resources\FreeShipping',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getFreeShippingByIdAsync
    *
    * Find FreeShipping
    *
    * @param  string $free_shipping_id ID of freeShipping to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getFreeShippingByIdAsync($free_shipping_id)
    {
        return self::getFreeShippingByIdAsyncWithHttpInfo($free_shipping_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getFreeShippingByIdAsyncWithHttpInfo
     *
     * Find FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getFreeShippingByIdAsyncWithHttpInfo($free_shipping_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShipping';  
        $request = self::getFreeShippingByIdRequest($free_shipping_id); 

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
     * Create request for operation 'getFreeShippingById'
     *
     * @param  string $free_shipping_id ID of freeShipping to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getFreeShippingByIdRequest($free_shipping_id) 
    {
        // verify the required parameter 'free_shipping_id' is set
        if ($free_shipping_id === null || (is_array($free_shipping_id) && count($free_shipping_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_id when calling getFreeShippingById'
            );
        }

        $resourcePath = '/freeShippings/{freeShippingId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingId' . '}',
                ObjectSerializer::toPathValue($free_shipping_id),
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
    * Operation listAllFreeShippings
    *
    * List FreeShippings
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\FreeShipping[page]
    */
    public static function listAllFreeShippings(array $parameters = [])
    {
        list($response) = self::listAllFreeShippingsWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllFreeShippingsWithHttpInfo
     *
     * List FreeShippings
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShipping[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllFreeShippingsWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShipping[page]'; 
        $request = self::listAllFreeShippingsRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\FreeShipping[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllFreeShippingsAsync
     *
     * List FreeShippings
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllFreeShippingsAsync(array $parameters = [])
    {
        return self::listAllFreeShippingsAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllFreeShippingsAsyncWithHttpInfo
     *
     * List FreeShippings
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllFreeShippingsAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShipping[page]'; 
        $request = self::listAllFreeShippingsRequest($parameters);  

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
     * Create request for operation 'listAllFreeShippings'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllFreeShippingsRequest(array $parameters = [])  
    {

        $resourcePath = '/freeShippings';
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
     * Operation replaceFreeShippingById
     *
     * Replace FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShipping
     */
    public static function replaceFreeShippingById($free_shipping_id, $free_shipping)
    {
        list($response) = self::replaceFreeShippingByIdWithHttpInfo($free_shipping_id, $free_shipping);
        return $response;
    }


    /**
     * Operation replaceFreeShippingByIdWithHttpInfo
     *
     * Replace FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShipping, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceFreeShippingByIdWithHttpInfo($free_shipping_id, $free_shipping)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShipping';  
        $request = self::replaceFreeShippingByIdRequest($free_shipping_id, $free_shipping); 

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
                        '\Tradenity\SDK\Resources\FreeShipping',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceFreeShippingByIdAsync
    *
    * Replace FreeShipping
    *
    * @param  string $free_shipping_id ID of freeShipping to replace (required)
    * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceFreeShippingByIdAsync($free_shipping_id, $free_shipping)
    {
        return self::replaceFreeShippingByIdAsyncWithHttpInfo($free_shipping_id, $free_shipping)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceFreeShippingByIdAsyncWithHttpInfo
     *
     * Replace FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceFreeShippingByIdAsyncWithHttpInfo($free_shipping_id, $free_shipping) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShipping';  
        $request = self::replaceFreeShippingByIdRequest($free_shipping_id, $free_shipping); 

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
     * Create request for operation 'replaceFreeShippingById'
     *
     * @param  string $free_shipping_id ID of freeShipping to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceFreeShippingByIdRequest($free_shipping_id, $free_shipping) 
    {
        // verify the required parameter 'free_shipping_id' is set
        if ($free_shipping_id === null || (is_array($free_shipping_id) && count($free_shipping_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_id when calling replaceFreeShippingById'
            );
        }
        // verify the required parameter 'free_shipping' is set
        if ($free_shipping === null || (is_array($free_shipping) && count($free_shipping) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping when calling replaceFreeShippingById'
            );
        }

        $resourcePath = '/freeShippings/{freeShippingId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingId' . '}',
                ObjectSerializer::toPathValue($free_shipping_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($free_shipping)) {
            $_tempBody = $free_shipping;
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
     * Operation updateFreeShippingById
     *
     * Update FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShipping
     */
    public static function updateFreeShippingById($free_shipping_id, $free_shipping)
    {
        list($response) = self::updateFreeShippingByIdWithHttpInfo($free_shipping_id, $free_shipping);
        return $response;
    }


    /**
     * Operation updateFreeShippingByIdWithHttpInfo
     *
     * Update FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShipping, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateFreeShippingByIdWithHttpInfo($free_shipping_id, $free_shipping)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShipping';  
        $request = self::updateFreeShippingByIdRequest($free_shipping_id, $free_shipping); 

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
                        '\Tradenity\SDK\Resources\FreeShipping',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateFreeShippingByIdAsync
    *
    * Update FreeShipping
    *
    * @param  string $free_shipping_id ID of freeShipping to update. (required)
    * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateFreeShippingByIdAsync($free_shipping_id, $free_shipping)
    {
        return self::updateFreeShippingByIdAsyncWithHttpInfo($free_shipping_id, $free_shipping)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateFreeShippingByIdAsyncWithHttpInfo
     *
     * Update FreeShipping
     *
     * @param  string $free_shipping_id ID of freeShipping to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateFreeShippingByIdAsyncWithHttpInfo($free_shipping_id, $free_shipping) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShipping';  
        $request = self::updateFreeShippingByIdRequest($free_shipping_id, $free_shipping); 

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
     * Create request for operation 'updateFreeShippingById'
     *
     * @param  string $free_shipping_id ID of freeShipping to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShipping $free_shipping Attributes of freeShipping to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateFreeShippingByIdRequest($free_shipping_id, $free_shipping) 
    {
        // verify the required parameter 'free_shipping_id' is set
        if ($free_shipping_id === null || (is_array($free_shipping_id) && count($free_shipping_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_id when calling updateFreeShippingById'
            );
        }
        // verify the required parameter 'free_shipping' is set
        if ($free_shipping === null || (is_array($free_shipping) && count($free_shipping) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping when calling updateFreeShippingById'
            );
        }

        $resourcePath = '/freeShippings/{freeShippingId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingId' . '}',
                ObjectSerializer::toPathValue($free_shipping_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($free_shipping)) {
            $_tempBody = $free_shipping;
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
