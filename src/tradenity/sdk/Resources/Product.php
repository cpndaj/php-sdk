<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Tradenity team
 * @link     https://github.com/tradenity
 */
class Product
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
    protected static $swaggerModelName = 'Product';

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
        'model' => 'string',
        'status' => 'string',
        'type' => 'string',
        'short_description' => 'string',
        'full_description' => 'string',
        'free_shipping' => 'bool',
        'sku' => 'string',
        'price' => 'int',
        'cost_price' => 'int',
        'retail_price' => 'int',
        'sale_price' => 'int',
        'manage_inventory' => 'bool',
        'stock_level' => 'int',
        'minimum_stock_level' => 'int',
        'maximum_sell_count' => 'int',
        'item_dimensions' => '\Tradenity\SDK\Resources\Dimensions',
        'package_dimensions' => '\Tradenity\SDK\Resources\Dimensions',
        'package_weight' => '\Tradenity\SDK\Resources\Weight',
        'require_shipping' => 'bool',
        'availability' => 'string',
        'availability_date' => '\DateTime',
        'allow_pre_order' => 'bool',
        'brand' => '\Tradenity\SDK\Resources\Brand',
        'main_photo' => '\Tradenity\SDK\Resources\Photo',
        'photos' => '\Tradenity\SDK\Resources\Photo[]',
        'files' => '\Tradenity\SDK\Resources\StorageFile[]',
        'promotions' => '\Tradenity\SDK\Resources\Promotion[]',
        'related_products' => '\Tradenity\SDK\Resources\Product[]',
        'stock_status' => 'string',
        'categories' => '\Tradenity\SDK\Resources\Category[]',
        'tax_class' => '\Tradenity\SDK\Resources\TaxClass',
        'option_set' => '\Tradenity\SDK\Resources\OptionSet',
        'variants' => '\Tradenity\SDK\Resources\Variant[]'
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
        'model' => null,
        'status' => null,
        'type' => null,
        'short_description' => null,
        'full_description' => null,
        'free_shipping' => null,
        'sku' => null,
        'price' => 'int32',
        'cost_price' => 'int32',
        'retail_price' => 'int32',
        'sale_price' => 'int32',
        'manage_inventory' => null,
        'stock_level' => 'int32',
        'minimum_stock_level' => 'int32',
        'maximum_sell_count' => 'int32',
        'item_dimensions' => null,
        'package_dimensions' => null,
        'package_weight' => null,
        'require_shipping' => null,
        'availability' => null,
        'availability_date' => 'date',
        'allow_pre_order' => null,
        'brand' => null,
        'main_photo' => null,
        'photos' => null,
        'files' => null,
        'promotions' => null,
        'related_products' => null,
        'stock_status' => null,
        'categories' => null,
        'tax_class' => null,
        'option_set' => null,
        'variants' => null
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
        'model' => 'model',
        'status' => 'status',
        'type' => 'type',
        'short_description' => 'shortDescription',
        'full_description' => 'fullDescription',
        'free_shipping' => 'freeShipping',
        'sku' => 'sku',
        'price' => 'price',
        'cost_price' => 'costPrice',
        'retail_price' => 'retailPrice',
        'sale_price' => 'salePrice',
        'manage_inventory' => 'manageInventory',
        'stock_level' => 'stockLevel',
        'minimum_stock_level' => 'minimumStockLevel',
        'maximum_sell_count' => 'maximumSellCount',
        'item_dimensions' => 'itemDimensions',
        'package_dimensions' => 'packageDimensions',
        'package_weight' => 'packageWeight',
        'require_shipping' => 'requireShipping',
        'availability' => 'availability',
        'availability_date' => 'availabilityDate',
        'allow_pre_order' => 'allowPreOrder',
        'brand' => 'brand',
        'main_photo' => 'mainPhoto',
        'photos' => 'photos',
        'files' => 'files',
        'promotions' => 'promotions',
        'related_products' => 'relatedProducts',
        'stock_status' => 'stockStatus',
        'categories' => 'categories',
        'tax_class' => 'taxClass',
        'option_set' => 'optionSet',
        'variants' => 'variants'
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
        'model' => 'setModel',
        'status' => 'setStatus',
        'type' => 'setType',
        'short_description' => 'setShortDescription',
        'full_description' => 'setFullDescription',
        'free_shipping' => 'setFreeShipping',
        'sku' => 'setSku',
        'price' => 'setPrice',
        'cost_price' => 'setCostPrice',
        'retail_price' => 'setRetailPrice',
        'sale_price' => 'setSalePrice',
        'manage_inventory' => 'setManageInventory',
        'stock_level' => 'setStockLevel',
        'minimum_stock_level' => 'setMinimumStockLevel',
        'maximum_sell_count' => 'setMaximumSellCount',
        'item_dimensions' => 'setItemDimensions',
        'package_dimensions' => 'setPackageDimensions',
        'package_weight' => 'setPackageWeight',
        'require_shipping' => 'setRequireShipping',
        'availability' => 'setAvailability',
        'availability_date' => 'setAvailabilityDate',
        'allow_pre_order' => 'setAllowPreOrder',
        'brand' => 'setBrand',
        'main_photo' => 'setMainPhoto',
        'photos' => 'setPhotos',
        'files' => 'setFiles',
        'promotions' => 'setPromotions',
        'related_products' => 'setRelatedProducts',
        'stock_status' => 'setStockStatus',
        'categories' => 'setCategories',
        'tax_class' => 'setTaxClass',
        'option_set' => 'setOptionSet',
        'variants' => 'setVariants'
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
        'model' => 'getModel',
        'status' => 'getStatus',
        'type' => 'getType',
        'short_description' => 'getShortDescription',
        'full_description' => 'getFullDescription',
        'free_shipping' => 'getFreeShipping',
        'sku' => 'getSku',
        'price' => 'getPrice',
        'cost_price' => 'getCostPrice',
        'retail_price' => 'getRetailPrice',
        'sale_price' => 'getSalePrice',
        'manage_inventory' => 'getManageInventory',
        'stock_level' => 'getStockLevel',
        'minimum_stock_level' => 'getMinimumStockLevel',
        'maximum_sell_count' => 'getMaximumSellCount',
        'item_dimensions' => 'getItemDimensions',
        'package_dimensions' => 'getPackageDimensions',
        'package_weight' => 'getPackageWeight',
        'require_shipping' => 'getRequireShipping',
        'availability' => 'getAvailability',
        'availability_date' => 'getAvailabilityDate',
        'allow_pre_order' => 'getAllowPreOrder',
        'brand' => 'getBrand',
        'main_photo' => 'getMainPhoto',
        'photos' => 'getPhotos',
        'files' => 'getFiles',
        'promotions' => 'getPromotions',
        'related_products' => 'getRelatedProducts',
        'stock_status' => 'getStockStatus',
        'categories' => 'getCategories',
        'tax_class' => 'getTaxClass',
        'option_set' => 'getOptionSet',
        'variants' => 'getVariants'
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
    public function getAvailabilityAllowableValues()
    {
        return [
            
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStockStatusAllowableValues()
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
        $this->container['model'] = isset($data['model']) ? $data['model'] : null; 
        $this->container['status'] = isset($data['status']) ? $data['status'] : null; 
        $this->container['type'] = isset($data['type']) ? $data['type'] : null; 
        $this->container['short_description'] = isset($data['short_description']) ? $data['short_description'] : null; 
        $this->container['short_description'] = isset($data['shortDescription']) ? $data['shortDescription'] : null;
        $this->container['full_description'] = isset($data['full_description']) ? $data['full_description'] : null; 
        $this->container['full_description'] = isset($data['fullDescription']) ? $data['fullDescription'] : null;
        $this->container['free_shipping'] = isset($data['free_shipping']) ? $data['free_shipping'] : null; 
        $this->container['free_shipping'] = isset($data['freeShipping']) ? $data['freeShipping'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null; 
        $this->container['price'] = isset($data['price']) ? $data['price'] : null; 
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null; 
        $this->container['cost_price'] = isset($data['costPrice']) ? $data['costPrice'] : null;
        $this->container['retail_price'] = isset($data['retail_price']) ? $data['retail_price'] : null; 
        $this->container['retail_price'] = isset($data['retailPrice']) ? $data['retailPrice'] : null;
        $this->container['sale_price'] = isset($data['sale_price']) ? $data['sale_price'] : null; 
        $this->container['sale_price'] = isset($data['salePrice']) ? $data['salePrice'] : null;
        $this->container['manage_inventory'] = isset($data['manage_inventory']) ? $data['manage_inventory'] : null; 
        $this->container['manage_inventory'] = isset($data['manageInventory']) ? $data['manageInventory'] : null;
        $this->container['stock_level'] = isset($data['stock_level']) ? $data['stock_level'] : null; 
        $this->container['stock_level'] = isset($data['stockLevel']) ? $data['stockLevel'] : null;
        $this->container['minimum_stock_level'] = isset($data['minimum_stock_level']) ? $data['minimum_stock_level'] : null; 
        $this->container['minimum_stock_level'] = isset($data['minimumStockLevel']) ? $data['minimumStockLevel'] : null;
        $this->container['maximum_sell_count'] = isset($data['maximum_sell_count']) ? $data['maximum_sell_count'] : null; 
        $this->container['maximum_sell_count'] = isset($data['maximumSellCount']) ? $data['maximumSellCount'] : null;
        $this->container['item_dimensions'] = isset($data['item_dimensions']) ? $data['item_dimensions'] : null; 
        $this->container['item_dimensions'] = isset($data['itemDimensions']) ? $data['itemDimensions'] : null;
        $this->container['package_dimensions'] = isset($data['package_dimensions']) ? $data['package_dimensions'] : null; 
        $this->container['package_dimensions'] = isset($data['packageDimensions']) ? $data['packageDimensions'] : null;
        $this->container['package_weight'] = isset($data['package_weight']) ? $data['package_weight'] : null; 
        $this->container['package_weight'] = isset($data['packageWeight']) ? $data['packageWeight'] : null;
        $this->container['require_shipping'] = isset($data['require_shipping']) ? $data['require_shipping'] : null; 
        $this->container['require_shipping'] = isset($data['requireShipping']) ? $data['requireShipping'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null; 
        $this->container['availability_date'] = isset($data['availability_date']) ? $data['availability_date'] : null; 
        $this->container['availability_date'] = isset($data['availabilityDate']) ? $data['availabilityDate'] : null;
        $this->container['allow_pre_order'] = isset($data['allow_pre_order']) ? $data['allow_pre_order'] : null; 
        $this->container['allow_pre_order'] = isset($data['allowPreOrder']) ? $data['allowPreOrder'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null; 
        $this->container['main_photo'] = isset($data['main_photo']) ? $data['main_photo'] : null; 
        $this->container['main_photo'] = isset($data['mainPhoto']) ? $data['mainPhoto'] : null;
        $this->container['photos'] = isset($data['photos']) ? $data['photos'] : null; 
        $this->container['files'] = isset($data['files']) ? $data['files'] : null; 
        $this->container['promotions'] = isset($data['promotions']) ? $data['promotions'] : null; 
        $this->container['related_products'] = isset($data['related_products']) ? $data['related_products'] : null; 
        $this->container['related_products'] = isset($data['relatedProducts']) ? $data['relatedProducts'] : null;
        $this->container['stock_status'] = isset($data['stock_status']) ? $data['stock_status'] : null; 
        $this->container['stock_status'] = isset($data['stockStatus']) ? $data['stockStatus'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null; 
        $this->container['tax_class'] = isset($data['tax_class']) ? $data['tax_class'] : null; 
        $this->container['tax_class'] = isset($data['taxClass']) ? $data['taxClass'] : null;
        $this->container['option_set'] = isset($data['option_set']) ? $data['option_set'] : null; 
        $this->container['option_set'] = isset($data['optionSet']) ? $data['optionSet'] : null;
        $this->container['variants'] = isset($data['variants']) ? $data['variants'] : null; 
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

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!is_null($this->container['availability']) && !in_array($this->container['availability'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'availability', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStockStatusAllowableValues();
        if (!is_null($this->container['stock_status']) && !in_array($this->container['stock_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'stock_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
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
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        /* */
        $this->container['model'] = $model;

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
     * Gets short_description
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->container['short_description'];
    }

    /**
     * Sets short_description
     *
     * @param string $short_description short_description
     *
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        /* */
        $this->container['short_description'] = $short_description;

        return $this;
    }

    /**
     * Gets full_description
     *
     * @return string
     */
    public function getFullDescription()
    {
        return $this->container['full_description'];
    }

    /**
     * Sets full_description
     *
     * @param string $full_description full_description
     *
     * @return $this
     */
    public function setFullDescription($full_description)
    {
        /* */
        $this->container['full_description'] = $full_description;

        return $this;
    }

    /**
     * Gets free_shipping
     *
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->container['free_shipping'];
    }

    /**
     * Sets free_shipping
     *
     * @param bool $free_shipping free_shipping
     *
     * @return $this
     */
    public function setFreeShipping($free_shipping)
    {
        /* */
        $this->container['free_shipping'] = $free_shipping;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        /* */
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        /* */
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets cost_price
     *
     * @return int
     */
    public function getCostPrice()
    {
        return $this->container['cost_price'];
    }

    /**
     * Sets cost_price
     *
     * @param int $cost_price cost_price
     *
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        /* */
        $this->container['cost_price'] = $cost_price;

        return $this;
    }

    /**
     * Gets retail_price
     *
     * @return int
     */
    public function getRetailPrice()
    {
        return $this->container['retail_price'];
    }

    /**
     * Sets retail_price
     *
     * @param int $retail_price retail_price
     *
     * @return $this
     */
    public function setRetailPrice($retail_price)
    {
        /* */
        $this->container['retail_price'] = $retail_price;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return int
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param int $sale_price sale_price
     *
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        /* */
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets manage_inventory
     *
     * @return bool
     */
    public function getManageInventory()
    {
        return $this->container['manage_inventory'];
    }

    /**
     * Sets manage_inventory
     *
     * @param bool $manage_inventory manage_inventory
     *
     * @return $this
     */
    public function setManageInventory($manage_inventory)
    {
        /* */
        $this->container['manage_inventory'] = $manage_inventory;

        return $this;
    }

    /**
     * Gets stock_level
     *
     * @return int
     */
    public function getStockLevel()
    {
        return $this->container['stock_level'];
    }

    /**
     * Sets stock_level
     *
     * @param int $stock_level stock_level
     *
     * @return $this
     */
    public function setStockLevel($stock_level)
    {
        /* */
        $this->container['stock_level'] = $stock_level;

        return $this;
    }

    /**
     * Gets minimum_stock_level
     *
     * @return int
     */
    public function getMinimumStockLevel()
    {
        return $this->container['minimum_stock_level'];
    }

    /**
     * Sets minimum_stock_level
     *
     * @param int $minimum_stock_level minimum_stock_level
     *
     * @return $this
     */
    public function setMinimumStockLevel($minimum_stock_level)
    {
        /* */
        $this->container['minimum_stock_level'] = $minimum_stock_level;

        return $this;
    }

    /**
     * Gets maximum_sell_count
     *
     * @return int
     */
    public function getMaximumSellCount()
    {
        return $this->container['maximum_sell_count'];
    }

    /**
     * Sets maximum_sell_count
     *
     * @param int $maximum_sell_count maximum_sell_count
     *
     * @return $this
     */
    public function setMaximumSellCount($maximum_sell_count)
    {
        /* */
        $this->container['maximum_sell_count'] = $maximum_sell_count;

        return $this;
    }

    /**
     * Gets item_dimensions
     *
     * @return \Tradenity\SDK\Resources\Dimensions
     */
    public function getItemDimensions()
    {
        return $this->container['item_dimensions'];
    }

    /**
     * Sets item_dimensions
     *
     * @param \Tradenity\SDK\Resources\Dimensions $item_dimensions item_dimensions
     *
     * @return $this
     */
    public function setItemDimensions($item_dimensions)
    {
        /* */
        $this->container['item_dimensions'] = $item_dimensions;

        return $this;
    }

    /**
     * Gets package_dimensions
     *
     * @return \Tradenity\SDK\Resources\Dimensions
     */
    public function getPackageDimensions()
    {
        return $this->container['package_dimensions'];
    }

    /**
     * Sets package_dimensions
     *
     * @param \Tradenity\SDK\Resources\Dimensions $package_dimensions package_dimensions
     *
     * @return $this
     */
    public function setPackageDimensions($package_dimensions)
    {
        /* */
        $this->container['package_dimensions'] = $package_dimensions;

        return $this;
    }

    /**
     * Gets package_weight
     *
     * @return \Tradenity\SDK\Resources\Weight
     */
    public function getPackageWeight()
    {
        return $this->container['package_weight'];
    }

    /**
     * Sets package_weight
     *
     * @param \Tradenity\SDK\Resources\Weight $package_weight package_weight
     *
     * @return $this
     */
    public function setPackageWeight($package_weight)
    {
        /* */
        $this->container['package_weight'] = $package_weight;

        return $this;
    }

    /**
     * Gets require_shipping
     *
     * @return bool
     */
    public function getRequireShipping()
    {
        return $this->container['require_shipping'];
    }

    /**
     * Sets require_shipping
     *
     * @param bool $require_shipping require_shipping
     *
     * @return $this
     */
    public function setRequireShipping($require_shipping)
    {
        /* */
        $this->container['require_shipping'] = $require_shipping;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param string $availability availability
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        /*
        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!is_null($availability) && !in_array($availability, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'availability', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
 */
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets availability_date
     *
     * @return \DateTime
     */
    public function getAvailabilityDate()
    {
        return $this->container['availability_date'];
    }

    /**
     * Sets availability_date
     *
     * @param \DateTime $availability_date availability_date
     *
     * @return $this
     */
    public function setAvailabilityDate($availability_date)
    {
        /* */
        $this->container['availability_date'] = $availability_date;

        return $this;
    }

    /**
     * Gets allow_pre_order
     *
     * @return bool
     */
    public function getAllowPreOrder()
    {
        return $this->container['allow_pre_order'];
    }

    /**
     * Sets allow_pre_order
     *
     * @param bool $allow_pre_order allow_pre_order
     *
     * @return $this
     */
    public function setAllowPreOrder($allow_pre_order)
    {
        /* */
        $this->container['allow_pre_order'] = $allow_pre_order;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return \Tradenity\SDK\Resources\Brand
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param \Tradenity\SDK\Resources\Brand $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        /* */
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets main_photo
     *
     * @return \Tradenity\SDK\Resources\Photo
     */
    public function getMainPhoto()
    {
        return $this->container['main_photo'];
    }

    /**
     * Sets main_photo
     *
     * @param \Tradenity\SDK\Resources\Photo $main_photo main_photo
     *
     * @return $this
     */
    public function setMainPhoto($main_photo)
    {
        /* */
        $this->container['main_photo'] = $main_photo;

        return $this;
    }

    /**
     * Gets photos
     *
     * @return \Tradenity\SDK\Resources\Photo[]
     */
    public function getPhotos()
    {
        return $this->container['photos'];
    }

    /**
     * Sets photos
     *
     * @param \Tradenity\SDK\Resources\Photo[] $photos photos
     *
     * @return $this
     */
    public function setPhotos($photos)
    {
        /* */
        $this->container['photos'] = $photos;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Tradenity\SDK\Resources\StorageFile[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Tradenity\SDK\Resources\StorageFile[] $files files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        /* */
        $this->container['files'] = $files;

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
     * Gets related_products
     *
     * @return \Tradenity\SDK\Resources\Product[]
     */
    public function getRelatedProducts()
    {
        return $this->container['related_products'];
    }

    /**
     * Sets related_products
     *
     * @param \Tradenity\SDK\Resources\Product[] $related_products related_products
     *
     * @return $this
     */
    public function setRelatedProducts($related_products)
    {
        /* */
        $this->container['related_products'] = $related_products;

        return $this;
    }

    /**
     * Gets stock_status
     *
     * @return string
     */
    public function getStockStatus()
    {
        return $this->container['stock_status'];
    }

    /**
     * Sets stock_status
     *
     * @param string $stock_status stock_status
     *
     * @return $this
     */
    public function setStockStatus($stock_status)
    {
        /*
        $allowedValues = $this->getStockStatusAllowableValues();
        if (!is_null($stock_status) && !in_array($stock_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'stock_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
 */
        $this->container['stock_status'] = $stock_status;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Tradenity\SDK\Resources\Category[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Tradenity\SDK\Resources\Category[] $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        /* */
        $this->container['categories'] = $categories;

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
     * Gets option_set
     *
     * @return \Tradenity\SDK\Resources\OptionSet
     */
    public function getOptionSet()
    {
        return $this->container['option_set'];
    }

    /**
     * Sets option_set
     *
     * @param \Tradenity\SDK\Resources\OptionSet $option_set option_set
     *
     * @return $this
     */
    public function setOptionSet($option_set)
    {
        /* */
        $this->container['option_set'] = $option_set;

        return $this;
    }

    /**
     * Gets variants
     *
     * @return \Tradenity\SDK\Resources\Variant[]
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     *
     * @param \Tradenity\SDK\Resources\Variant[] $variants variants
     *
     * @return $this
     */
    public function setVariants($variants)
    {
        /* */
        $this->container['variants'] = $variants;

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
     * List Products
     *
     * @param  PageRequest $page_request  (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\page[Product]
     */
    public static function findAll($page_request = null)
    {
        if($page_request != null){
            return self::listAllProducts(['page' => $page_request->getPageNumber(), 'size' => $page_request->getSize() ]);
        }else {
            return self::listAllProducts();
        }
    }

    public static function findAllBy(array $parameters = [])
    {
        return self::listAllProducts($parameters);
    }

    public static function findOneBy(array $parameters = [])
    {
        return self::listAllProducts($parameters)[0];
    }


    /**
     * Operation getProductById
     *
     * Find Product By ID
     *
     * @param  string $id ID of Product to return (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\Product
     */
    public static function findById($id)
    {
        return self::getProductById($id);
    }

    /**
     * Operation create
     *
     * Create New Product
     *
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\Resources\\Product
     */
    public function create()
    {
        $instance = self::createProduct($this);
        $this->setId($instance->getId());
        return $instance;
    }

    /**
    * Operation updateProductById
    *
    * Update Product
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \\Resources\\Product
    */
    public function update()
    {
        return self::updateProductById($this->getId(), $this);
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
        self::deleteProductById($this->getId());
    }

    /**
    * Operation deleteById
    *
    * Delete Product By ID
    *
    * @param  string $id ID (required)
    *
    * @throws \\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return void
    */
    public static function deleteById($id)
    {
        self::deleteProductById($id);
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
     * Operation createProduct
     *
     * Create Product
     *
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\Product
     */
    public static function createProduct($product)
    {
        list($response) = self::createProductWithHttpInfo($product);
        return $response;
    }


    /**
     * Operation createProductWithHttpInfo
     *
     * Create Product
     *
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to create (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\Product, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function createProductWithHttpInfo($product)
    {
        $returnType = '\Tradenity\SDK\Resources\Product';  
        $request = self::createProductRequest($product); 

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
                        '\Tradenity\SDK\Resources\Product',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation createProductAsync
    *
    * Create Product
    *
    * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to create (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function createProductAsync($product)
    {
        return self::createProductAsyncWithHttpInfo($product)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation createProductAsyncWithHttpInfo
     *
     * Create Product
     *
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function createProductAsyncWithHttpInfo($product) 
    {
        $returnType = '\Tradenity\SDK\Resources\Product';  
        $request = self::createProductRequest($product); 

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
     * Create request for operation 'createProduct'
     *
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function createProductRequest($product) 
    {
        // verify the required parameter 'product' is set
        if ($product === null || (is_array($product) && count($product) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product when calling createProduct'
            );
        }

        $resourcePath = '/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($product)) {
            $_tempBody = $product;
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
     * Operation deleteProductById
     *
     * Delete Product
     *
     * @param  string $product_id ID of product to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function deleteProductById($product_id)
    {
        self::deleteProductByIdWithHttpInfo($product_id);
    }


    /**
     * Operation deleteProductByIdWithHttpInfo
     *
     * Delete Product
     *
     * @param  string $product_id ID of product to delete. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function deleteProductByIdWithHttpInfo($product_id)
    {
        $returnType = '';  
        $request = self::deleteProductByIdRequest($product_id); 

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
    * Operation deleteProductByIdAsync
    *
    * Delete Product
    *
    * @param  string $product_id ID of product to delete. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function deleteProductByIdAsync($product_id)
    {
        return self::deleteProductByIdAsyncWithHttpInfo($product_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation deleteProductByIdAsyncWithHttpInfo
     *
     * Delete Product
     *
     * @param  string $product_id ID of product to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function deleteProductByIdAsyncWithHttpInfo($product_id) 
    {
        $returnType = '';  
        $request = self::deleteProductByIdRequest($product_id); 

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
     * Create request for operation 'deleteProductById'
     *
     * @param  string $product_id ID of product to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function deleteProductByIdRequest($product_id) 
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling deleteProductById'
            );
        }

        $resourcePath = '/products/{productId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'productId' . '}',
                ObjectSerializer::toPathValue($product_id),
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
     * Operation getProductById
     *
     * Find Product
     *
     * @param  string $product_id ID of product to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\Product
     */
    public static function getProductById($product_id)
    {
        list($response) = self::getProductByIdWithHttpInfo($product_id);
        return $response;
    }


    /**
     * Operation getProductByIdWithHttpInfo
     *
     * Find Product
     *
     * @param  string $product_id ID of product to return (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\Product, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function getProductByIdWithHttpInfo($product_id)
    {
        $returnType = '\Tradenity\SDK\Resources\Product';  
        $request = self::getProductByIdRequest($product_id); 

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
                        '\Tradenity\SDK\Resources\Product',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation getProductByIdAsync
    *
    * Find Product
    *
    * @param  string $product_id ID of product to return (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function getProductByIdAsync($product_id)
    {
        return self::getProductByIdAsyncWithHttpInfo($product_id)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation getProductByIdAsyncWithHttpInfo
     *
     * Find Product
     *
     * @param  string $product_id ID of product to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function getProductByIdAsyncWithHttpInfo($product_id) 
    {
        $returnType = '\Tradenity\SDK\Resources\Product';  
        $request = self::getProductByIdRequest($product_id); 

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
     * Create request for operation 'getProductById'
     *
     * @param  string $product_id ID of product to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function getProductByIdRequest($product_id) 
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling getProductById'
            );
        }

        $resourcePath = '/products/{productId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'productId' . '}',
                ObjectSerializer::toPathValue($product_id),
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
    * Operation listAllProducts
    *
    * List Products
    *
    * @param  int $page page number (optional)
    * @param  int $size page size (optional)
    * @param  string $sort page order (optional)
    *
    * @throws \Tradenity\SDK\ApiException on non-2xx response
    * @throws \InvalidArgumentException
    * @return \Tradenity\SDK\Resources\Product[page]
    */
    public static function listAllProducts(array $parameters = [])
    {
        list($response) = self::listAllProductsWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation listAllProductsWithHttpInfo
     *
     * List Products
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\Product[page], HTTP status code, HTTP response headers (array of strings)
     */ 
    protected static function listAllProductsWithHttpInfo(array $parameters = []) 
    {
        $returnType = '\Tradenity\SDK\Resources\Product[page]'; 
        $request = self::listAllProductsRequest($parameters);  

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
                        '\Tradenity\SDK\Resources\Product[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation listAllProductsAsync
     *
     * List Products
     *

     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function listAllProductsAsync(array $parameters = [])
    {
        return self::listAllProductsAsyncWithHttpInfo($page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation listAllProductsAsyncWithHttpInfo
     *
     * List Products
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */ 
    protected static function listAllProductsAsyncWithHttpInfo(array $parameters = [])  
    {
        $returnType = '\Tradenity\SDK\Resources\Product[page]'; 
        $request = self::listAllProductsRequest($parameters);  

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
     * Create request for operation 'listAllProducts'
     *
     * @param  int $page page number (optional)
     * @param  int $size page size (optional)
     * @param  string $sort page order (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */ 
    protected static function listAllProductsRequest(array $parameters = [])  
    {

        $resourcePath = '/products';
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
     * Operation replaceProductById
     *
     * Replace Product
     *
     * @param  string $product_id ID of product to replace (required)
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\Product
     */
    public static function replaceProductById($product_id, $product)
    {
        list($response) = self::replaceProductByIdWithHttpInfo($product_id, $product);
        return $response;
    }


    /**
     * Operation replaceProductByIdWithHttpInfo
     *
     * Replace Product
     *
     * @param  string $product_id ID of product to replace (required)
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to replace (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\Product, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function replaceProductByIdWithHttpInfo($product_id, $product)
    {
        $returnType = '\Tradenity\SDK\Resources\Product';  
        $request = self::replaceProductByIdRequest($product_id, $product); 

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
                        '\Tradenity\SDK\Resources\Product',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation replaceProductByIdAsync
    *
    * Replace Product
    *
    * @param  string $product_id ID of product to replace (required)
    * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to replace (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function replaceProductByIdAsync($product_id, $product)
    {
        return self::replaceProductByIdAsyncWithHttpInfo($product_id, $product)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation replaceProductByIdAsyncWithHttpInfo
     *
     * Replace Product
     *
     * @param  string $product_id ID of product to replace (required)
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function replaceProductByIdAsyncWithHttpInfo($product_id, $product) 
    {
        $returnType = '\Tradenity\SDK\Resources\Product';  
        $request = self::replaceProductByIdRequest($product_id, $product); 

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
     * Create request for operation 'replaceProductById'
     *
     * @param  string $product_id ID of product to replace (required)
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to replace (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function replaceProductByIdRequest($product_id, $product) 
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling replaceProductById'
            );
        }
        // verify the required parameter 'product' is set
        if ($product === null || (is_array($product) && count($product) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product when calling replaceProductById'
            );
        }

        $resourcePath = '/products/{productId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'productId' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($product)) {
            $_tempBody = $product;
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
     * Operation updateProductById
     *
     * Update Product
     *
     * @param  string $product_id ID of product to update. (required)
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tradenity\SDK\Resources\Product
     */
    public static function updateProductById($product_id, $product)
    {
        list($response) = self::updateProductByIdWithHttpInfo($product_id, $product);
        return $response;
    }


    /**
     * Operation updateProductByIdWithHttpInfo
     *
     * Update Product
     *
     * @param  string $product_id ID of product to update. (required)
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to update. (required)
     *
     * @throws \Tradenity\SDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tradenity\SDK\Resources\Product, HTTP status code, HTTP response headers (array of strings)
     */  
    protected static function updateProductByIdWithHttpInfo($product_id, $product)
    {
        $returnType = '\Tradenity\SDK\Resources\Product';  
        $request = self::updateProductByIdRequest($product_id, $product); 

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
                        '\Tradenity\SDK\Resources\Product',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
    * Operation updateProductByIdAsync
    *
    * Update Product
    *
    * @param  string $product_id ID of product to update. (required)
    * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to update. (required)
    *
    * @throws \InvalidArgumentException
    * @return \GuzzleHttp\Promise\PromiseInterface
    */
    public static function updateProductByIdAsync($product_id, $product)
    {
        return self::updateProductByIdAsyncWithHttpInfo($product_id, $product)
            ->then(
                function ($response) {
                    return $response[0];
            }
        );
    }
    /**
     * Operation updateProductByIdAsyncWithHttpInfo
     *
     * Update Product
     *
     * @param  string $product_id ID of product to update. (required)
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */  
    protected static function updateProductByIdAsyncWithHttpInfo($product_id, $product) 
    {
        $returnType = '\Tradenity\SDK\Resources\Product';  
        $request = self::updateProductByIdRequest($product_id, $product); 

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
     * Create request for operation 'updateProductById'
     *
     * @param  string $product_id ID of product to update. (required)
     * @param  \Tradenity\SDK\Resources\Product $product Attributes of product to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */  
    protected static function updateProductByIdRequest($product_id, $product) 
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling updateProductById'
            );
        }
        // verify the required parameter 'product' is set
        if ($product === null || (is_array($product) && count($product) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product when calling updateProductById'
            );
        }

        $resourcePath = '/products/{productId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'productId' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($product)) {
            $_tempBody = $product;
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
