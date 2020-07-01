<?php
namespace Main;

class User
{

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
            // if(Validate::valid_ak($_POST['asmenskodas']) != true){
            //     $_SESSION['note'] = 'Iveskite teisinga asmens koda';
            //     App::redirect('users/create');
            // }
        
            // $data = json_decode(file_get_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data2.json'),1);
            // _dc($data);
            // foreach($data as $user){
            //     if($user['ID'] == $_POST['asmenskodas']){
            //         $_SESSION['note'] = 'Toks asmens kodas jau yra';
            //         App::redirect('users/create');
            //     }
            // }
          
       
      
        }  

        return 
        ['name' => $_POST['vardas'], 
        'surname' => $_POST['pavarde'],
        'ID' => $_POST['asmenskodas'],
        'IBAN' =>  Generate::generateIBAN(),
        'lesos' => 0
        ];

        // $_SESSION['note'] = 'Sukurta nauja saskaita'.'<br>'.'
        // <label class = "saskaita" for="account"> Saskaitos Numeris: <br>
        //     <input class = "account" type="text" name="saskaita" value="'.Generate::generateIBAN().'" readonly><br>
        // </label>';
        // App::redirect('users/create');
    }
}