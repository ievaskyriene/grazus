<?php
require __DIR__ . '/bootstrap.php';

echo '<pre>';
print_r($_POST);

if(isset($_POST['action'])){
    if(isset($_POST['vardas']) && strlen($_POST['vardas'])<3){
        echo 'Iveskite teisinga varda';
        echo '<br>';}
    if(!isset($_POST['vardas'])){
        echo 'Iveskite varda';
        echo '<br>';}
    if(isset($_POST['pavarde']) && strlen($_POST['pavarde'])<3){
        echo 'Iveskite teisinga pavarde';
        echo '<br>';}
    if(!isset($_POST['vardas'])){
        echo 'Iveskite pavarde';
        echo '<br>';}
    if(!isset($_POST['asmenskodas'])){
        echo 'Iveskite asmens koda';
        echo '<br>';}
    if(isset($_POST['asmenskodas']) && strlen($_POST['asmenskodas']) < 11 )
    //|| substr($_POST['asmenskodas'], 0, 1) !='4' || substr($_POST['asmenskodas'], 0, 1) !='3' ||
       // substr($_POST['asmenskodas'], 0, 1) !='5' || substr($_POST['asmenskodas'], 0, 1) !='6'
        {
        $_SESSION['note'] = 'Iveskite teisinga asmens koda';
        echo substr($_POST['asmenskodas'], 0, 1);
        echo strlen($_POST['asmenskodas']);
        echo '<br>';
    }else{
        $data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);
        echo '<pre>';
        print_r($data);
        foreach ($data as $user) {
            if ($user['name'] == $_POST['vardas'] && $user['surname'] == $_POST['pavarde'] || $user['ID'] == $_POST['asmenskodas'] ) {
                $_SESSION['note'] = 'Useris '.$_POST['vardas'].$_POST['pavarde'] .' jau yra';
                header('Location: localhost:8080/grazus/Uzdaviniai/bankas/nauja_saskaita.php'); // GET
                die();
            }else{
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
                $_SESSION['note']= "<div>Jūsų sąskaitos numeris $saskaita</div>";
                echo '<br>';}
                $data[] = ['name' => $_POST['vardas'], 'surname' => $_POST['pavarde'], 'ID' => $_POST['asmenskodas'], 'IBAN' => $saskaita];
                file_put_contents(__DIR__ .'/data.json', json_encode($data));
                $_SESSION['note'] = 'Valio, pridėtas '.$_POST['vardas'].$_POST['pavarde'];
                echo "Saskaitos numeris <input type='text' name='asmenskodas' value = $saskaita readonly>";
                //header('Location: localhost:8080/grazus/Uzdaviniai/bankas/nauja_saskaita.php'); // GET
               // die();
            }
        } 
        echo '<pre>';
echo '-----';
print_r($data);     
} 


?>
<?php if(isset($_SESSION['note'])) {
    echo $_SESSION['note'];
    unset($_SESSION['note']);
}
?>
<div>
<form action="" method="post">
Įveskite varda <input type="text" name="vardas" value = "<?= $_POST['vardas'] ?? '' ?>">
<br>
Įveskite pavarde <input type="text" name="pavarde" value = "<?= $_POST['pavarde'] ?? '' ?>">
<br>
Įveskite asmens koda <input type="text" name="asmenskodas" value = "<?= $_POST['asmenskodas'] ?? '' ?>">
<br>

<button type="submit" name="action" value="">Atidaryti saskaita</button>
</form>
</div>