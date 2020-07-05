<?php
namespace Main;
use App\DB\JsonDb as DB;
use Main\App;

class Money {

    public static function plus(){
        $DB = new DB;
        $userData = $DB->show(App::$user);
        if ($_POST['prideti'] > 0) {
            $userData['lesos'] += $_POST['prideti'];    
            $DB->update(App::$user, $userData);
            $_SESSION['note'] = 'Lėšos įskaitytos';
        } else {
            $_SESSION['note'] = '<span style="color:red;">Įveskite sumą - teigiamą skaičių</span>';
        }
    }

    public static function minus(){
        $DB = new DB;
        _d(App::$user);
        $userData = $DB->show(App::$user);

        if ($_POST['atimti'] <= $userData['lesos'] && $_POST['atimti'] > 0) { 
            $userData['lesos'] -= $_POST['atimti'];    
            $DB->update(App::$user, $userData);
            $_SESSION['note'] = 'Lėšos nurašytos';
        } elseif ($_POST['lesos'] < 0) {
            $_SESSION['note'] = '<span style="color:red;">Suma negali būti neigiama</span>';
        }
         else {
            $_SESSION['note'] = '<span style="color:red;">Sąskaitoje nepakanka lėšų.</span>';
        }
      
    }
}

    
     
    

