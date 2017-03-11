<?php


class ClassName {


    private $config = array();

    function __construct()
    {
        $this->container = Container::origin();
    }

    public function mymethod()
    {
        return $this->container->get('name');
    }
}