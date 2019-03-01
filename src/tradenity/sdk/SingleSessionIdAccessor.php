<?php

namespace Tradenity\SDK;


class SingleSessionIdAccessor implements SessionIdAccessor{
    var $sessionId = null;

    /**
     * SingleSessionIdAccessor constructor.
     */
    public function __construct()
    {
    }


    function storeSessionId($id)
    {
        $this->sessionId = $id;
    }

    function getSessionId()
    {
        return $this->sessionId;
    }

    function reset()
    {
        $this->sessionId = null;
    }

    function hasSessionId()
    {
        return $this->sessionId != null;
    }
}