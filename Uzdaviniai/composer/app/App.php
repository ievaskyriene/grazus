<?php
namespace Main;

use Main\Login;
use Main\User;
use App\DB\JsonDb as DB;


class App {
    const DIR = '/grazus/Uzdaviniai/composer/public/';
    const VIEW_DIR = './../view/';
    const URL = 'http://localhost:8080/grazus/Uzdaviniai/composer/public/';
    private static $params = [];

    private static $guarded = ['slaptas-1', 'addFunds', 'create', 'withdrawFunds', 'list',];
    public static $user = '';
    public static function start(){
        session_start();
        $param = str_replace(self::DIR, '', $_SERVER['REQUEST_URI']);
        self::$params = explode('/', $param);
        $db = new DB;

        if (count(self::$params) == 2 || count(self::$params) == 3) {
            if (self::$params[0] == 'users') {

                if (self::$params[1] == 'addUser') { 
                    $newUser = User::createNew();
                    $db->create($newUser);
                    $_SESSION['note'] = 'Sukurta nauja saskaita'.'<br>'.'
                    <label class = "saskaita" for="account"> Saskaitos Numeris: <br>
                        <input class = "account" type="text" name="saskaita" value="'.Generate::generateIBAN().'" readonly><br>
                    </label>';
                    App::redirect('users/create');
                }

                if (self::$params[1] == 'delete') {
                    $userkey = '';
                    $db = new DB;
                    $user =  $db->show(self::$params[2]);
                    if ($user['lesos'] == 0) {
                        $db->delete($_POST['delete']);
                        $_SESSION['note'] = 'Ištrinta kliento sąskaita';
                    } else {
                        $_SESSION['note'] = '<span style="color:red;">Sąskaitos, kurioje yra lėšų, ištrinti negalima</span>';
                    }
                    
                    self::redirect('users/list');


                    // $db->delete(self::$params[2]);
                    // $_SESSION['note'] = 'Saskaita istrinta';
                    // App::redirect('users/list');
                }

                if (self::$params[1] == 'addFunds') {
                    self::$user = self::$params[2];
                    $db->show(self::$user );
                    
                }

                if (self::$params[1] == 'withdrawFunds') {
                    self::$user = self::$params[2];
                    $db->show(self::$user );
                }


                if (self::$params[1] == 'add') {
                    if(!empty($_POST)){
                        self::$user = self::$params[2];
                    Money::plus(); 
                    self::redirect('./../public/users/addFunds/'.self::$params[2]);
                    }
                }


                if (self::$params[1] == 'deduct') {
                    if(!empty($_POST)){
                        self::$user = self::$params[2];
                    Money::minus();
                    self::redirect('./../public/users/withdrawFunds/'.self::$params[2]);
                    }
                }
            
                if (in_array(self::$params[0], self::$guarded)) {
                    if (!Login::auth()){
                        self::redirect('./../public/login');
                    }
                } 

                if (in_array(self::$params[1], self::$guarded)) {
                    if (!Login::auth()){
                        self::redirect('./../public/login');
                    }
                }

                if (file_exists(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php')) {
                    require(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php');
                }
               
            }
        }
        elseif (count(self::$params) == 1) {
            if (self::$params[0] == 'doLogin') {
                $login = new Login;
                if ($login->result()) {
                    self::redirect('users/create'); 
                }
                else {
                    self::redirect('./../public/login');
                }
            }


            if (in_array(self::$params[0], self::$guarded)) {
                if (!Login::auth()){
                    self::redirect('./../public/login');
                }
            }

            if (self::$params[0] == 'logout') {
                session_destroy();
                self::redirect('./../public/login');
            }
            if (file_exists(self::VIEW_DIR.self::$params[0].'.php')) {
                require(self::VIEW_DIR.self::$params[0].'.php');
            }

        }
    }
    
    public static function getUriParams()
    {
        return self::$params;
    }

    public static function redirect($param)
    {
        header('Location: '.self::URL.$param);
        die();
    }
}



