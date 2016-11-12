<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 6:47 PM
 */

namespace Tradenity\SDK\Exceptions;


use Tradenity\SDK\Utilities\ObjectUtilities;

class ErrorMessage
{
    public $status = 0;
    public $errorCode = 0;
    public $error;
    public $timestamp;
    public $message;
    public $path; //todo: remove this
    public $details = array();
    public $fieldErrors = array();

    public static function create_instance($data)
    {
        $props = ['status', 'errorCode', 'error', 'timestamp', 'message', 'path', 'details', 'fieldErrors'];
        $c = new ErrorMessage();
        ObjectUtilities::copyProperties($props, $data, $c);
        return $c;
    }

}