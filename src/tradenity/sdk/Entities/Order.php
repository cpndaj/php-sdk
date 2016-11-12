<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class Order extends BaseEntity
{
    protected static $resource_name = 'orders';

    protected static $primitiveProperties = [ 'total', 'subtotal', 'status', 'shippingCost',
        'orderTaxAmount', 'itemsTaxAmount', 'purchasedAt', 'completedAt', 'createdAt','updatedAt' ];

    public $id;
    public $total;
    public $subtotal;
    public $status;
    public $shippingCost;
    public $orderTaxAmount;
    public $itemsTaxAmount;
    public $purchasedAt;
    public $completedAt;
    public $customer;
    public $gateway;
    public $currency;
    public $shippingMethod;
    public $shippingAddress;
    public $billingAddress;
    public $items = array();
    public $transactions = array();
    public $createdAt;
    public $updatedAt;

    public function __construct(){}



    public static function findAllByCustomer($customer)
    {
        return self::findAll(['customer' => $customer->id]);
    }

    public function checkout($token)
    {
        $a = $this->getCreateData();
        $a['paymentSource'] = $token;
        $a['customer'] = $this->customer->id;
        $result = self::client()->post(self::resource_base_path(), $a);
        return Transaction::create_instance($result);
    }

    public static function refund($orderId)
    {
        $result = self::client()->post(self::resource_path($orderId) . '/refund', []);
        return Transaction::create_instance($result);
    }

    protected function getCreateData()
    {

        $props = [ 'total', 'subtotal', 'status', 'shippingCost',
            'orderTaxAmount', 'itemsTaxAmount', 'purchasedAt', 'completedAt', 'createdAt','updatedAt' ];
        $a = $this->toArray($props, '', false);
        if(isset($this->billingAddress))
        {
            $a = array_merge($a, $this->billingAddress->toArray(Address::$editableProperties, 'billingAddress.'));
        }
        if(isset($this->shippingAddress))
        {
            $a = array_merge($a, $this->shippingAddress->toArray(Address::$editableProperties, 'shippingAddress.'));
        }
        return $a;
    }

    protected function getUpdateData()
    {
        $props = [ 'total', 'subtotal', 'status', 'shippingCost',
            'orderTaxAmount', 'itemsTaxAmount' ];
        return $this->toArray($props);
    }

    public static function fromArray($data){
        $props = ['id',  'total', 'subtotal', 'status', 'shippingCost',
            'orderTaxAmount', 'itemsTaxAmount', 'purchasedAt', 'completedAt', 'createdAt','updatedAt' ];
        $c = new Order();
        ObjectUtilities::copyArrayToObject($props, $data, $c);
        return $c;
    }

    public static function create_instance($data){
        $c = new Order();
        $c->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);

        if(property_exists($data, 'customer')) {
            $c->customer = Customer::create_instance($data->customer);
        }
        if(property_exists($data, 'currency')) {
            $c->currency = Currency::create_instance($data->currency);
        }
        if(property_exists($data, 'gateway')) {
            $c->gateway = Gateway::create_instance($data->gateway);
        }
        if(property_exists($data, 'shippingMethod')) {
            $c->shippingMethod = ShippingMethod::create_instance($data->shippingMethod);
        }
        if(property_exists($data, 'billingAddress')) {
            $c->billingAddress = Address::create_instance($data->billingAddress);
        }
        if(property_exists($data, 'shippingAddress')) {
            $c->shippingAddress = Address::create_instance($data->shippingAddress);
        }
        if(property_exists($data, 'items')) {
            foreach($data->items as $i){
                array_push($c->items, LineItem::create_instance($i));
            }
        }
        if(property_exists($data, 'transactions')) {
            foreach($data->transactions as $i){
                array_push($c->transactions, Transaction::create_instance($i));
            }
        }
        return $c;
    }

}