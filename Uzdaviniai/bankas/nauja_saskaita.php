<?php
require __DIR__ . '/bootstrap.php';

if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: ./login.php');
    die();
}

function generateIBAN(){
    $bankoKodas = 73000;
    $kontroliniaiSkaiciai = rand(0,9).rand(0,9);
    $senasNrArr = [];
    $n = 0;
    for($i=0; $i<11; $i++){
        $n = rand(0,9);
        array_push($senasNrArr, $n);
    }
    $senasNumeris = implode("", $senasNrArr);
    $saskaita = "LT".$kontroliniaiSkaiciai.$bankoKodas.$senasNumeris;
    return $saskaita;
} 
function valid_ak($ak){
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

if(isset($_POST["action"]) && !empty($_POST)){
    if(strlen($_POST['vardas'])<3){
        $_SESSION['note'] = 'Iveskite teisinga varda';
        header('Location: http://localhost:8080/grazus/Uzdaviniai/bankas/nauja_saskaita.php'); // GET
        die();
    }
    
    if(strlen($_POST['pavarde'])<3){
        $_SESSION['note'] = 'Iveskite teisinga pavarde';
        header('Location: http://localhost:8080/grazus/Uzdaviniai/bankas/nauja_saskaita.php'); // GET
        die();
    }
    if(valid_ak($_POST['asmenskodas']) != true){
        $_SESSION['note'] = 'Iveskite teisinga asmens koda';
        header('Location: http://localhost:8080/grazus/Uzdaviniai/bankas/nauja_saskaita.php'); // GET
        die();
    }

    $data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);
    foreach($data as $user){
        if($user['ID'] == $_POST['asmenskodas']){
            $_SESSION['note'] = 'Toks asmens kodas jau yra';
            header('Location: http://localhost:8080/grazus/Uzdaviniai/bankas/nauja_saskaita.php'); // GET
            die();
        }
    }
  
    $data[] = ['name' => $_POST['vardas'], 'surname' => $_POST['pavarde'], 'ID' => $_POST['asmenskodas'], 'IBAN' => generateIBAN(), 'lesos'=>0];
    file_put_contents(__DIR__ .'/data.json', json_encode($data));
    $_SESSION['note'] = 'Sukurta nauja saskaita'.'<br>'.'
    <label class = "saskaita" for="account"> Saskaitos Numeris: <br>
        <input class = "account" type="text" name="saskaita" value="'.generateIBAN().'" readonly><br>
    </label>';
    header('Location: http://localhost:8080/grazus/Uzdaviniai/bankas/nauja_saskaita.php'); // GET
    die();
}    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<style>
    .container{
        margin-left: 50px;
        margin-top:50px;
        font-family: 'Montserrat', sans-serif;
    }
    h2{
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
    }
    form{
        font-family: 'Montserrat', sans-serif;
    }
    label{
        font-family: 'Montserrat', sans-serif;
    }
    input{
        font-family: 'Montserrat', sans-serif;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    button{
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
    }
    .message{
        margin-top:20px;
        margin-bottom:20px;
        font-family: 'Montserrat', sans-serif;
    }

</style>
<body>
    <div class="container">
        <div class="form">
            <h2>Iveskite duomenis</h2>
                <p class = "message"><?php  
                   if(isset($_SESSION['note'])) {
                    echo $_SESSION['note'];
                    unset($_SESSION['note']);
                }
                ?></p><br>
            <form action="" method="post">
                <label for="name"> Vardas: <br>
                    <input type="text" name="vardas" required> <br>
                </label> 
                <label for="surname"> Pavarde: <br>
                    <input type="text" name="pavarde" required> <br>
                </label>
                <label for="ID"> Asmens kodas:  <br>
                    <input type="number" name="asmenskodas" required><br>
                </label>
                <button type="submit" name = "action">Sukurti saskaita</button>
            </form>
        </div>
    </div>

    <div class="menu"  style="padding-top:200px;">
        <a href="./saskaitu_sarasas2.php">Perziureti saskaitu sarasa <i class="text-icon icon-external-link"></i></a><br>
        <a href="./login.php?logout">Atsijungti</a><br>
    </div>
</body>
</html>
