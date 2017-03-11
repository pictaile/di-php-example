<?php

class Container {

    static private $container;

    private function __construct(){}
    private function __clone(){}

    static public function  setContainer($container) {
        self::$container = $container;
    }

    static public function origin() {
        if(self::$container) {
            return self::$container;
        }

        return false;
    }
}