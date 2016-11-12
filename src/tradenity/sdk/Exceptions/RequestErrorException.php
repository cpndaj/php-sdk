<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 6:47 PM
 */

namespace Tradenity\SDK\Exceptions;


class RequestErrorException extends \RuntimeException
{
    private $errorResponse;

    /**
     * RequestErrorException constructor.
     * @param $errorResponse
     */
    public function __construct($errorResponse)
    {
        $this->errorResponse = $errorResponse;
    }


}