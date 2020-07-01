<?php

class Grybas{
    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct()
    {
        $this->valgomas = rand(0,1) ? false : true;
        $this->sukirmijes = rand(0,1) ? false : true;
        $this->svoris = rand(5,45);
    }

    public function __get($prop)
    {
        if (in_array($prop, ['valgomas', 'sukirmijes', 'svoris'])){
            return $this->$prop;
        }
        return null; //nereikia, tiesiog del aiskumo
        
    }

}



  