<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class ShippingMethod extends BaseEntity
{
    protected static $resource_name = 'shippingMethods';

    protected static $primitiveProperties = [ 'name', 'title', 'status', 'description', 'costType',
        'fixedRate', 'costPerUnitWeight','weightUnit', 'createdAt','updatedAt' ];

    public $id;
    public $name;
    public $title;
    public $status;
    public $description;
    public $costType;
    public $fixedRate;
    public $costPerUnitWeight;
    public $weightUnit;
    public $createdAt;
    public $updatedAt;

    public function __construct(){}
    
    
    protected function getCreateData()
    {

        $props = [ 'name', 'title', 'status', 'description', 'costType',
            'fixedRate', 'costPerUnitWeight','weightUnit'];
        $a = $this->toArray($props);
        return $a;
    }

    protected function getUpdateData()
    {
        $props = [ 'name', 'title', 'status', 'description', 'costType',
            'fixedRate', 'costPerUnitWeight','weightUnit'];
        return $this->toArray($props);
    }

    public static function fromArray($data){
        $props = ['id',  'name', 'title', 'status', 'description', 'costType',
            'fixedRate', 'costPerUnitWeight','weightUnit', 'createdAt','updatedAt' ];
        $c = new ShippingMethod();
        ObjectUtilities::copyArrayToObject($props, $data, $c);
        return $c;
    }



    public static function create_instance($data){
        $c = new ShippingMethod();
        $c->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);
        return $c;
    }

}