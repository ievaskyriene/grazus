<?php

class Pinigine{
    public $popieriniaiPinigai = [], $metaliniaiPinigai = [];
   
    public function ideti($kiekis){
        if($kiekis<=2) $this->metaliniaiPinigai[] = $kiekis;
        else $this->popieriniaiPinigai[] = $kiekis;
        return $this;
    }
    public function skaiciuoti(){
        echo '<br>'. (array_sum($this->metaliniaiPinigai) + array_sum($this->popieriniaiPinigai)).'<br>';
        echo '<br> METALAS'.count($this->$metaliniaiPinigai);
    }

    // public function monetos($coins, $m, $V) 
    // { 
    //     if ($V == 0) return 0; 

    //     $res = PHP_INT_MAX; 

    //     for ($i = 0; $i < $m; $i++) 
    //     { 
    //     if ($coins[$i] <= $V) 
    //     { 
    //     $sub_res = monetos($coins, $m, 
    //     $V - $coins[$i]); 

    //     if ($sub_res != PHP_INT_MAX &&  
    //     $sub_res + 1 < $res) 
    //     $res = $sub_res + 1; 
    //     } 
    //     } 
    //     return $res; 
    // } 
}