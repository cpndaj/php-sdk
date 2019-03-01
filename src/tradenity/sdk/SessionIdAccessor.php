<?php


namespace Tradenity\SDK;


interface SessionIdAccessor
{
    function storeSessionId($id);

    function getSessionId();

    function reset();

    function hasSessionId();

}