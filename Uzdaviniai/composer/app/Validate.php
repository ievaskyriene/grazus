<?php
namespace Main;


class Validate{


    public static function valid_ak($ak){
        $valid=false;
        if(strlen($ak)==11){
        if($ak[0]>2 && $ak[0]<7){
        if(checkdate(substr($ak,3,2),substr($ak,5,2),substr($ak,1,2))){
        $str=$ak[0]*1+$ak[1]*2+$ak[2]*3+$ak[3]*4+$ak[4]*5+$ak[5]*6+$ak[6]*7+$ak[7]*8+$ak[8]*9+$ak[9]*1;
        $str=$str%11;
        if($str==10){
            $str=$ak[0]*3+$ak[1]*4+$ak[2]*5+$ak[3]*6+$ak[4]*7+$ak[5]*8+$ak[6]*9+$ak[7]*1+$ak[8]*2+$ak[9]*3;
            $str=$str%11;
            if($str==10 && substr($ak,10,1)=="0")
            $valid=true;
            elseif($str==substr($ak,10,1))
            $valid=true;
        }
        elseif($str==substr($ak,10,1))
            $valid=true;
        }
        }
        }
        return $valid;
    }

}