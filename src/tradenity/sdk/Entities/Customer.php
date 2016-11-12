<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class Customer extends BaseEntity
{
    protected static $resource_name = 'customers';
    
    protected static $primitiveProperties = ['firstName', 'lastName', 'status', 'username', 'password', 'email', 'createdAt', 'updatedAt'];

    public $id;
    public $firstName;
    public $lastName;
    public $status;
    public $username;
    public $password;
    public $email;
    public $shippingAddress;
    public $billingAddress;
    public $createdAt;
    public $updatedAt;

    public function __construct(){}



    public static function findByUsername($username)
    {
        return self::findOne(['username' => $username]);
    }

    public function isValid()
    {
        return true;
    }
    
    protected function getCreateData()
    {

        $props = ['firstName', 'lastName', 'status', 'username', 'password', 'email'];
        $a = $this->toArray($props);
        if(isset($this->billingAddress))
        {
            $a = array_merge($a, $this->billingAddress->toArray());
        }
        if(isset($this->shippingAddress))
        {
            $a = array_merge($a, $this->shippingAddress->toArray());
        }
        return $a;
    }

    protected function getUpdateData()
    {
        $props = ['firstName', 'lastName', 'status', 'username', 'password', 'email'];
        return $this->toArray($props);
    }
    
    public static function fromArray($data)
    {
        $props = ['id', 'firstName', 'lastName', 'status', 'username', 'password', 'email'];
        $c = new Customer();
        ObjectUtilities::copyArrayToObject($props, $data, $c);
        return $c;        
    }
    

    public static function create_instance($data)
    {
        $c = new Customer();
        $c->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);
        if(property_exists($data, 'billingAddress')) {
            $c->billingAddress = Address::create_instance($data->billingAddress);
        }
        if(property_exists($data, 'shippingAddress')) {
            $c->shippingAddress = Address::create_instance($data->shippingAddress);
        }
        return $c;
    }
    

}