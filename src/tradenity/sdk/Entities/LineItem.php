<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class LineItem extends BaseEntity{

    protected static $primitiveProperties = [ 'quantity', 'unitPrice', 'total', 'subtotal','taxes','shippingCost' ];


    public $id;
    public $quantity;
    public $product;
    public $unitPrice;
    public $total;
    public $subtotal;
    public $taxes;
    public $shippingCost;

    public function __construct(){}


    public static function create_item($productId, $quantity)
    {
        $i = new LineItem();
        $i->quantity = (int)$quantity;
        $i->product = Product::withId($productId);
        return $i;
    }

    public static function create_instance($data)
    {
        $c = new LineItem();
        $c->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);
        $c->product = Product::create_instance($data->product);
        return $c;
    }

}