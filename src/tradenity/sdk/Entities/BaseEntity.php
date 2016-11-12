<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


use Tradenity\SDK\Utilities\ObjectUtilities;
use Tradenity\SDK\TradenityClient;

class BaseEntity
{
    protected static $resource_name = '';
    protected static $httpClient = NULL;

    public static function getBaseUrl()
    {
        return TradenityClient::$endPoint;
    }

    public static function client()
    {
        return TradenityClient::getHttpClient();
    }

    public static function resource_base_path()
    {
        return self::getBaseUrl() .'/' . static::$resource_name;
    }

    public static function resource_path($resource_id)
    {
        return self::resource_base_path() .'/' . $resource_id;
    }

    public static function findAll($query = array()){
        return self::search($query);
    }

    public static function findOne($query){
        $page = self::search($query);
        if($page->offsetExists(0))
        {
            return $page[0];
        }
        else
        {
            return NULL;
        }
    }

    public static function findById($id)
    {
        $result = self::client()->get(self::resource_path($id));
        return static::create_instance($result);
    }

    protected static function get_id($links)
    {
        if( $links != null && $links->self != null && $links->self->href != null)
        {
            $href = $links->self->href;
            $strs = explode('/', $href);
            return end($strs);
        }
        else
        {
            return '';
        }
    }

    protected static function search($query)
    {
        $result = self::client()->get(self::resource_base_path(), $query);
        if(property_exists($result, '_embedded')) {
            $collection = $result->_embedded->{static::$resource_name};
            $page_info = new PageInfo($result->page);


            $cats = array();
            foreach ($collection as $c) {
                array_push($cats, static::create_instance($c));
            }

            return new Page($cats, $page_info);
        }else{
            return new Page([], new PageInfo());
        }
    }

    public function create()
    {
        $data = $this->getCreateData();
        $result = self::client()->post(self::resource_base_path(), $data);
        return static::create_instance($result);
    }

    public function update()
    {
        $result = self::client()->put(self::resource_path($this->id), $this->getUpdateData());
        return static::create_instance($result);
    }

    public function delete()
    {
        self::client()->delete(self::resource_path($this->id));
    }

    protected function getCreateData()
    {
        echo "In base Class";
        return array();
    }

    protected function getUpdateData()
    {
        return array();
    }

    public function propertiesSet($properties){
        foreach($properties as $p){
            if (property_exists($this, $p) && !isset($this->{$p})) {
                return false;
            }
        }
        return true;
    }
    
    
    public function toArray($properties = NULL, $prefix = '', $copyNull = true)
    {
        $a = array();
        if(isset($properties) && is_array($properties))
        {
            ObjectUtilities::copyObjectToArray($properties, $this, $a, $prefix, $copyNull);
        }
        return $a;
    }

}