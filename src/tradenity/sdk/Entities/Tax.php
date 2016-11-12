<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class Tax extends BaseEntity
{
    protected static $resource_name = 'taxes';

    protected static $primitiveProperties = [ 'name', 'title', 'status', 'description', 'rate', 'createdAt','updatedAt' ];

    public $id;
    public $name;
    public $title;
    public $status;
    public $description;
    public $rate;
    public $createdAt;
    public $updatedAt;

    public function __construct(){}

    protected function getCreateData()
    {

        $props = [ 'name', 'title', 'status', 'description', 'rate' ];
        $a = $this->toArray($props);
        return $a;
    }

    protected function getUpdateData()
    {
        $props = [ 'name', 'title', 'status', 'description', 'rate'];
        return $this->toArray($props);
    }

    public static function fromArray($data){
        $props = ['id',  'name', 'title', 'status', 'description', 'rate', 'createdAt','updatedAt' ];
        $c = new Tax();
        ObjectUtilities::copyArrayToObject($props, $data, $c);
        return $c;
    }


    public static function create_instance($data){
        $c = new Tax();
        $c->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);
        return $c;
    }

}