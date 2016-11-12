<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;

class Gateway extends BaseEntity
{
    protected static $resource_name = 'gateways';

    protected static $primitiveProperties = [ 'name', 'title', 'status', 'description', 'mode', 'accountId',
        'secretKey', 'publicKey', 'testSecretKey', 'testPublicKey', 'createdAt','updatedAt' ];

    public $id;
    public $name;
    public $title;
    public $status;
    public $description;
    public $mode;
    public $accountId;
    public $secretKey;
    public $publicKey;
    public $testSecretKey;
    public $testPublicKey;
    public $createdAt;
    public $updatedAt;

    public function __construct(){}

    protected function getCreateData()
    {

        $props = [ 'name', 'title', 'status', 'description', 'mode', 'accountId',
                  'secretKey', 'publicKey', 'testSecretKey', 'testPublicKey'];
        $a = $this->toArray($props);
        return $a;
    }

    protected function getUpdateData()
    {
        $props = [ 'name', 'title', 'status', 'description', 'mode', 'accountId',
                 'secretKey', 'publicKey', 'testSecretKey', 'testPublicKey'];
        return $this->toArray($props);
    }

    public static function fromArray($data){
        $props = ['id',  'name', 'title', 'status', 'description', 'mode', 'accountId',
            'secretKey', 'publicKey', 'testSecretKey', 'testPublicKey', 'createdAt','updatedAt' ];
        $c = new Gateway();
        ObjectUtilities::copyArrayToObject($props, $data, $c);
        return $c;
    }


    public static function create_instance($data){
        $c = new Gateway();
        $c->id = self::get_id($data->_links);
        ObjectUtilities::copyProperties(static::$primitiveProperties, $data, $c);
        return $c;
    }

}