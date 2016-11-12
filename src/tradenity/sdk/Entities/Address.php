<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class Address extends BaseEntity
{
    protected static $resource_name = 'addresses';

    public static $editableProperties = ['streetLine1', 'streetLine2','city','state','zipCode','country'];
    protected static $primitiveProperties = ['streetLine1', 'streetLine2','city','state','zipCode','country', 'createdAt', 'updatedAt'];
    protected static $allProperties = ['streetLine1', 'streetLine2','city','state','zipCode','country', 'createdAt', 'updatedAt'];

    public $id;
    public $streetLine1;
    public $streetLine2;
    public $city;
    public $state;
    public $zipCode;
    public $country;
    public $createdAt;
    public $updatedAt;


    public function __construct(){}



    public function toArray($props = NULL, $prefix = '', $copyNull = true)
    {
        if(is_null($props)) 
        {
            return parent::toArray(self::$allProperties, $prefix, $copyNull);
        }
        else
        {
            return parent::toArray($props, $prefix, $copyNull);
        }
    }

    protected function getCreateData()
    {

        $props = ['streetLine1', 'streetLine2','city','state','zipCode','country'];
        $a = $this->toArray($props);
        return $a;
    }

    protected function getUpdateData()
    {
        $props = ['streetLine1', 'streetLine2','city','state','zipCode','country'];
        return $this->toArray($props);
    }

    public static function fromArray($data){
        $props = ['id', 'streetLine1', 'streetLine2','city','state','zipCode','country', 'createdAt','updatedAt' ];
        $c = new Address();
        ObjectUtilities::copyArrayToObject($props, $data, $c);
        return $c;
    }


    public static function create_instance($data)
    {
        $c = new Address();
        $c->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);
        return $c;
    }

}