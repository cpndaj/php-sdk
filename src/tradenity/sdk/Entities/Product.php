<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class Product extends BaseEntity
{
    protected static $resource_name = 'products';

    protected static $primitiveProperties = [ 'name', 'title', 'status', 'price', 'description', 'sku', 'shortDescription', 'fullDescription', 'createdAt','updatedAt' ];

    public $id;
    public $name;
    public $title;
    public $status;
    public $price;
    public $sku;
    public $description;
    public $shortDescription;
    public $fullDescription;
    public $mainPhoto;
    public $photos = array();
    public $createdAt;
    public $updatedAt;

    public function __construct(){}


    public static function withId($id)
    {
        $p = new Product();
        $p->id =$id;
        return $p;
    }

    protected function getCreateData()
    {

        $props = [ 'name', 'title', 'status', 'description', 'sku', 'shortDescription', 'fullDescription'];
        $a = $this->toArray($props);
        return $a;
    }

    protected function getUpdateData()
    {
        $props = [ 'name', 'title', 'status', 'description', 'sku', 'shortDescription', 'fullDescription'];
        return $this->toArray($props);
    }

    public static function fromArray($data){
        $props = ['id', 'name', 'title', 'status', 'description', 'sku', 'shortDescription', 'fullDescription', 'createdAt','updatedAt' ];
        $c = new Product();
        ObjectUtilities::copyArrayToObject($props, $data, $c);
        return $c;
    }


    public static function create_instance($data)
    {
        $p = new Product();
        $p->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $p);
        if(property_exists($data, 'mainPhoto')) {
            $p->mainPhoto = Photo::create_instance($data->mainPhoto);
        }
        if(property_exists($data, 'photos')) {
            foreach($data->photos as $ph){
                array_push($p->photos, Photo::create_instance($ph));
            }
        }

        return $p;
    }

}