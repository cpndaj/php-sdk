<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class Collection extends BaseEntity
{
    protected static $resource_name = 'collections';

    protected static $primitiveProperties = [ 'name', 'title', 'status', 'description','createdAt','updatedAt' ];

    public $id;
    public $name;
    public $title;
    public $status;
    public $description;
    public $products = array();
    public $createdAt;
    public $updatedAt;

    public function __construct(){}

    protected function getCreateData()
    {

        $props = [ 'name', 'title', 'status', 'description'];
        $a = $this->toArray($props);
        return $a;
    }

    protected function getUpdateData()
    {
        $props = [ 'name', 'title', 'status', 'description'];
        return $this->toArray($props);
    }

    public static function fromArray($data)
    {
        $props = ['id', 'name', 'title', 'status', 'description','createdAt','updatedAt' ];
        $c = new Collection();
        ObjectUtilities::copyArrayToObject($props, $data, $c);
        return $c;
    }

    public static function create_instance($data)
    {
        $c = new Collection();
        $c->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);
        foreach($data->products as $p){
            array_push($c->products, Product::create_instance($p));
        }        
        return $c;
    }

}