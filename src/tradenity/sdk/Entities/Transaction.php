<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class Transaction extends BaseEntity
{
    protected static $resource_name = 'transactions';

    protected static $primitiveProperties = [ 'gatewayOperationId', 'type', 'status', 'createdAt','updatedAt' ];

    public $id;
    public $type;
    public $status;
    public $gatewayOperationId;
    public $order;
    public $gateway;
    public $createdAt;
    public $updatedAt;

    public function __construct(){}

    protected function getCreateData()
    {

        $props = [ 'gatewayOperationId', 'type', 'status'];
        $a = $this->toArray($props);
        return $a;
    }

    protected function getUpdateData()
    {
        $props = [ 'gatewayOperationId', 'type', 'status'];
        return $this->toArray($props);
    }

    public static function fromArray($data){
        $props = ['id',  'gatewayOperationId', 'type', 'status', 'createdAt','updatedAt' ];
        $c = new Transaction();
        ObjectUtilities::copyArrayToObject($props, $data, $c);
        return $c;
    }


    public static function create_instance($data){
        $c = new Transaction();
        $c->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);
        if(property_exists($data, 'order')) {
            $c->order = Order::create_instance($data->order);
        }
        if(property_exists($data, 'gateway')) {
            $c->gateway = Gateway::create_instance($data->gateway);
        }
        return $c;
    }

}