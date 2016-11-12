<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/31/16
 * Time: 11:29 PM
 */
namespace Tradenity\SDK;

use Tradenity\SDK\Http\Client;

class TradenityClient
{
    public static $endPoint = "https://api.tradenity.com/v1";
    public static $key = null;
    public static $sessionIdAccessor = null;
    protected static $httpClient = NULL;

    public static function getHttpClient()
    {
        if(static::$httpClient == NULL) {
            static::$httpClient = new Client(static::$endPoint, static::$key, static::$sessionIdAccessor);
        }
        return static::$httpClient;
    }

    public static function resetCurrentSession()
    {
        static::$sessionIdAccessor->reset();
    }

}