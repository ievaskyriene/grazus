<?php

class Stikline{

    private $turis;
    private $kiekis = 0;

    public function __construct(int $turis)
    {
        $this->turis = $turis;
    }

    public function ipilti($kiekis){
        $this->kiekis += $kiekis;
        $this->kiekis = min($this->turis, $this->kiekis);
        return $this;
        }

    public function ispilti (){
            $kiekis = $this->kiekis / 2;
            $this->kiekis = $this->kiekis / 2;
            return $kiekis;
        }
    

    // public $turis = 0;
    // public $kiekis = 0;


    // public function ipilti($kiek){
    //     $this->kiekis += $kiek;
    //     if($this->kiekis > $this->turis){
    //         $this->kiekis = $this->turis;
    //     }
    //     return $this->kiekis;
    // }

    // public function ispilti ($kiek){
    //     $this->kiekis -= $kiek;
    //     return $this->kiekis;
    // }
}