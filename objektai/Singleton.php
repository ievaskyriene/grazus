<?php

namespace GrazusMeskenas; //jie irgi prasideda is didziosio raides

class Singleton
{
    public $shop = [];
    static private $obj;

    const MESKENAS = 'grazus';

    static public function make()
    {
        return self::$obj ?? self:: $obj = new self;     //tas pats kas kurtum singelton - kas yra klases vardas, jeigu viduje, tai gali kurti self
    }

    private function __contruct()
    {

    }

    private function __clone(){}

    //private function __sleep(){} ///taip apsaugom nuo serializavimo 
   // private function __wakeup(){} ///arba taip apsaugom nuo serializavimo 

}