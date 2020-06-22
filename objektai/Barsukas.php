<?php

class Barsukas extends MiskoTevas
{
    public $kailis = 'juodas';
    private $akiuSkaicius = 3;

    public function __construct($kailis = 'raudonas'){  //konstruktorius apraomas taip, bet egzamine dar vis yra klausimas kai konstruktorius aprasomas klases pavadinimu
        $this->kailis = $kailis;
    }

    public function __call($name, $arguments){  //sitas daznai naudojamas
        echo $name;
    }

    public function balsas()
    {
        echo '<br><br><br>Bar Bar<br><br><br>';
        return $this; // this yra objekto placeholderis
    }

    public function setAkiuSkaicius(int $akiuSkaicius)
    {   
        if($akiuSkaicius > 2){
            echo '<br><br><br>BLOGAI<br><br><br>';
            return;
        }
        $this -> akiuSkaicius = $akiuSkaicius;
    }

    public function getAkiuSkaicius()
    {   
        return $this -> akiuSkaicius;
    }

}

//objektinis programavimas buvo sukurta taml kad prie projekto  dirbti galetu keli zmones;