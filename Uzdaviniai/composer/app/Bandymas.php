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

    private static $guarded = ['slaptas-1', 'slaptas-2'];
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
                    $db->delete(self::$params[2]);
                    $_SESSION['note'] = 'Saskaita istrinta';
                    App::redirect('users/list');
                }

                if (self::$params[1] == 'addFunds') {
                    self::$user = self::$params[2];
                    $db->show(self::$user );
                    //require(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php');
                }

                if (self::$params[1] == 'add') {
                    if(!empty($_POST)){
                        self::$user = self::$params[2];
                        //$db->show(self::$user );
                    Money::plus();

                //  if (self::$params[1] == 'list') {
                //     require(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php');
                // require('./../view/users/list.php');
                //  } else {
                //     self::redirect('login');
                // }
                    
                    //require('./../view/users/addFunds');
                //    header('Location: grazus/Uzdaviniai/composer/public/users/add'.$params[2]); //ciataisyti
                //     die();

                    }else{
                        App::$user = $params[2];
                        // self::$user = self::$params[2];
                        // $db->show(self::$user );
                        require('./../view/users/addFunds');
                    }
                }
            


                // if (file_exists(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php')) {
                //     require(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php');
                // }
               
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

            if (self::$params[1] == 'list') {
                require('./../view/list.php');
                 } else {
                    self::redirect('login');
                }
            

            if (in_array(self::$params[0], self::$guarded)) {
                if (!Login::auth()){
                    self::redirect('login');
                }
            }


            // if (file_exists(self::VIEW_DIR.self::$params[0].'.php')) {
            //     require(self::VIEW_DIR.self::$params[0].'.php');
            // }
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

