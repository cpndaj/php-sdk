<?php
/**
 * ZipCodesGeoZone
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
 * ZipCodesGeoZone Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class ZipCodesGeoZone
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
    protected static $swaggerModelName = 'ZipCodesGeoZone';

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
        'status' => 'string',
        'description' => 'string',
        'zip_codes' => 'string',
        'country' => '\Tradenity\SDK\Resources\Country'
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
        'status' => null,
        'description' => null,
        'zip_codes' => null,
        'country' => null
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
        'status' => 'status',
        'description' => 'description',
        'zip_codes' => 'zipCodes',
        'country' => 'country'
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
        'status' => 'setStatus',
        'description' => 'setDescription',
        'zip_codes' => 'setZipCodes',
        'country' => 'setCountry'
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
        'status' => 'getStatus',
        'description' => 'getDescription',
        'zip_codes' => 'getZipCodes',
        'country' => 'getCountry'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null; 
        $this->container['description'] = isset($data['description']) ? $data['description'] : null; 
        $this->container['zip_codes'] = isset($data['zip_codes']) ? $data['zip_codes'] : null; 
        $this->container['zip_codes'] = isset($data['zipCodes']) ? $data['zipCodes'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null; 
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

        if ($this->container['zip_codes'] === null) {
            $invalidProperties[] = "'zip_codes' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
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
     * Gets zip_codes
     *
     * @return string
     */
    public function getZipCodes()
    {
        return $this->container['zip_codes'];
    }

    /**
     * Sets zip_codes
     *
     * @param string $zip_codes zip_codes
     *
     * @return $this
     */
    public function setZipCodes($zip_codes)
    {
        /* */
        $this->container['zip_codes'] = $zip_codes;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Tradenity\SDK\Resources\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Tradenity\SDK\Resources\Country $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        /* */
        $this->container['country'] = $country;

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
     * List ZipCodesGeoZones
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[ZipCodesGeoZone]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllZipCodesGeoZones(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllZipCodesGeoZones();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllZipCodesGeoZones($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllZipCodesGeoZones($parameters)[0];
    }


    /**
     * Operation getZipCodesGeoZoneById
     *
     * Find ZipCodesGeoZone By ID
     *
     * @param  string $id ID of ZipCodesGeoZone to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\ZipCodesGeoZone
     */
    public static function findById($id)
    {
        return self::getZipCodesGeoZoneById($id);
    }

    /**
     * Operation create
     *
     * Create New ZipCodesGeoZone
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\ZipCodesGeoZone
     */
    public function create()
    {
        $instance = self::createZipCodesGeoZone($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateZipCodesGeoZoneById
    *
    * Update ZipCodesGeoZone
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\ZipCodesGeoZone
    */
    public function update()
    {
        return self::updateZipCodesGeoZoneById($this->getId(), $this);
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
        self::deleteZipCodesGeoZoneById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete ZipCodesGeoZone By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteZipCodesGeoZoneById($id);
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
     * Operation createZipCodesGeoZone
     *
     * Create ZipCodesGeoZone
     *
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\ZipCodesGeoZone
     */
    public static function createZipCodesGeoZone($zip_codes_geo_zone)
    {
        list($response) = self::createZipCodesGeoZoneWithHttpInfo($zip_codes_geo_zone);
        return $response;
    }


    /**
     * Operation createZipCodesGeoZoneWithHttpInfo
     *
     * Create ZipCodesGeoZone
     *
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\ZipCodesGeoZone, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createZipCodesGeoZoneWithHttpInfo($zip_codes_geo_zone)
    {
        $returnType = '\Tradenity\SDK\Resources\ZipCodesGeoZone';  
        $request = self::createZipCodesGeoZoneRequest($zip_codes_geo_zone); 

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
                        '\Tradenity\SDK\Resources\ZipCodesGeoZone',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createZipCodesGeoZoneAsync
    *
    * Create ZipCodesGeoZone
    *
    * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createZipCodesGeoZoneAsync($zip_codes_geo_zone)
    {
        return self::createZipCodesGeoZoneAsyncWithHttpInfo($zip_codes_geo_zone)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createZipCodesGeoZoneAsyncWithHttpInfo
     *
     * Create ZipCodesGeoZone
     *
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createZipCodesGeoZoneAsyncWithHttpInfo($zip_codes_geo_zone) 
    {
        $returnType = '\Tradenity\SDK\Resources\ZipCodesGeoZone';  
        $request = self::createZipCodesGeoZoneRequest($zip_codes_geo_zone); 

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
     * Create request for operation 'createZipCodesGeoZone'
     *
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createZipCodesGeoZoneRequest($zip_codes_geo_zone) 
    {
        // verify the required parameter 'zip_codes_geo_zone' is set
        if ($zip_codes_geo_zone === null || (is_array($zip_codes_geo_zone) && count($zip_codes_geo_zone) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zip_codes_geo_zone when calling createZipCodesGeoZone'
            );
        }

        $resourcePath = '/zipCodesGeoZones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($zip_codes_geo_zone)) {
            $_tempBody = $zip_codes_geo_zone;
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
     * Operation deleteZipCodesGeoZoneById
     *
     * Delete ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteZipCodesGeoZoneById($zip_codes_geo_zone_id)
    {
        self::deleteZipCodesGeoZoneByIdWithHttpInfo($zip_codes_geo_zone_id);
    }


    /**
     * Operation deleteZipCodesGeoZoneByIdWithHttpInfo
     *
     * Delete ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteZipCodesGeoZoneByIdWithHttpInfo($zip_codes_geo_zone_id)
    {
        $returnType = '';  
        $request = self::deleteZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id); 

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
    * Operation deleteZipCodesGeoZoneByIdAsync
    *
    * Delete ZipCodesGeoZone
    *
    * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteZipCodesGeoZoneByIdAsync($zip_codes_geo_zone_id)
    {
        return self::deleteZipCodesGeoZoneByIdAsyncWithHttpInfo($zip_codes_geo_zone_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteZipCodesGeoZoneByIdAsyncWithHttpInfo
     *
     * Delete ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteZipCodesGeoZoneByIdAsyncWithHttpInfo($zip_codes_geo_zone_id) 
    {
        $returnType = '';  
        $request = self::deleteZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id); 

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
     * Create request for operation 'deleteZipCodesGeoZoneById'
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id) 
    {
        // verify the required parameter 'zip_codes_geo_zone_id' is set
        if ($zip_codes_geo_zone_id === null || (is_array($zip_codes_geo_zone_id) && count($zip_codes_geo_zone_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zip_codes_geo_zone_id when calling deleteZipCodesGeoZoneById'
            );
        }

        $resourcePath = '/zipCodesGeoZones/{zipCodesGeoZoneId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($zip_codes_geo_zone_id !== null) {
            $resourcePath = str_replace(
                '{' . 'zipCodesGeoZoneId' . '}',
                ObjectSerializer::toPathValue($zip_codes_geo_zone_id),
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
     * Operation getZipCodesGeoZoneById
     *
     * Find ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\ZipCodesGeoZone
     */
    public static function getZipCodesGeoZoneById($zip_codes_geo_zone_id)
    {
        list($response) = self::getZipCodesGeoZoneByIdWithHttpInfo($zip_codes_geo_zone_id);
        return $response;
    }


    /**
     * Operation getZipCodesGeoZoneByIdWithHttpInfo
     *
     * Find ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\ZipCodesGeoZone, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getZipCodesGeoZoneByIdWithHttpInfo($zip_codes_geo_zone_id)
    {
        $returnType = '\Tradenity\SDK\Resources\ZipCodesGeoZone';  
        $request = self::getZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id); 

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
                        '\Tradenity\SDK\Resources\ZipCodesGeoZone',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getZipCodesGeoZoneByIdAsync
    *
    * Find ZipCodesGeoZone
    *
    * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getZipCodesGeoZoneByIdAsync($zip_codes_geo_zone_id)
    {
        return self::getZipCodesGeoZoneByIdAsyncWithHttpInfo($zip_codes_geo_zone_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getZipCodesGeoZoneByIdAsyncWithHttpInfo
     *
     * Find ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getZipCodesGeoZoneByIdAsyncWithHttpInfo($zip_codes_geo_zone_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\ZipCodesGeoZone';  
        $request = self::getZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id); 

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
     * Create request for operation 'getZipCodesGeoZoneById'
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id) 
    {
        // verify the required parameter 'zip_codes_geo_zone_id' is set
        if ($zip_codes_geo_zone_id === null || (is_array($zip_codes_geo_zone_id) && count($zip_codes_geo_zone_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zip_codes_geo_zone_id when calling getZipCodesGeoZoneById'
            );
        }

        $resourcePath = '/zipCodesGeoZones/{zipCodesGeoZoneId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($zip_codes_geo_zone_id !== null) {
            $resourcePath = str_replace(
                '{' . 'zipCodesGeoZoneId' . '}',
                ObjectSerializer::toPathValue($zip_codes_geo_zone_id),
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
    * Operation listAllZipCodesGeoZones
    *
    * List ZipCodesGeoZones
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\ZipCodesGeoZone[page]
    */
    public static function listAllZipCodesGeoZones(array $parameters = [])
    {
        list($response) = self::listAllZipCodesGeoZonesWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllZipCodesGeoZonesWithHttpInfo
     *
     * List ZipCodesGeoZones
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\ZipCodesGeoZone[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllZipCodesGeoZonesWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\ZipCodesGeoZone[page]'; 
        $request = self::listAllZipCodesGeoZonesRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\ZipCodesGeoZone[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllZipCodesGeoZonesAsync
     *
     * List ZipCodesGeoZones
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllZipCodesGeoZonesAsync(array $parameters = [])
    {
        return self::listAllZipCodesGeoZonesAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllZipCodesGeoZonesAsyncWithHttpInfo
     *
     * List ZipCodesGeoZones
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllZipCodesGeoZonesAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\ZipCodesGeoZone[page]'; 
        $request = self::listAllZipCodesGeoZonesRequest($parameters);  

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
     * Create request for operation 'listAllZipCodesGeoZones'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllZipCodesGeoZonesRequest(array $parameters = [])  
    {

        $resourcePath = '/zipCodesGeoZones';
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
     * Operation replaceZipCodesGeoZoneById
     *
     * Replace ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to replace (required)
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\ZipCodesGeoZone
     */
    public static function replaceZipCodesGeoZoneById($zip_codes_geo_zone_id, $zip_codes_geo_zone)
    {
        list($response) = self::replaceZipCodesGeoZoneByIdWithHttpInfo($zip_codes_geo_zone_id, $zip_codes_geo_zone);
        return $response;
    }


    /**
     * Operation replaceZipCodesGeoZoneByIdWithHttpInfo
     *
     * Replace ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to replace (required)
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\ZipCodesGeoZone, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceZipCodesGeoZoneByIdWithHttpInfo($zip_codes_geo_zone_id, $zip_codes_geo_zone)
    {
        $returnType = '\Tradenity\SDK\Resources\ZipCodesGeoZone';  
        $request = self::replaceZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id, $zip_codes_geo_zone); 

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
                        '\Tradenity\SDK\Resources\ZipCodesGeoZone',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceZipCodesGeoZoneByIdAsync
    *
    * Replace ZipCodesGeoZone
    *
    * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to replace (required)
    * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceZipCodesGeoZoneByIdAsync($zip_codes_geo_zone_id, $zip_codes_geo_zone)
    {
        return self::replaceZipCodesGeoZoneByIdAsyncWithHttpInfo($zip_codes_geo_zone_id, $zip_codes_geo_zone)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceZipCodesGeoZoneByIdAsyncWithHttpInfo
     *
     * Replace ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to replace (required)
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceZipCodesGeoZoneByIdAsyncWithHttpInfo($zip_codes_geo_zone_id, $zip_codes_geo_zone) 
    {
        $returnType = '\Tradenity\SDK\Resources\ZipCodesGeoZone';  
        $request = self::replaceZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id, $zip_codes_geo_zone); 

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
     * Create request for operation 'replaceZipCodesGeoZoneById'
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to replace (required)
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id, $zip_codes_geo_zone) 
    {
        // verify the required parameter 'zip_codes_geo_zone_id' is set
        if ($zip_codes_geo_zone_id === null || (is_array($zip_codes_geo_zone_id) && count($zip_codes_geo_zone_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zip_codes_geo_zone_id when calling replaceZipCodesGeoZoneById'
            );
        }
        // verify the required parameter 'zip_codes_geo_zone' is set
        if ($zip_codes_geo_zone === null || (is_array($zip_codes_geo_zone) && count($zip_codes_geo_zone) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zip_codes_geo_zone when calling replaceZipCodesGeoZoneById'
            );
        }

        $resourcePath = '/zipCodesGeoZones/{zipCodesGeoZoneId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($zip_codes_geo_zone_id !== null) {
            $resourcePath = str_replace(
                '{' . 'zipCodesGeoZoneId' . '}',
                ObjectSerializer::toPathValue($zip_codes_geo_zone_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($zip_codes_geo_zone)) {
            $_tempBody = $zip_codes_geo_zone;
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
     * Operation updateZipCodesGeoZoneById
     *
     * Update ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to update. (required)
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\ZipCodesGeoZone
     */
    public static function updateZipCodesGeoZoneById($zip_codes_geo_zone_id, $zip_codes_geo_zone)
    {
        list($response) = self::updateZipCodesGeoZoneByIdWithHttpInfo($zip_codes_geo_zone_id, $zip_codes_geo_zone);
        return $response;
    }


    /**
     * Operation updateZipCodesGeoZoneByIdWithHttpInfo
     *
     * Update ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to update. (required)
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\ZipCodesGeoZone, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateZipCodesGeoZoneByIdWithHttpInfo($zip_codes_geo_zone_id, $zip_codes_geo_zone)
    {
        $returnType = '\Tradenity\SDK\Resources\ZipCodesGeoZone';  
        $request = self::updateZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id, $zip_codes_geo_zone); 

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
                        '\Tradenity\SDK\Resources\ZipCodesGeoZone',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateZipCodesGeoZoneByIdAsync
    *
    * Update ZipCodesGeoZone
    *
    * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to update. (required)
    * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateZipCodesGeoZoneByIdAsync($zip_codes_geo_zone_id, $zip_codes_geo_zone)
    {
        return self::updateZipCodesGeoZoneByIdAsyncWithHttpInfo($zip_codes_geo_zone_id, $zip_codes_geo_zone)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateZipCodesGeoZoneByIdAsyncWithHttpInfo
     *
     * Update ZipCodesGeoZone
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to update. (required)
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateZipCodesGeoZoneByIdAsyncWithHttpInfo($zip_codes_geo_zone_id, $zip_codes_geo_zone) 
    {
        $returnType = '\Tradenity\SDK\Resources\ZipCodesGeoZone';  
        $request = self::updateZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id, $zip_codes_geo_zone); 

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
     * Create request for operation 'updateZipCodesGeoZoneById'
     *
     * @param  string $zip_codes_geo_zone_id ID of zipCodesGeoZone to update. (required)
     * @param  \Tradenity\SDK\Resources\ZipCodesGeoZone $zip_codes_geo_zone Attributes of zipCodesGeoZone to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateZipCodesGeoZoneByIdRequest($zip_codes_geo_zone_id, $zip_codes_geo_zone) 
    {
        // verify the required parameter 'zip_codes_geo_zone_id' is set
        if ($zip_codes_geo_zone_id === null || (is_array($zip_codes_geo_zone_id) && count($zip_codes_geo_zone_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zip_codes_geo_zone_id when calling updateZipCodesGeoZoneById'
            );
        }
        // verify the required parameter 'zip_codes_geo_zone' is set
        if ($zip_codes_geo_zone === null || (is_array($zip_codes_geo_zone) && count($zip_codes_geo_zone) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zip_codes_geo_zone when calling updateZipCodesGeoZoneById'
            );
        }

        $resourcePath = '/zipCodesGeoZones/{zipCodesGeoZoneId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($zip_codes_geo_zone_id !== null) {
            $resourcePath = str_replace(
                '{' . 'zipCodesGeoZoneId' . '}',
                ObjectSerializer::toPathValue($zip_codes_geo_zone_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($zip_codes_geo_zone)) {
            $_tempBody = $zip_codes_geo_zone;
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
