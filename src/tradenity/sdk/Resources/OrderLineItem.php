<?php
/**
 * OrderLineItem
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
 * OrderLineItem Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class OrderLineItem
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
    protected static $swaggerModelName = 'OrderLineItem';

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
        'unit_price' => 'int',
        'quantity' => 'int',
        'product' => '\Tradenity\SDK\Resources\Product',
        'taxes' => '\Tradenity\SDK\Resources\TaxRate[]',
        'promotions' => '\Tradenity\SDK\Resources\Promotion[]',
        'subtotal' => 'int',
        'total' => 'int',
        'shipping_amount' => 'int',
        'tax_amount' => 'int',
        'discount_amount' => 'int',
        'order' => '\Tradenity\SDK\Resources\Order'
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
        'unit_price' => 'int32',
        'quantity' => 'int32',
        'product' => null,
        'taxes' => null,
        'promotions' => null,
        'subtotal' => 'int32',
        'total' => 'int32',
        'shipping_amount' => 'int32',
        'tax_amount' => 'int32',
        'discount_amount' => 'int32',
        'order' => null
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
        'unit_price' => 'unitPrice',
        'quantity' => 'quantity',
        'product' => 'product',
        'taxes' => 'taxes',
        'promotions' => 'promotions',
        'subtotal' => 'subtotal',
        'total' => 'total',
        'shipping_amount' => 'shippingAmount',
        'tax_amount' => 'taxAmount',
        'discount_amount' => 'discountAmount',
        'order' => 'order'
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
        'unit_price' => 'setUnitPrice',
        'quantity' => 'setQuantity',
        'product' => 'setProduct',
        'taxes' => 'setTaxes',
        'promotions' => 'setPromotions',
        'subtotal' => 'setSubtotal',
        'total' => 'setTotal',
        'shipping_amount' => 'setShippingAmount',
        'tax_amount' => 'setTaxAmount',
        'discount_amount' => 'setDiscountAmount',
        'order' => 'setOrder'
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
        'unit_price' => 'getUnitPrice',
        'quantity' => 'getQuantity',
        'product' => 'getProduct',
        'taxes' => 'getTaxes',
        'promotions' => 'getPromotions',
        'subtotal' => 'getSubtotal',
        'total' => 'getTotal',
        'shipping_amount' => 'getShippingAmount',
        'tax_amount' => 'getTaxAmount',
        'discount_amount' => 'getDiscountAmount',
        'order' => 'getOrder'
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
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null; 
        $this->container['unit_price'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null; 
        $this->container['product'] = isset($data['product']) ? $data['product'] : null; 
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null; 
        $this->container['promotions'] = isset($data['promotions']) ? $data['promotions'] : null; 
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null; 
        $this->container['total'] = isset($data['total']) ? $data['total'] : null; 
        $this->container['shipping_amount'] = isset($data['shipping_amount']) ? $data['shipping_amount'] : null; 
        $this->container['shipping_amount'] = isset($data['shippingAmount']) ? $data['shippingAmount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null; 
        $this->container['tax_amount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null; 
        $this->container['discount_amount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null; 
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
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
     * Gets unit_price
     *
     * @return int
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param int $unit_price unit_price
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        /* */
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        /* */
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Tradenity\SDK\Resources\Product
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Tradenity\SDK\Resources\Product $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        /* */
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \Tradenity\SDK\Resources\TaxRate[]
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \Tradenity\SDK\Resources\TaxRate[] $taxes taxes
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        /* */
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets promotions
     *
     * @return \Tradenity\SDK\Resources\Promotion[]
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \Tradenity\SDK\Resources\Promotion[] $promotions promotions
     *
     * @return $this
     */
    public function setPromotions($promotions)
    {
        /* */
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return int
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param int $subtotal subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        /* */
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        /* */
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets shipping_amount
     *
     * @return int
     */
    public function getShippingAmount()
    {
        return $this->container['shipping_amount'];
    }

    /**
     * Sets shipping_amount
     *
     * @param int $shipping_amount shipping_amount
     *
     * @return $this
     */
    public function setShippingAmount($shipping_amount)
    {
        /* */
        $this->container['shipping_amount'] = $shipping_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return int
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param int $tax_amount tax_amount
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        /* */
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return int
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param int $discount_amount discount_amount
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        /* */
        $this->container['discount_amount'] = $discount_amount;

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
     * List OrderLineItems
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[OrderLineItem]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllOrderLineItems(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllOrderLineItems();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllOrderLineItems($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllOrderLineItems($parameters)[0];
    }


    /**
     * Operation getOrderLineItemById
     *
     * Find OrderLineItem By ID
     *
     * @param  string $id ID of OrderLineItem to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\OrderLineItem
     */
    public static function findById($id)
    {
        return self::getOrderLineItemById($id);
    }

    /**
     * Operation create
     *
     * Create New OrderLineItem
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\OrderLineItem
     */
    public function create()
    {
        $instance = self::createOrderLineItem($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateOrderLineItemById
    *
    * Update OrderLineItem
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\OrderLineItem
    */
    public function update()
    {
        return self::updateOrderLineItemById($this->getId(), $this);
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
        self::deleteOrderLineItemById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete OrderLineItem By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteOrderLineItemById($id);
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
     * Operation createOrderLineItem
     *
     * Create OrderLineItem
     *
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\OrderLineItem
     */
    public static function createOrderLineItem($order_line_item)
    {
        list($response) = self::createOrderLineItemWithHttpInfo($order_line_item);
        return $response;
    }


    /**
     * Operation createOrderLineItemWithHttpInfo
     *
     * Create OrderLineItem
     *
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\OrderLineItem, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createOrderLineItemWithHttpInfo($order_line_item)
    {
        $returnType = '\Tradenity\SDK\Resources\OrderLineItem';  
        $request = self::createOrderLineItemRequest($order_line_item); 

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
                        '\Tradenity\SDK\Resources\OrderLineItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createOrderLineItemAsync
    *
    * Create OrderLineItem
    *
    * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createOrderLineItemAsync($order_line_item)
    {
        return self::createOrderLineItemAsyncWithHttpInfo($order_line_item)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createOrderLineItemAsyncWithHttpInfo
     *
     * Create OrderLineItem
     *
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createOrderLineItemAsyncWithHttpInfo($order_line_item) 
    {
        $returnType = '\Tradenity\SDK\Resources\OrderLineItem';  
        $request = self::createOrderLineItemRequest($order_line_item); 

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
     * Create request for operation 'createOrderLineItem'
     *
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createOrderLineItemRequest($order_line_item) 
    {
        // verify the required parameter 'order_line_item' is set
        if ($order_line_item === null || (is_array($order_line_item) && count($order_line_item) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_line_item when calling createOrderLineItem'
            );
        }

        $resourcePath = '/orderLineItems';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($order_line_item)) {
            $_tempBody = $order_line_item;
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
     * Operation deleteOrderLineItemById
     *
     * Delete OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteOrderLineItemById($order_line_item_id)
    {
        self::deleteOrderLineItemByIdWithHttpInfo($order_line_item_id);
    }


    /**
     * Operation deleteOrderLineItemByIdWithHttpInfo
     *
     * Delete OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteOrderLineItemByIdWithHttpInfo($order_line_item_id)
    {
        $returnType = '';  
        $request = self::deleteOrderLineItemByIdRequest($order_line_item_id); 

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
    * Operation deleteOrderLineItemByIdAsync
    *
    * Delete OrderLineItem
    *
    * @param  string $order_line_item_id ID of orderLineItem to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteOrderLineItemByIdAsync($order_line_item_id)
    {
        return self::deleteOrderLineItemByIdAsyncWithHttpInfo($order_line_item_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteOrderLineItemByIdAsyncWithHttpInfo
     *
     * Delete OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteOrderLineItemByIdAsyncWithHttpInfo($order_line_item_id) 
    {
        $returnType = '';  
        $request = self::deleteOrderLineItemByIdRequest($order_line_item_id); 

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
     * Create request for operation 'deleteOrderLineItemById'
     *
     * @param  string $order_line_item_id ID of orderLineItem to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteOrderLineItemByIdRequest($order_line_item_id) 
    {
        // verify the required parameter 'order_line_item_id' is set
        if ($order_line_item_id === null || (is_array($order_line_item_id) && count($order_line_item_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_line_item_id when calling deleteOrderLineItemById'
            );
        }

        $resourcePath = '/orderLineItems/{orderLineItemId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($order_line_item_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderLineItemId' . '}',
                ObjectSerializer::toPathValue($order_line_item_id),
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
     * Operation getOrderLineItemById
     *
     * Find OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\OrderLineItem
     */
    public static function getOrderLineItemById($order_line_item_id)
    {
        list($response) = self::getOrderLineItemByIdWithHttpInfo($order_line_item_id);
        return $response;
    }


    /**
     * Operation getOrderLineItemByIdWithHttpInfo
     *
     * Find OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\OrderLineItem, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getOrderLineItemByIdWithHttpInfo($order_line_item_id)
    {
        $returnType = '\Tradenity\SDK\Resources\OrderLineItem';  
        $request = self::getOrderLineItemByIdRequest($order_line_item_id); 

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
                        '\Tradenity\SDK\Resources\OrderLineItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getOrderLineItemByIdAsync
    *
    * Find OrderLineItem
    *
    * @param  string $order_line_item_id ID of orderLineItem to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getOrderLineItemByIdAsync($order_line_item_id)
    {
        return self::getOrderLineItemByIdAsyncWithHttpInfo($order_line_item_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getOrderLineItemByIdAsyncWithHttpInfo
     *
     * Find OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getOrderLineItemByIdAsyncWithHttpInfo($order_line_item_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\OrderLineItem';  
        $request = self::getOrderLineItemByIdRequest($order_line_item_id); 

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
     * Create request for operation 'getOrderLineItemById'
     *
     * @param  string $order_line_item_id ID of orderLineItem to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getOrderLineItemByIdRequest($order_line_item_id) 
    {
        // verify the required parameter 'order_line_item_id' is set
        if ($order_line_item_id === null || (is_array($order_line_item_id) && count($order_line_item_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_line_item_id when calling getOrderLineItemById'
            );
        }

        $resourcePath = '/orderLineItems/{orderLineItemId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($order_line_item_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderLineItemId' . '}',
                ObjectSerializer::toPathValue($order_line_item_id),
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
    * Operation listAllOrderLineItems
    *
    * List OrderLineItems
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\OrderLineItem[page]
    */
    public static function listAllOrderLineItems(array $parameters = [])
    {
        list($response) = self::listAllOrderLineItemsWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllOrderLineItemsWithHttpInfo
     *
     * List OrderLineItems
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\OrderLineItem[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllOrderLineItemsWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\OrderLineItem[page]'; 
        $request = self::listAllOrderLineItemsRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\OrderLineItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllOrderLineItemsAsync
     *
     * List OrderLineItems
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllOrderLineItemsAsync(array $parameters = [])
    {
        return self::listAllOrderLineItemsAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllOrderLineItemsAsyncWithHttpInfo
     *
     * List OrderLineItems
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllOrderLineItemsAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\OrderLineItem[page]'; 
        $request = self::listAllOrderLineItemsRequest($parameters);  

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
     * Create request for operation 'listAllOrderLineItems'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllOrderLineItemsRequest(array $parameters = [])  
    {

        $resourcePath = '/orderLineItems';
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
     * Operation replaceOrderLineItemById
     *
     * Replace OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to replace (required)
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\OrderLineItem
     */
    public static function replaceOrderLineItemById($order_line_item_id, $order_line_item)
    {
        list($response) = self::replaceOrderLineItemByIdWithHttpInfo($order_line_item_id, $order_line_item);
        return $response;
    }


    /**
     * Operation replaceOrderLineItemByIdWithHttpInfo
     *
     * Replace OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to replace (required)
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\OrderLineItem, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceOrderLineItemByIdWithHttpInfo($order_line_item_id, $order_line_item)
    {
        $returnType = '\Tradenity\SDK\Resources\OrderLineItem';  
        $request = self::replaceOrderLineItemByIdRequest($order_line_item_id, $order_line_item); 

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
                        '\Tradenity\SDK\Resources\OrderLineItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceOrderLineItemByIdAsync
    *
    * Replace OrderLineItem
    *
    * @param  string $order_line_item_id ID of orderLineItem to replace (required)
    * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceOrderLineItemByIdAsync($order_line_item_id, $order_line_item)
    {
        return self::replaceOrderLineItemByIdAsyncWithHttpInfo($order_line_item_id, $order_line_item)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceOrderLineItemByIdAsyncWithHttpInfo
     *
     * Replace OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to replace (required)
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceOrderLineItemByIdAsyncWithHttpInfo($order_line_item_id, $order_line_item) 
    {
        $returnType = '\Tradenity\SDK\Resources\OrderLineItem';  
        $request = self::replaceOrderLineItemByIdRequest($order_line_item_id, $order_line_item); 

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
     * Create request for operation 'replaceOrderLineItemById'
     *
     * @param  string $order_line_item_id ID of orderLineItem to replace (required)
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceOrderLineItemByIdRequest($order_line_item_id, $order_line_item) 
    {
        // verify the required parameter 'order_line_item_id' is set
        if ($order_line_item_id === null || (is_array($order_line_item_id) && count($order_line_item_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_line_item_id when calling replaceOrderLineItemById'
            );
        }
        // verify the required parameter 'order_line_item' is set
        if ($order_line_item === null || (is_array($order_line_item) && count($order_line_item) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_line_item when calling replaceOrderLineItemById'
            );
        }

        $resourcePath = '/orderLineItems/{orderLineItemId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($order_line_item_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderLineItemId' . '}',
                ObjectSerializer::toPathValue($order_line_item_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($order_line_item)) {
            $_tempBody = $order_line_item;
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
     * Operation updateOrderLineItemById
     *
     * Update OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to update. (required)
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\OrderLineItem
     */
    public static function updateOrderLineItemById($order_line_item_id, $order_line_item)
    {
        list($response) = self::updateOrderLineItemByIdWithHttpInfo($order_line_item_id, $order_line_item);
        return $response;
    }


    /**
     * Operation updateOrderLineItemByIdWithHttpInfo
     *
     * Update OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to update. (required)
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\OrderLineItem, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateOrderLineItemByIdWithHttpInfo($order_line_item_id, $order_line_item)
    {
        $returnType = '\Tradenity\SDK\Resources\OrderLineItem';  
        $request = self::updateOrderLineItemByIdRequest($order_line_item_id, $order_line_item); 

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
                        '\Tradenity\SDK\Resources\OrderLineItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateOrderLineItemByIdAsync
    *
    * Update OrderLineItem
    *
    * @param  string $order_line_item_id ID of orderLineItem to update. (required)
    * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateOrderLineItemByIdAsync($order_line_item_id, $order_line_item)
    {
        return self::updateOrderLineItemByIdAsyncWithHttpInfo($order_line_item_id, $order_line_item)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateOrderLineItemByIdAsyncWithHttpInfo
     *
     * Update OrderLineItem
     *
     * @param  string $order_line_item_id ID of orderLineItem to update. (required)
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateOrderLineItemByIdAsyncWithHttpInfo($order_line_item_id, $order_line_item) 
    {
        $returnType = '\Tradenity\SDK\Resources\OrderLineItem';  
        $request = self::updateOrderLineItemByIdRequest($order_line_item_id, $order_line_item); 

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
     * Create request for operation 'updateOrderLineItemById'
     *
     * @param  string $order_line_item_id ID of orderLineItem to update. (required)
     * @param  \Tradenity\SDK\Resources\OrderLineItem $order_line_item Attributes of orderLineItem to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateOrderLineItemByIdRequest($order_line_item_id, $order_line_item) 
    {
        // verify the required parameter 'order_line_item_id' is set
        if ($order_line_item_id === null || (is_array($order_line_item_id) && count($order_line_item_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_line_item_id when calling updateOrderLineItemById'
            );
        }
        // verify the required parameter 'order_line_item' is set
        if ($order_line_item === null || (is_array($order_line_item) && count($order_line_item) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_line_item when calling updateOrderLineItemById'
            );
        }

        $resourcePath = '/orderLineItems/{orderLineItemId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($order_line_item_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderLineItemId' . '}',
                ObjectSerializer::toPathValue($order_line_item_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($order_line_item)) {
            $_tempBody = $order_line_item;
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
