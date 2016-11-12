<?php
/**
 * Created by IntelliJ IDEA.
 * User: joseph
 * Date: 7/25/16
 * Time: 3:28 PM
 */

namespace Tradenity\SDK\Entities;


class Property
{
    public $name;
    public $type;
    public $isRequired;
    public $readOnly;

    /**
     * Property constructor.
     * @param $name
     * @param $type
     * @param $isRequired
     * @param $readOnly
     */
    public function __construct($name, $type, $isRequired = true, $readOnly = false)
    {
        $this->name = $name;
        $this->type = $type;
        $this->isRequired = $isRequired;
        $this->readOnly = $readOnly;
    }


}