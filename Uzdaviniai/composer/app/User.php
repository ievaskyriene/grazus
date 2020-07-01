<?php
namespace Main;

use Main\Validate;
use Main\Generate;

class User
{
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


    public static function createNew(){
        
        if(isset($_POST["action"]) && !empty($_POST)){
            if(strlen($_POST['vardas'])<3){
                $_SESSION['note'] = 'Iveskite teisinga varda';
                App::redirect('users/create'); 
            }
            
            if(strlen($_POST['pavarde'])<3){
                $_SESSION['note'] = 'Iveskite teisinga pavarde';
                App::redirect('users/create');
            }
            if(self::valid_ak($_POST['asmenskodas']) != true){
                $_SESSION['note'] = 'Iveskite teisinga asmens koda';
                App::redirect('users/create');
            }
            //     _dc($_POST);

            $data = json_decode(file_get_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data2.json'),1);
            _dc($data);
            foreach($data as $user){
                if($user['ID'] == $_POST['asmenskodas']){
                    $_SESSION['note'] = 'Toks asmens kodas jau yra';
                    App::redirect('users/create');
                }
            }
          
            return 
            [
            'name' => $_POST['vardas'], 
            'surname' => $_POST['pavarde'],
            'ID' => $_POST['asmenskodas'],
            'IBAN' =>  Generate::generateIBAN(),
            'lesos' => 0
            ];
      
        }  

       

        // $_SESSION['note'] = 'Sukurta nauja saskaita'.'<br>'.'
        // <label class = "saskaita" for="account"> Saskaitos Numeris: <br>
        //     <input class = "account" type="text" name="saskaita" value="'.Generate::generateIBAN().'" readonly><br>
        // </label>';
        // App::redirect('users/create');
    }
}