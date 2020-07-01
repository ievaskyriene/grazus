<?php
namespace Main;

use Main\Login;
use Main\User;
use App\DB\JsonDb as DB;

//require '../app/Login.php';
class App {
    const DIR = '/grazus/Uzdaviniai/composer/public/';
    const VIEW_DIR = './../view/';
    const URL = 'http://localhost:8080/grazus/Uzdaviniai/composer/public/';
    private static $params = [];

    private static $guarded = ['slaptas-1', 'slaptas-2'];

    public static function start(){
        session_start();
        $param = str_replace(self::DIR, '', $_SERVER['REQUEST_URI']);
        self::$params = explode('/', $param);

        if (count(self::$params) == 2) {
            if (self::$params[0] == 'users') {

                if (self::$params[1] == 'addUser') {
                    //$saskaita = generateIBAN();
                    $newUser = User::createNew();
                    $db = new DB;
                    $db->create($newUser);

                    $_SESSION['note'] = 'Sukurta nauja saskaita'.'<br>';
                    self::redirect('users/create'); 
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
                    self::redirect('users/create'); //redirectas i create turi buti
                }
                else {
                    self::redirect('login');
                }
            }

            if (in_array(self::$params[0], self::$guarded)) {
                if (!Login::auth()){
                    self::redirect('login');
                }
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

