<?php
/**
 * FreeShippingCoupon
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
 * FreeShippingCoupon Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class FreeShippingCoupon
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
    protected static $swaggerModelName = 'FreeShippingCoupon';

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
        'status' => 'string',
        'minimum_order' => 'int',
        'code' => 'string',
        'begins_at' => '\DateTime',
        'ends_at' => '\DateTime',
        'include' => '\Tradenity\SDK\Resources\ItemsSelector',
        'geo_zones' => '\Tradenity\SDK\Resources\GeoZone[]'
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
        'status' => null,
        'minimum_order' => 'int32',
        'code' => null,
        'begins_at' => 'date-time',
        'ends_at' => 'date-time',
        'include' => null,
        'geo_zones' => null
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
        'status' => 'status',
        'minimum_order' => 'minimumOrder',
        'code' => 'code',
        'begins_at' => 'beginsAt',
        'ends_at' => 'endsAt',
        'include' => 'include',
        'geo_zones' => 'geoZones'
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
        'status' => 'setStatus',
        'minimum_order' => 'setMinimumOrder',
        'code' => 'setCode',
        'begins_at' => 'setBeginsAt',
        'ends_at' => 'setEndsAt',
        'include' => 'setInclude',
        'geo_zones' => 'setGeoZones'
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
        'status' => 'getStatus',
        'minimum_order' => 'getMinimumOrder',
        'code' => 'getCode',
        'begins_at' => 'getBeginsAt',
        'ends_at' => 'getEndsAt',
        'include' => 'getInclude',
        'geo_zones' => 'getGeoZones'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null; 
        $this->container['status'] = isset($data['status']) ? $data['status'] : null; 
        $this->container['minimum_order'] = isset($data['minimum_order']) ? $data['minimum_order'] : null; 
        $this->container['minimum_order'] = isset($data['minimumOrder']) ? $data['minimumOrder'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null; 
        $this->container['begins_at'] = isset($data['begins_at']) ? $data['begins_at'] : null; 
        $this->container['begins_at'] = isset($data['beginsAt']) ? $data['beginsAt'] : null;
        $this->container['ends_at'] = isset($data['ends_at']) ? $data['ends_at'] : null; 
        $this->container['ends_at'] = isset($data['endsAt']) ? $data['endsAt'] : null;
        $this->container['include'] = isset($data['include']) ? $data['include'] : null; 
        $this->container['geo_zones'] = isset($data['geo_zones']) ? $data['geo_zones'] : null; 
        $this->container['geo_zones'] = isset($data['geoZones']) ? $data['geoZones'] : null;
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

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
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
     * Gets begins_at
     *
     * @return \DateTime
     */
    public function getBeginsAt()
    {
        return $this->container['begins_at'];
    }

    /**
     * Sets begins_at
     *
     * @param \DateTime $begins_at begins_at
     *
     * @return $this
     */
    public function setBeginsAt($begins_at)
    {
        /* */
        $this->container['begins_at'] = $begins_at;

        return $this;
    }

    /**
     * Gets ends_at
     *
     * @return \DateTime
     */
    public function getEndsAt()
    {
        return $this->container['ends_at'];
    }

    /**
     * Sets ends_at
     *
     * @param \DateTime $ends_at ends_at
     *
     * @return $this
     */
    public function setEndsAt($ends_at)
    {
        /* */
        $this->container['ends_at'] = $ends_at;

        return $this;
    }

    /**
     * Gets include
     *
     * @return \Tradenity\SDK\Resources\ItemsSelector
     */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
     * Sets include
     *
     * @param \Tradenity\SDK\Resources\ItemsSelector $include include
     *
     * @return $this
     */
    public function setInclude($include)
    {
        /* */
        $this->container['include'] = $include;

        return $this;
    }

    /**
     * Gets geo_zones
     *
     * @return \Tradenity\SDK\Resources\GeoZone[]
     */
    public function getGeoZones()
    {
        return $this->container['geo_zones'];
    }

    /**
     * Sets geo_zones
     *
     * @param \Tradenity\SDK\Resources\GeoZone[] $geo_zones geo_zones
     *
     * @return $this
     */
    public function setGeoZones($geo_zones)
    {
        /* */
        $this->container['geo_zones'] = $geo_zones;

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
     * List FreeShippingCoupons
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[FreeShippingCoupon]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllFreeShippingCoupons(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllFreeShippingCoupons();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllFreeShippingCoupons($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllFreeShippingCoupons($parameters)[0];
    }


    /**
     * Operation getFreeShippingCouponById
     *
     * Find FreeShippingCoupon By ID
     *
     * @param  string $id ID of FreeShippingCoupon to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\FreeShippingCoupon
     */
    public static function findById($id)
    {
        return self::getFreeShippingCouponById($id);
    }

    /**
     * Operation create
     *
     * Create New FreeShippingCoupon
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\FreeShippingCoupon
     */
    public function create()
    {
        $instance = self::createFreeShippingCoupon($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateFreeShippingCouponById
    *
    * Update FreeShippingCoupon
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\FreeShippingCoupon
    */
    public function update()
    {
        return self::updateFreeShippingCouponById($this->getId(), $this);
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
        self::deleteFreeShippingCouponById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete FreeShippingCoupon By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteFreeShippingCouponById($id);
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
     * Operation createFreeShippingCoupon
     *
     * Create FreeShippingCoupon
     *
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShippingCoupon
     */
    public static function createFreeShippingCoupon($free_shipping_coupon)
    {
        list($response) = self::createFreeShippingCouponWithHttpInfo($free_shipping_coupon);
        return $response;
    }


    /**
     * Operation createFreeShippingCouponWithHttpInfo
     *
     * Create FreeShippingCoupon
     *
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShippingCoupon, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createFreeShippingCouponWithHttpInfo($free_shipping_coupon)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingCoupon';  
        $request = self::createFreeShippingCouponRequest($free_shipping_coupon); 

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
                        '\Tradenity\SDK\Resources\FreeShippingCoupon',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createFreeShippingCouponAsync
    *
    * Create FreeShippingCoupon
    *
    * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createFreeShippingCouponAsync($free_shipping_coupon)
    {
        return self::createFreeShippingCouponAsyncWithHttpInfo($free_shipping_coupon)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createFreeShippingCouponAsyncWithHttpInfo
     *
     * Create FreeShippingCoupon
     *
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createFreeShippingCouponAsyncWithHttpInfo($free_shipping_coupon) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingCoupon';  
        $request = self::createFreeShippingCouponRequest($free_shipping_coupon); 

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
     * Create request for operation 'createFreeShippingCoupon'
     *
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createFreeShippingCouponRequest($free_shipping_coupon) 
    {
        // verify the required parameter 'free_shipping_coupon' is set
        if ($free_shipping_coupon === null || (is_array($free_shipping_coupon) && count($free_shipping_coupon) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_coupon when calling createFreeShippingCoupon'
            );
        }

        $resourcePath = '/freeShippingCoupons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($free_shipping_coupon)) {
            $_tempBody = $free_shipping_coupon;
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
     * Operation deleteFreeShippingCouponById
     *
     * Delete FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteFreeShippingCouponById($free_shipping_coupon_id)
    {
        self::deleteFreeShippingCouponByIdWithHttpInfo($free_shipping_coupon_id);
    }


    /**
     * Operation deleteFreeShippingCouponByIdWithHttpInfo
     *
     * Delete FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteFreeShippingCouponByIdWithHttpInfo($free_shipping_coupon_id)
    {
        $returnType = '';  
        $request = self::deleteFreeShippingCouponByIdRequest($free_shipping_coupon_id); 

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
    * Operation deleteFreeShippingCouponByIdAsync
    *
    * Delete FreeShippingCoupon
    *
    * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteFreeShippingCouponByIdAsync($free_shipping_coupon_id)
    {
        return self::deleteFreeShippingCouponByIdAsyncWithHttpInfo($free_shipping_coupon_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteFreeShippingCouponByIdAsyncWithHttpInfo
     *
     * Delete FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteFreeShippingCouponByIdAsyncWithHttpInfo($free_shipping_coupon_id) 
    {
        $returnType = '';  
        $request = self::deleteFreeShippingCouponByIdRequest($free_shipping_coupon_id); 

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
     * Create request for operation 'deleteFreeShippingCouponById'
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteFreeShippingCouponByIdRequest($free_shipping_coupon_id) 
    {
        // verify the required parameter 'free_shipping_coupon_id' is set
        if ($free_shipping_coupon_id === null || (is_array($free_shipping_coupon_id) && count($free_shipping_coupon_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_coupon_id when calling deleteFreeShippingCouponById'
            );
        }

        $resourcePath = '/freeShippingCoupons/{freeShippingCouponId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_coupon_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingCouponId' . '}',
                ObjectSerializer::toPathValue($free_shipping_coupon_id),
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
     * Operation getFreeShippingCouponById
     *
     * Find FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShippingCoupon
     */
    public static function getFreeShippingCouponById($free_shipping_coupon_id)
    {
        list($response) = self::getFreeShippingCouponByIdWithHttpInfo($free_shipping_coupon_id);
        return $response;
    }


    /**
     * Operation getFreeShippingCouponByIdWithHttpInfo
     *
     * Find FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShippingCoupon, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getFreeShippingCouponByIdWithHttpInfo($free_shipping_coupon_id)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingCoupon';  
        $request = self::getFreeShippingCouponByIdRequest($free_shipping_coupon_id); 

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
                        '\Tradenity\SDK\Resources\FreeShippingCoupon',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getFreeShippingCouponByIdAsync
    *
    * Find FreeShippingCoupon
    *
    * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getFreeShippingCouponByIdAsync($free_shipping_coupon_id)
    {
        return self::getFreeShippingCouponByIdAsyncWithHttpInfo($free_shipping_coupon_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getFreeShippingCouponByIdAsyncWithHttpInfo
     *
     * Find FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getFreeShippingCouponByIdAsyncWithHttpInfo($free_shipping_coupon_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingCoupon';  
        $request = self::getFreeShippingCouponByIdRequest($free_shipping_coupon_id); 

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
     * Create request for operation 'getFreeShippingCouponById'
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getFreeShippingCouponByIdRequest($free_shipping_coupon_id) 
    {
        // verify the required parameter 'free_shipping_coupon_id' is set
        if ($free_shipping_coupon_id === null || (is_array($free_shipping_coupon_id) && count($free_shipping_coupon_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_coupon_id when calling getFreeShippingCouponById'
            );
        }

        $resourcePath = '/freeShippingCoupons/{freeShippingCouponId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_coupon_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingCouponId' . '}',
                ObjectSerializer::toPathValue($free_shipping_coupon_id),
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
    * Operation listAllFreeShippingCoupons
    *
    * List FreeShippingCoupons
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\FreeShippingCoupon[page]
    */
    public static function listAllFreeShippingCoupons(array $parameters = [])
    {
        list($response) = self::listAllFreeShippingCouponsWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllFreeShippingCouponsWithHttpInfo
     *
     * List FreeShippingCoupons
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShippingCoupon[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllFreeShippingCouponsWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingCoupon[page]'; 
        $request = self::listAllFreeShippingCouponsRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\FreeShippingCoupon[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllFreeShippingCouponsAsync
     *
     * List FreeShippingCoupons
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllFreeShippingCouponsAsync(array $parameters = [])
    {
        return self::listAllFreeShippingCouponsAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllFreeShippingCouponsAsyncWithHttpInfo
     *
     * List FreeShippingCoupons
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllFreeShippingCouponsAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingCoupon[page]'; 
        $request = self::listAllFreeShippingCouponsRequest($parameters);  

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
     * Create request for operation 'listAllFreeShippingCoupons'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllFreeShippingCouponsRequest(array $parameters = [])  
    {

        $resourcePath = '/freeShippingCoupons';
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
     * Operation replaceFreeShippingCouponById
     *
     * Replace FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShippingCoupon
     */
    public static function replaceFreeShippingCouponById($free_shipping_coupon_id, $free_shipping_coupon)
    {
        list($response) = self::replaceFreeShippingCouponByIdWithHttpInfo($free_shipping_coupon_id, $free_shipping_coupon);
        return $response;
    }


    /**
     * Operation replaceFreeShippingCouponByIdWithHttpInfo
     *
     * Replace FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShippingCoupon, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceFreeShippingCouponByIdWithHttpInfo($free_shipping_coupon_id, $free_shipping_coupon)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingCoupon';  
        $request = self::replaceFreeShippingCouponByIdRequest($free_shipping_coupon_id, $free_shipping_coupon); 

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
                        '\Tradenity\SDK\Resources\FreeShippingCoupon',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceFreeShippingCouponByIdAsync
    *
    * Replace FreeShippingCoupon
    *
    * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to replace (required)
    * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceFreeShippingCouponByIdAsync($free_shipping_coupon_id, $free_shipping_coupon)
    {
        return self::replaceFreeShippingCouponByIdAsyncWithHttpInfo($free_shipping_coupon_id, $free_shipping_coupon)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceFreeShippingCouponByIdAsyncWithHttpInfo
     *
     * Replace FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceFreeShippingCouponByIdAsyncWithHttpInfo($free_shipping_coupon_id, $free_shipping_coupon) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingCoupon';  
        $request = self::replaceFreeShippingCouponByIdRequest($free_shipping_coupon_id, $free_shipping_coupon); 

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
     * Create request for operation 'replaceFreeShippingCouponById'
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceFreeShippingCouponByIdRequest($free_shipping_coupon_id, $free_shipping_coupon) 
    {
        // verify the required parameter 'free_shipping_coupon_id' is set
        if ($free_shipping_coupon_id === null || (is_array($free_shipping_coupon_id) && count($free_shipping_coupon_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_coupon_id when calling replaceFreeShippingCouponById'
            );
        }
        // verify the required parameter 'free_shipping_coupon' is set
        if ($free_shipping_coupon === null || (is_array($free_shipping_coupon) && count($free_shipping_coupon) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_coupon when calling replaceFreeShippingCouponById'
            );
        }

        $resourcePath = '/freeShippingCoupons/{freeShippingCouponId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_coupon_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingCouponId' . '}',
                ObjectSerializer::toPathValue($free_shipping_coupon_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($free_shipping_coupon)) {
            $_tempBody = $free_shipping_coupon;
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
     * Operation updateFreeShippingCouponById
     *
     * Update FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShippingCoupon
     */
    public static function updateFreeShippingCouponById($free_shipping_coupon_id, $free_shipping_coupon)
    {
        list($response) = self::updateFreeShippingCouponByIdWithHttpInfo($free_shipping_coupon_id, $free_shipping_coupon);
        return $response;
    }


    /**
     * Operation updateFreeShippingCouponByIdWithHttpInfo
     *
     * Update FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShippingCoupon, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateFreeShippingCouponByIdWithHttpInfo($free_shipping_coupon_id, $free_shipping_coupon)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingCoupon';  
        $request = self::updateFreeShippingCouponByIdRequest($free_shipping_coupon_id, $free_shipping_coupon); 

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
                        '\Tradenity\SDK\Resources\FreeShippingCoupon',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateFreeShippingCouponByIdAsync
    *
    * Update FreeShippingCoupon
    *
    * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to update. (required)
    * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateFreeShippingCouponByIdAsync($free_shipping_coupon_id, $free_shipping_coupon)
    {
        return self::updateFreeShippingCouponByIdAsyncWithHttpInfo($free_shipping_coupon_id, $free_shipping_coupon)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateFreeShippingCouponByIdAsyncWithHttpInfo
     *
     * Update FreeShippingCoupon
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateFreeShippingCouponByIdAsyncWithHttpInfo($free_shipping_coupon_id, $free_shipping_coupon) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingCoupon';  
        $request = self::updateFreeShippingCouponByIdRequest($free_shipping_coupon_id, $free_shipping_coupon); 

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
     * Create request for operation 'updateFreeShippingCouponById'
     *
     * @param  string $free_shipping_coupon_id ID of freeShippingCoupon to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingCoupon $free_shipping_coupon Attributes of freeShippingCoupon to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateFreeShippingCouponByIdRequest($free_shipping_coupon_id, $free_shipping_coupon) 
    {
        // verify the required parameter 'free_shipping_coupon_id' is set
        if ($free_shipping_coupon_id === null || (is_array($free_shipping_coupon_id) && count($free_shipping_coupon_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_coupon_id when calling updateFreeShippingCouponById'
            );
        }
        // verify the required parameter 'free_shipping_coupon' is set
        if ($free_shipping_coupon === null || (is_array($free_shipping_coupon) && count($free_shipping_coupon) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_coupon when calling updateFreeShippingCouponById'
            );
        }

        $resourcePath = '/freeShippingCoupons/{freeShippingCouponId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_coupon_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingCouponId' . '}',
                ObjectSerializer::toPathValue($free_shipping_coupon_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($free_shipping_coupon)) {
            $_tempBody = $free_shipping_coupon;
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
