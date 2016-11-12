<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


class ShoppingCart extends BaseEntity
{
    protected static $resource_name = 'shoppingCarts';

    public $total;
    public $count;
    public $items = array();

    public function __construct(){}


    public static function get()
    {
        $result = self::client()->get(self::resource_base_path());
        return static::create_instance($result);
    }

    public static function add($productId, $quantity)
    {
        $result = self::client()->post(self::resource_base_path(), ["product"=> $productId, "quantity"=> $quantity]);
        return static::create_instance($result);
    }

    public static function addItem($item)
    {
        self::add($item->product->id, $item->quantity );
    }

    public static function removeItem($itemId)
    {
        $base_path = self::resource_base_path();
        $result = self::client()->delete("${base_path}/${itemId}");
        return static::create_instance($result);
    }

    public static function create_instance($data){
        $c = new ShoppingCart();
        $c->total = $data->total;
        $c->count = $data->count;
        if(property_exists($data, 'items')) {
            foreach($data->items as $i){
                array_push($c->items, LineItem::create_instance($i));
            }
        }
        return $c;
    }

}