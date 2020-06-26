<?php
require __DIR__ . '/bootstrap.php';


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
    if(isset($_POST['asmenskodas']) && strlen($_POST['asmenskodas']) != 11 ){
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
    $_SESSION['note'] = 'Sukurta nauja saskaita';
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
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
    
</head>
<body>

    <div class="container">
        <div class="form">
            <h1>Iveskite duomenis</h1>
                <p class="message"><?php  
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
                <label for="account"> Saskaitos Numeris: <br>
                    <input type="text" name="saskaita" value="<?=generateIBAN()?>" readonly><br>
                </label>
                <button type="submit" name = "action">Sukurti saskaita</button>
            </form>

        </div>
    </div>

</body>
</html>