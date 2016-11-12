<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class Currency extends BaseEntity
{
    protected static $resource_name = 'currencies';

    protected static $primitiveProperties = [ 'code', 'title', 'status', 'exchangeRate','createdAt','updatedAt' ];

    public $id;
    public $code;
    public $title;
    public $status;
    public $exchangeRate;
    public $createdAt;
    public $updatedAt;

    public function __construct(){}

    protected function getCreateData()
    {

        $props = [ 'code', 'title', 'status', 'exchangeRate'];
        $a = $this->toArray($props);
        return $a;
    }

    protected function getUpdateData()
    {
        $props = [ 'code', 'title', 'status', 'exchangeRate'];
        return $this->toArray($props);
    }

    public static function fromArray($data){
        $props = ['id',  'code', 'title', 'status', 'exchangeRate','createdAt','updatedAt' ];
        $c = new Currency();
        ObjectUtilities::copyArrayToObject($props, $data, $c);
        return $c;
    }


    public static function create_instance($data)
    {
        $c = new Currency();
        $c->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);
        return $c;
    }

}