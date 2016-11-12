<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 3/29/16
 * Time: 5:24 PM
 */

namespace Tradenity\SDK\Entities;


class Page extends \ArrayObject
{
    protected $pageInfo;
    
    public function __construct($initial_array, $pageInfo){
        parent::__construct($initial_array);
        //$this->$pageInfo = $pageInfo;
    }

}