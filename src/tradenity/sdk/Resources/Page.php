<?php


namespace Tradenity\SDK\Resources;


class Page extends \ArrayObject
{
    protected $page_info;

    public function __construct($initial_array, $page_info){
        parent::__construct($initial_array);
        $this->page_info = $page_info;
    }

}