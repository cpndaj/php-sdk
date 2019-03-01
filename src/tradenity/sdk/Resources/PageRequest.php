<?php


namespace Tradenity\SDK\Resources;


class PageRequest
{

    protected $pageNumber;

    protected $size;

    /**
     * PageRequest constructor.
     * @param $pageNumber
     * @param $size
     */
    public function __construct($pageNumber, $size)
    {
        $this->pageNumber = $pageNumber;
        $this->size = $size;
    }

    /**
    * @return mixed
    */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
    * @param mixed $pageNumber
    */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
    }

    /**
    * @return mixed
    */
    public function getSize()
    {
        return $this->size;
    }

    /**
    * @param mixed $size
    */
    public function setSize($size)
    {
        $this->size = $size;
    }

}