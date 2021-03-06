<?php
/**
 * ContactInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
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

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Tradenity\SDK\Resources;

use \ArrayAccess;
use \Tradenity\SDK\ObjectSerializer;

/**
 * ContactInfo Class Doc Comment
 *
 * @category Class
 * @package  Tradenity\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        
        'contact_name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip_code' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        
        'contact_name' => null,
        'email' => null,
        'phone' => null,
        'address_line1' => null,
        'address_line2' => null,
        'city' => null,
        'state' => null,
        'zip_code' => null,
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
        
        'contact_name' => 'contactName',
        'email' => 'email',
        'phone' => 'phone',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'city' => 'city',
        'state' => 'state',
        'zip_code' => 'zipCode',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        
        'contact_name' => 'setContactName',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'city' => 'setCity',
        'state' => 'setState',
        'zip_code' => 'setZipCode',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        
        'contact_name' => 'getContactName',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'city' => 'getCity',
        'state' => 'getState',
        'zip_code' => 'getZipCode',
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
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null; 
        $this->container['contact_name'] = isset($data['contactName']) ? $data['contactName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null; 
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null; 
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null; 
        $this->container['address_line1'] = isset($data['addressLine1']) ? $data['addressLine1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null; 
        $this->container['address_line2'] = isset($data['addressLine2']) ? $data['addressLine2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null; 
        $this->container['state'] = isset($data['state']) ? $data['state'] : null; 
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null; 
        $this->container['zip_code'] = isset($data['zipCode']) ? $data['zipCode'] : null;
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

        if ($this->container['contact_name'] === null) {
            $invalidProperties[] = "'contact_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['zip_code'] === null) {
            $invalidProperties[] = "'zip_code' can't be null";
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

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name contact_name
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        /**/
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        /**/
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        /**/
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 address_line1
     *
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        /**/
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string $address_line2 address_line2
     *
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        /**/
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        /**/
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        /**/
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string $zip_code zip_code
     *
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        /**/
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        /**/
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
}


