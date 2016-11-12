<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class Photo extends BaseEntity
{
    protected static $resource_name = 'photos';

    protected static $primitiveProperties = [ 'name', 'url','createdAt','updatedAt' ];

    public $name;
    public $url;
    public $createdAt;
    public $updatedAt;

    public function __construct(){}


    public static function create_instance($data){
        $c = new Photo();
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);
        return $c;
    }

}