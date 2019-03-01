<?php
/**
 * FreeShippingPromotion
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
 * FreeShippingPromotion Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class FreeShippingPromotion
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
    protected static $swaggerModelName = 'FreeShippingPromotion';

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
        'begins_at' => '\DateTime',
        'ends_at' => '\DateTime',
        'include' => '\Tradenity\SDK\Resources\ItemsSelector'
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
        'begins_at' => 'date-time',
        'ends_at' => 'date-time',
        'include' => null
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
        'begins_at' => 'beginsAt',
        'ends_at' => 'endsAt',
        'include' => 'include'
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
        'begins_at' => 'setBeginsAt',
        'ends_at' => 'setEndsAt',
        'include' => 'setInclude'
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
        'begins_at' => 'getBeginsAt',
        'ends_at' => 'getEndsAt',
        'include' => 'getInclude'
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
        $this->container['begins_at'] = isset($data['begins_at']) ? $data['begins_at'] : null; 
        $this->container['begins_at'] = isset($data['beginsAt']) ? $data['beginsAt'] : null;
        $this->container['ends_at'] = isset($data['ends_at']) ? $data['ends_at'] : null; 
        $this->container['ends_at'] = isset($data['endsAt']) ? $data['endsAt'] : null;
        $this->container['include'] = isset($data['include']) ? $data['include'] : null; 
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
     * List FreeShippingPromotions
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[FreeShippingPromotion]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllFreeShippingPromotions(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllFreeShippingPromotions();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllFreeShippingPromotions($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllFreeShippingPromotions($parameters)[0];
    }


    /**
     * Operation getFreeShippingPromotionById
     *
     * Find FreeShippingPromotion By ID
     *
     * @param  string $id ID of FreeShippingPromotion to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\FreeShippingPromotion
     */
    public static function findById($id)
    {
        return self::getFreeShippingPromotionById($id);
    }

    /**
     * Operation create
     *
     * Create New FreeShippingPromotion
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\FreeShippingPromotion
     */
    public function create()
    {
        $instance = self::createFreeShippingPromotion($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateFreeShippingPromotionById
    *
    * Update FreeShippingPromotion
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\FreeShippingPromotion
    */
    public function update()
    {
        return self::updateFreeShippingPromotionById($this->getId(), $this);
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
        self::deleteFreeShippingPromotionById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete FreeShippingPromotion By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteFreeShippingPromotionById($id);
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
     * Operation createFreeShippingPromotion
     *
     * Create FreeShippingPromotion
     *
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShippingPromotion
     */
    public static function createFreeShippingPromotion($free_shipping_promotion)
    {
        list($response) = self::createFreeShippingPromotionWithHttpInfo($free_shipping_promotion);
        return $response;
    }


    /**
     * Operation createFreeShippingPromotionWithHttpInfo
     *
     * Create FreeShippingPromotion
     *
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShippingPromotion, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createFreeShippingPromotionWithHttpInfo($free_shipping_promotion)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingPromotion';  
        $request = self::createFreeShippingPromotionRequest($free_shipping_promotion); 

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
                        '\Tradenity\SDK\Resources\FreeShippingPromotion',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createFreeShippingPromotionAsync
    *
    * Create FreeShippingPromotion
    *
    * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createFreeShippingPromotionAsync($free_shipping_promotion)
    {
        return self::createFreeShippingPromotionAsyncWithHttpInfo($free_shipping_promotion)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createFreeShippingPromotionAsyncWithHttpInfo
     *
     * Create FreeShippingPromotion
     *
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createFreeShippingPromotionAsyncWithHttpInfo($free_shipping_promotion) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingPromotion';  
        $request = self::createFreeShippingPromotionRequest($free_shipping_promotion); 

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
     * Create request for operation 'createFreeShippingPromotion'
     *
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createFreeShippingPromotionRequest($free_shipping_promotion) 
    {
        // verify the required parameter 'free_shipping_promotion' is set
        if ($free_shipping_promotion === null || (is_array($free_shipping_promotion) && count($free_shipping_promotion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_promotion when calling createFreeShippingPromotion'
            );
        }

        $resourcePath = '/freeShippingPromotions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($free_shipping_promotion)) {
            $_tempBody = $free_shipping_promotion;
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
     * Operation deleteFreeShippingPromotionById
     *
     * Delete FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteFreeShippingPromotionById($free_shipping_promotion_id)
    {
        self::deleteFreeShippingPromotionByIdWithHttpInfo($free_shipping_promotion_id);
    }


    /**
     * Operation deleteFreeShippingPromotionByIdWithHttpInfo
     *
     * Delete FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteFreeShippingPromotionByIdWithHttpInfo($free_shipping_promotion_id)
    {
        $returnType = '';  
        $request = self::deleteFreeShippingPromotionByIdRequest($free_shipping_promotion_id); 

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
    * Operation deleteFreeShippingPromotionByIdAsync
    *
    * Delete FreeShippingPromotion
    *
    * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteFreeShippingPromotionByIdAsync($free_shipping_promotion_id)
    {
        return self::deleteFreeShippingPromotionByIdAsyncWithHttpInfo($free_shipping_promotion_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteFreeShippingPromotionByIdAsyncWithHttpInfo
     *
     * Delete FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteFreeShippingPromotionByIdAsyncWithHttpInfo($free_shipping_promotion_id) 
    {
        $returnType = '';  
        $request = self::deleteFreeShippingPromotionByIdRequest($free_shipping_promotion_id); 

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
     * Create request for operation 'deleteFreeShippingPromotionById'
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteFreeShippingPromotionByIdRequest($free_shipping_promotion_id) 
    {
        // verify the required parameter 'free_shipping_promotion_id' is set
        if ($free_shipping_promotion_id === null || (is_array($free_shipping_promotion_id) && count($free_shipping_promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_promotion_id when calling deleteFreeShippingPromotionById'
            );
        }

        $resourcePath = '/freeShippingPromotions/{freeShippingPromotionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_promotion_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingPromotionId' . '}',
                ObjectSerializer::toPathValue($free_shipping_promotion_id),
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
     * Operation getFreeShippingPromotionById
     *
     * Find FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShippingPromotion
     */
    public static function getFreeShippingPromotionById($free_shipping_promotion_id)
    {
        list($response) = self::getFreeShippingPromotionByIdWithHttpInfo($free_shipping_promotion_id);
        return $response;
    }


    /**
     * Operation getFreeShippingPromotionByIdWithHttpInfo
     *
     * Find FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShippingPromotion, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getFreeShippingPromotionByIdWithHttpInfo($free_shipping_promotion_id)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingPromotion';  
        $request = self::getFreeShippingPromotionByIdRequest($free_shipping_promotion_id); 

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
                        '\Tradenity\SDK\Resources\FreeShippingPromotion',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getFreeShippingPromotionByIdAsync
    *
    * Find FreeShippingPromotion
    *
    * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getFreeShippingPromotionByIdAsync($free_shipping_promotion_id)
    {
        return self::getFreeShippingPromotionByIdAsyncWithHttpInfo($free_shipping_promotion_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getFreeShippingPromotionByIdAsyncWithHttpInfo
     *
     * Find FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getFreeShippingPromotionByIdAsyncWithHttpInfo($free_shipping_promotion_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingPromotion';  
        $request = self::getFreeShippingPromotionByIdRequest($free_shipping_promotion_id); 

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
     * Create request for operation 'getFreeShippingPromotionById'
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getFreeShippingPromotionByIdRequest($free_shipping_promotion_id) 
    {
        // verify the required parameter 'free_shipping_promotion_id' is set
        if ($free_shipping_promotion_id === null || (is_array($free_shipping_promotion_id) && count($free_shipping_promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_promotion_id when calling getFreeShippingPromotionById'
            );
        }

        $resourcePath = '/freeShippingPromotions/{freeShippingPromotionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_promotion_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingPromotionId' . '}',
                ObjectSerializer::toPathValue($free_shipping_promotion_id),
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
    * Operation listAllFreeShippingPromotions
    *
    * List FreeShippingPromotions
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\FreeShippingPromotion[page]
    */
    public static function listAllFreeShippingPromotions(array $parameters = [])
    {
        list($response) = self::listAllFreeShippingPromotionsWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllFreeShippingPromotionsWithHttpInfo
     *
     * List FreeShippingPromotions
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShippingPromotion[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllFreeShippingPromotionsWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingPromotion[page]'; 
        $request = self::listAllFreeShippingPromotionsRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\FreeShippingPromotion[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllFreeShippingPromotionsAsync
     *
     * List FreeShippingPromotions
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllFreeShippingPromotionsAsync(array $parameters = [])
    {
        return self::listAllFreeShippingPromotionsAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllFreeShippingPromotionsAsyncWithHttpInfo
     *
     * List FreeShippingPromotions
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllFreeShippingPromotionsAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingPromotion[page]'; 
        $request = self::listAllFreeShippingPromotionsRequest($parameters);  

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
     * Create request for operation 'listAllFreeShippingPromotions'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllFreeShippingPromotionsRequest(array $parameters = [])  
    {

        $resourcePath = '/freeShippingPromotions';
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
     * Operation replaceFreeShippingPromotionById
     *
     * Replace FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShippingPromotion
     */
    public static function replaceFreeShippingPromotionById($free_shipping_promotion_id, $free_shipping_promotion)
    {
        list($response) = self::replaceFreeShippingPromotionByIdWithHttpInfo($free_shipping_promotion_id, $free_shipping_promotion);
        return $response;
    }


    /**
     * Operation replaceFreeShippingPromotionByIdWithHttpInfo
     *
     * Replace FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShippingPromotion, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceFreeShippingPromotionByIdWithHttpInfo($free_shipping_promotion_id, $free_shipping_promotion)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingPromotion';  
        $request = self::replaceFreeShippingPromotionByIdRequest($free_shipping_promotion_id, $free_shipping_promotion); 

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
                        '\Tradenity\SDK\Resources\FreeShippingPromotion',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceFreeShippingPromotionByIdAsync
    *
    * Replace FreeShippingPromotion
    *
    * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to replace (required)
    * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceFreeShippingPromotionByIdAsync($free_shipping_promotion_id, $free_shipping_promotion)
    {
        return self::replaceFreeShippingPromotionByIdAsyncWithHttpInfo($free_shipping_promotion_id, $free_shipping_promotion)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceFreeShippingPromotionByIdAsyncWithHttpInfo
     *
     * Replace FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceFreeShippingPromotionByIdAsyncWithHttpInfo($free_shipping_promotion_id, $free_shipping_promotion) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingPromotion';  
        $request = self::replaceFreeShippingPromotionByIdRequest($free_shipping_promotion_id, $free_shipping_promotion); 

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
     * Create request for operation 'replaceFreeShippingPromotionById'
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to replace (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceFreeShippingPromotionByIdRequest($free_shipping_promotion_id, $free_shipping_promotion) 
    {
        // verify the required parameter 'free_shipping_promotion_id' is set
        if ($free_shipping_promotion_id === null || (is_array($free_shipping_promotion_id) && count($free_shipping_promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_promotion_id when calling replaceFreeShippingPromotionById'
            );
        }
        // verify the required parameter 'free_shipping_promotion' is set
        if ($free_shipping_promotion === null || (is_array($free_shipping_promotion) && count($free_shipping_promotion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_promotion when calling replaceFreeShippingPromotionById'
            );
        }

        $resourcePath = '/freeShippingPromotions/{freeShippingPromotionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_promotion_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingPromotionId' . '}',
                ObjectSerializer::toPathValue($free_shipping_promotion_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($free_shipping_promotion)) {
            $_tempBody = $free_shipping_promotion;
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
     * Operation updateFreeShippingPromotionById
     *
     * Update FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\FreeShippingPromotion
     */
    public static function updateFreeShippingPromotionById($free_shipping_promotion_id, $free_shipping_promotion)
    {
        list($response) = self::updateFreeShippingPromotionByIdWithHttpInfo($free_shipping_promotion_id, $free_shipping_promotion);
        return $response;
    }


    /**
     * Operation updateFreeShippingPromotionByIdWithHttpInfo
     *
     * Update FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\FreeShippingPromotion, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateFreeShippingPromotionByIdWithHttpInfo($free_shipping_promotion_id, $free_shipping_promotion)
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingPromotion';  
        $request = self::updateFreeShippingPromotionByIdRequest($free_shipping_promotion_id, $free_shipping_promotion); 

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
                        '\Tradenity\SDK\Resources\FreeShippingPromotion',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateFreeShippingPromotionByIdAsync
    *
    * Update FreeShippingPromotion
    *
    * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to update. (required)
    * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateFreeShippingPromotionByIdAsync($free_shipping_promotion_id, $free_shipping_promotion)
    {
        return self::updateFreeShippingPromotionByIdAsyncWithHttpInfo($free_shipping_promotion_id, $free_shipping_promotion)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateFreeShippingPromotionByIdAsyncWithHttpInfo
     *
     * Update FreeShippingPromotion
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateFreeShippingPromotionByIdAsyncWithHttpInfo($free_shipping_promotion_id, $free_shipping_promotion) 
    {
        $returnType = '\Tradenity\SDK\Resources\FreeShippingPromotion';  
        $request = self::updateFreeShippingPromotionByIdRequest($free_shipping_promotion_id, $free_shipping_promotion); 

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
     * Create request for operation 'updateFreeShippingPromotionById'
     *
     * @param  string $free_shipping_promotion_id ID of freeShippingPromotion to update. (required)
     * @param  \Tradenity\SDK\Resources\FreeShippingPromotion $free_shipping_promotion Attributes of freeShippingPromotion to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateFreeShippingPromotionByIdRequest($free_shipping_promotion_id, $free_shipping_promotion) 
    {
        // verify the required parameter 'free_shipping_promotion_id' is set
        if ($free_shipping_promotion_id === null || (is_array($free_shipping_promotion_id) && count($free_shipping_promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_promotion_id when calling updateFreeShippingPromotionById'
            );
        }
        // verify the required parameter 'free_shipping_promotion' is set
        if ($free_shipping_promotion === null || (is_array($free_shipping_promotion) && count($free_shipping_promotion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $free_shipping_promotion when calling updateFreeShippingPromotionById'
            );
        }

        $resourcePath = '/freeShippingPromotions/{freeShippingPromotionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($free_shipping_promotion_id !== null) {
            $resourcePath = str_replace(
                '{' . 'freeShippingPromotionId' . '}',
                ObjectSerializer::toPathValue($free_shipping_promotion_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($free_shipping_promotion)) {
            $_tempBody = $free_shipping_promotion;
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
