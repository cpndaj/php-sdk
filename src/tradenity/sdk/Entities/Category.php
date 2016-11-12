<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class Category extends BaseEntity
{
    protected static $resource_name = 'categories';

    protected static $primitiveProperties = [ 'name', 'title', 'status', 'description', 'depth', 'position', 'createdAt','updatedAt' ];

    public $id;
    public $name;
    public $title;
    public $status;
    public $depth;
    public $position;
    public $description;
    public $createdAt;
    public $updatedAt;

    public function __construct(){}

    protected function getCreateData()
    {

        $props = [ 'name', 'title', 'status', 'description', 'depth', 'position'];
        $a = $this->toArray($props);
        return $a;
    }

    protected function getUpdateData()
    {
        $props = [ 'name', 'title', 'status', 'description', 'depth', 'position'];
        return $this->toArray($props);
    }

    public static function fromArray($data){
        $props = ['id', 'name', 'title', 'status', 'description', 'depth', 'position', 'createdAt','updatedAt' ];
        $c = new Category();
        ObjectUtilities::copyArrayToObject($props, $data, $c);
        return $c;
    }

    protected static function create_instance($data){
        $c = new Category();
        $c->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);
        return $c;
    }

}