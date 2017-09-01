<?php


namespace AppBundle\Application\Core;


class CreateMarketCommand
{

    /**
     * @var array
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function __get($property)
    {
        if( isset($this->data[$property]) )
        {
            return $this->data[$property];
        }

        return null;
    }

}