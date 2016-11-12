<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/31/16
 * Time: 11:29 PM
 */
namespace Tradenity\SDK\Http;

interface SessionIdAccessor
{
    function storeSessionId($id);

    function getSessionId();

    function reset();

    function hasSessionId();

}