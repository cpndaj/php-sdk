<?php
/**
 * StoreProfile
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
 * StoreProfile Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class StoreProfile
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
    protected static $swaggerModelName = 'StoreProfile';

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
        'contact_info' => '\Tradenity\SDK\Resources\ContactInfo',
        'billing_info' => '\Tradenity\SDK\Resources\ContactInfo',
        'facebook' => 'string',
        'twitter' => 'string',
        'youtube' => 'string',
        'instagram' => 'string',
        'pinterest' => 'string',
        'linkedin' => 'string'
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
        'contact_info' => null,
        'billing_info' => null,
        'facebook' => null,
        'twitter' => null,
        'youtube' => null,
        'instagram' => null,
        'pinterest' => null,
        'linkedin' => null
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
        'contact_info' => 'contactInfo',
        'billing_info' => 'billingInfo',
        'facebook' => 'facebook',
        'twitter' => 'twitter',
        'youtube' => 'youtube',
        'instagram' => 'instagram',
        'pinterest' => 'pinterest',
        'linkedin' => 'linkedin'
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
        'contact_info' => 'setContactInfo',
        'billing_info' => 'setBillingInfo',
        'facebook' => 'setFacebook',
        'twitter' => 'setTwitter',
        'youtube' => 'setYoutube',
        'instagram' => 'setInstagram',
        'pinterest' => 'setPinterest',
        'linkedin' => 'setLinkedin'
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
        'contact_info' => 'getContactInfo',
        'billing_info' => 'getBillingInfo',
        'facebook' => 'getFacebook',
        'twitter' => 'getTwitter',
        'youtube' => 'getYoutube',
        'instagram' => 'getInstagram',
        'pinterest' => 'getPinterest',
        'linkedin' => 'getLinkedin'
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
        $this->container['contact_info'] = isset($data['contact_info']) ? $data['contact_info'] : null; 
        $this->container['contact_info'] = isset($data['contactInfo']) ? $data['contactInfo'] : null;
        $this->container['billing_info'] = isset($data['billing_info']) ? $data['billing_info'] : null; 
        $this->container['billing_info'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['facebook'] = isset($data['facebook']) ? $data['facebook'] : null; 
        $this->container['twitter'] = isset($data['twitter']) ? $data['twitter'] : null; 
        $this->container['youtube'] = isset($data['youtube']) ? $data['youtube'] : null; 
        $this->container['instagram'] = isset($data['instagram']) ? $data['instagram'] : null; 
        $this->container['pinterest'] = isset($data['pinterest']) ? $data['pinterest'] : null; 
        $this->container['linkedin'] = isset($data['linkedin']) ? $data['linkedin'] : null; 
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
     * Gets contact_info
     *
     * @return \Tradenity\SDK\Resources\ContactInfo
     */
    public function getContactInfo()
    {
        return $this->container['contact_info'];
    }

    /**
     * Sets contact_info
     *
     * @param \Tradenity\SDK\Resources\ContactInfo $contact_info contact_info
     *
     * @return $this
     */
    public function setContactInfo($contact_info)
    {
        /* */
        $this->container['contact_info'] = $contact_info;

        return $this;
    }

    /**
     * Gets billing_info
     *
     * @return \Tradenity\SDK\Resources\ContactInfo
     */
    public function getBillingInfo()
    {
        return $this->container['billing_info'];
    }

    /**
     * Sets billing_info
     *
     * @param \Tradenity\SDK\Resources\ContactInfo $billing_info billing_info
     *
     * @return $this
     */
    public function setBillingInfo($billing_info)
    {
        /* */
        $this->container['billing_info'] = $billing_info;

        return $this;
    }

    /**
     * Gets facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->container['facebook'];
    }

    /**
     * Sets facebook
     *
     * @param string $facebook facebook
     *
     * @return $this
     */
    public function setFacebook($facebook)
    {
        /* */
        $this->container['facebook'] = $facebook;

        return $this;
    }

    /**
     * Gets twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->container['twitter'];
    }

    /**
     * Sets twitter
     *
     * @param string $twitter twitter
     *
     * @return $this
     */
    public function setTwitter($twitter)
    {
        /* */
        $this->container['twitter'] = $twitter;

        return $this;
    }

    /**
     * Gets youtube
     *
     * @return string
     */
    public function getYoutube()
    {
        return $this->container['youtube'];
    }

    /**
     * Sets youtube
     *
     * @param string $youtube youtube
     *
     * @return $this
     */
    public function setYoutube($youtube)
    {
        /* */
        $this->container['youtube'] = $youtube;

        return $this;
    }

    /**
     * Gets instagram
     *
     * @return string
     */
    public function getInstagram()
    {
        return $this->container['instagram'];
    }

    /**
     * Sets instagram
     *
     * @param string $instagram instagram
     *
     * @return $this
     */
    public function setInstagram($instagram)
    {
        /* */
        $this->container['instagram'] = $instagram;

        return $this;
    }

    /**
     * Gets pinterest
     *
     * @return string
     */
    public function getPinterest()
    {
        return $this->container['pinterest'];
    }

    /**
     * Sets pinterest
     *
     * @param string $pinterest pinterest
     *
     * @return $this
     */
    public function setPinterest($pinterest)
    {
        /* */
        $this->container['pinterest'] = $pinterest;

        return $this;
    }

    /**
     * Gets linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->container['linkedin'];
    }

    /**
     * Sets linkedin
     *
     * @param string $linkedin linkedin
     *
     * @return $this
     */
    public function setLinkedin($linkedin)
    {
        /* */
        $this->container['linkedin'] = $linkedin;

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
     * Operation getStoreProfileById
     *
     * Find StoreProfile By ID
     *
     * @param  string $id ID of StoreProfile to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\StoreProfile
     */
    public static function findById($id)
    {
        return self::getStoreProfileById($id);
    }

    /**
    * Operation updateStoreProfileById
    *
    * Update StoreProfile
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\StoreProfile
    */
    public function update()
    {
        return self::updateStoreProfileById($this->getId(), $this);
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
     * Operation getStoreProfileById
     *
     * Find StoreProfile
     *
     * @param  string $store_profile_id ID of storeProfile to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\StoreProfile
     */
    public static function getStoreProfileById($store_profile_id)
    {
        list($response) = self::getStoreProfileByIdWithHttpInfo($store_profile_id);
        return $response;
    }


    /**
     * Operation getStoreProfileByIdWithHttpInfo
     *
     * Find StoreProfile
     *
     * @param  string $store_profile_id ID of storeProfile to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StoreProfile, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getStoreProfileByIdWithHttpInfo($store_profile_id)
    {
        $returnType = '\Tradenity\SDK\Resources\StoreProfile';  
        $request = self::getStoreProfileByIdRequest($store_profile_id); 

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
                        '\Tradenity\SDK\Resources\StoreProfile',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getStoreProfileByIdAsync
    *
    * Find StoreProfile
    *
    * @param  string $store_profile_id ID of storeProfile to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getStoreProfileByIdAsync($store_profile_id)
    {
        return self::getStoreProfileByIdAsyncWithHttpInfo($store_profile_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getStoreProfileByIdAsyncWithHttpInfo
     *
     * Find StoreProfile
     *
     * @param  string $store_profile_id ID of storeProfile to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getStoreProfileByIdAsyncWithHttpInfo($store_profile_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\StoreProfile';  
        $request = self::getStoreProfileByIdRequest($store_profile_id); 

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
     * Create request for operation 'getStoreProfileById'
     *
     * @param  string $store_profile_id ID of storeProfile to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getStoreProfileByIdRequest($store_profile_id) 
    {
        // verify the required parameter 'store_profile_id' is set
        if ($store_profile_id === null || (is_array($store_profile_id) && count($store_profile_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_profile_id when calling getStoreProfileById'
            );
        }

        $resourcePath = '/storeProfiles/{storeProfileId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($store_profile_id !== null) {
            $resourcePath = str_replace(
                '{' . 'storeProfileId' . '}',
                ObjectSerializer::toPathValue($store_profile_id),
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
     * Operation replaceStoreProfileById
     *
     * Replace StoreProfile
     *
     * @param  string $store_profile_id ID of storeProfile to replace (required)
     * @param  \Tradenity\SDK\Resources\StoreProfile $store_profile Attributes of storeProfile to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\StoreProfile
     */
    public static function replaceStoreProfileById($store_profile_id, $store_profile)
    {
        list($response) = self::replaceStoreProfileByIdWithHttpInfo($store_profile_id, $store_profile);
        return $response;
    }


    /**
     * Operation replaceStoreProfileByIdWithHttpInfo
     *
     * Replace StoreProfile
     *
     * @param  string $store_profile_id ID of storeProfile to replace (required)
     * @param  \Tradenity\SDK\Resources\StoreProfile $store_profile Attributes of storeProfile to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StoreProfile, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceStoreProfileByIdWithHttpInfo($store_profile_id, $store_profile)
    {
        $returnType = '\Tradenity\SDK\Resources\StoreProfile';  
        $request = self::replaceStoreProfileByIdRequest($store_profile_id, $store_profile); 

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
                        '\Tradenity\SDK\Resources\StoreProfile',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceStoreProfileByIdAsync
    *
    * Replace StoreProfile
    *
    * @param  string $store_profile_id ID of storeProfile to replace (required)
    * @param  \Tradenity\SDK\Resources\StoreProfile $store_profile Attributes of storeProfile to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceStoreProfileByIdAsync($store_profile_id, $store_profile)
    {
        return self::replaceStoreProfileByIdAsyncWithHttpInfo($store_profile_id, $store_profile)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceStoreProfileByIdAsyncWithHttpInfo
     *
     * Replace StoreProfile
     *
     * @param  string $store_profile_id ID of storeProfile to replace (required)
     * @param  \Tradenity\SDK\Resources\StoreProfile $store_profile Attributes of storeProfile to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceStoreProfileByIdAsyncWithHttpInfo($store_profile_id, $store_profile) 
    {
        $returnType = '\Tradenity\SDK\Resources\StoreProfile';  
        $request = self::replaceStoreProfileByIdRequest($store_profile_id, $store_profile); 

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
     * Create request for operation 'replaceStoreProfileById'
     *
     * @param  string $store_profile_id ID of storeProfile to replace (required)
     * @param  \Tradenity\SDK\Resources\StoreProfile $store_profile Attributes of storeProfile to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceStoreProfileByIdRequest($store_profile_id, $store_profile) 
    {
        // verify the required parameter 'store_profile_id' is set
        if ($store_profile_id === null || (is_array($store_profile_id) && count($store_profile_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_profile_id when calling replaceStoreProfileById'
            );
        }
        // verify the required parameter 'store_profile' is set
        if ($store_profile === null || (is_array($store_profile) && count($store_profile) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_profile when calling replaceStoreProfileById'
            );
        }

        $resourcePath = '/storeProfiles/{storeProfileId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($store_profile_id !== null) {
            $resourcePath = str_replace(
                '{' . 'storeProfileId' . '}',
                ObjectSerializer::toPathValue($store_profile_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($store_profile)) {
            $_tempBody = $store_profile;
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
     * Operation updateStoreProfileById
     *
     * Update StoreProfile
     *
     * @param  string $store_profile_id ID of storeProfile to update. (required)
     * @param  \Tradenity\SDK\Resources\StoreProfile $store_profile Attributes of storeProfile to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\StoreProfile
     */
    public static function updateStoreProfileById($store_profile_id, $store_profile)
    {
        list($response) = self::updateStoreProfileByIdWithHttpInfo($store_profile_id, $store_profile);
        return $response;
    }


    /**
     * Operation updateStoreProfileByIdWithHttpInfo
     *
     * Update StoreProfile
     *
     * @param  string $store_profile_id ID of storeProfile to update. (required)
     * @param  \Tradenity\SDK\Resources\StoreProfile $store_profile Attributes of storeProfile to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\StoreProfile, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateStoreProfileByIdWithHttpInfo($store_profile_id, $store_profile)
    {
        $returnType = '\Tradenity\SDK\Resources\StoreProfile';  
        $request = self::updateStoreProfileByIdRequest($store_profile_id, $store_profile); 

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
                        '\Tradenity\SDK\Resources\StoreProfile',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateStoreProfileByIdAsync
    *
    * Update StoreProfile
    *
    * @param  string $store_profile_id ID of storeProfile to update. (required)
    * @param  \Tradenity\SDK\Resources\StoreProfile $store_profile Attributes of storeProfile to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateStoreProfileByIdAsync($store_profile_id, $store_profile)
    {
        return self::updateStoreProfileByIdAsyncWithHttpInfo($store_profile_id, $store_profile)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateStoreProfileByIdAsyncWithHttpInfo
     *
     * Update StoreProfile
     *
     * @param  string $store_profile_id ID of storeProfile to update. (required)
     * @param  \Tradenity\SDK\Resources\StoreProfile $store_profile Attributes of storeProfile to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateStoreProfileByIdAsyncWithHttpInfo($store_profile_id, $store_profile) 
    {
        $returnType = '\Tradenity\SDK\Resources\StoreProfile';  
        $request = self::updateStoreProfileByIdRequest($store_profile_id, $store_profile); 

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
     * Create request for operation 'updateStoreProfileById'
     *
     * @param  string $store_profile_id ID of storeProfile to update. (required)
     * @param  \Tradenity\SDK\Resources\StoreProfile $store_profile Attributes of storeProfile to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateStoreProfileByIdRequest($store_profile_id, $store_profile) 
    {
        // verify the required parameter 'store_profile_id' is set
        if ($store_profile_id === null || (is_array($store_profile_id) && count($store_profile_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_profile_id when calling updateStoreProfileById'
            );
        }
        // verify the required parameter 'store_profile' is set
        if ($store_profile === null || (is_array($store_profile) && count($store_profile) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $store_profile when calling updateStoreProfileById'
            );
        }

        $resourcePath = '/storeProfiles/{storeProfileId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($store_profile_id !== null) {
            $resourcePath = str_replace(
                '{' . 'storeProfileId' . '}',
                ObjectSerializer::toPathValue($store_profile_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($store_profile)) {
            $_tempBody = $store_profile;
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
