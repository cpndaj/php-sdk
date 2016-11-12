<?php
/**
 * Created by IntelliJ IDEA.
 * User: Joseph
 * Date: 31-Oct-16
 * Time: 6:54 PM
 */

namespace Tradenity\SDK\Utilities;


class ObjectUtilities
{

    public static function copyProperties($properties, $from, $to)
    {
        foreach ($properties as $p) {
            if (property_exists($from, $p)) {
                $to->{$p} = $from->{$p};
            }
        }
    }

    public static function copyObjectToArray($properties, $from, &$to, $prefix = '', $copyNull = true)
    {
        foreach ($properties as $p) {
            if ($copyNull) {
                if (property_exists($from, $p)) {
                    $key = $prefix . $p;
                    $to[$key] = $from->{$p};
                }
            } else {
                if (property_exists($from, $p) && isset($from->{$p})) {
                    $key = $prefix . $p;
                    $to[$key] = $from->{$p};
                }
            }
        }
    }

    public static function copyArrayToObject($properties, $from, $to)
    {
        foreach ($properties as $p) {
            if (array_key_exists($p, $from)) {
                $to->{$p} = $from[$p];
            }
        }
    }
}