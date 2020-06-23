<?php
require __DIR__ . '/bootstrap.php';

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
echo '<pre>';
print_r($_GET);

if(isset($_GET['action'])){
    if(isset($_GET['vardas']) && strlen($_GET['vardas'])<3){
        echo 'Iveskite teisinga varda';
        echo '<br>';}
    if(!isset($_GET['vardas'])){
        echo 'Iveskite varda';
        echo '<br>';}
    if(isset($_GET['pavarde']) && strlen($_GET['pavarde'])<3){
        echo 'Iveskite teisinga pavarde';
        echo '<br>';}
    if(!isset($_GET['vardas'])){
        echo 'Iveskite pavarde';
        echo '<br>';}
    if(!isset($_GET['asmenskodas'])){
        echo 'Iveskite asmens koda';
        echo '<br>';}
    if(isset($_GET['asmenskodas']) && strlen($_GET['asmenskodas']) < 11 || substr($_GET['asmenskodas'], 0, 1) !=4 || substr($_GET['asmenskodas'], 0, 1) !=3 ||
        substr($_GET['asmenskodas'], 0, 1) !=5 || substr($_GET['asmenskodas'], 0, 1) !=6){
        echo 'Iveskite teisinga asmens koda';
        echo '<br>';
    }else{
        echo "<div>Jūsų sąskaitos numeris $saskaita</div>";
        echo '<br>';}
} 

?>
<div>
<form action="" method="get">
Įveskite varda <input type="text" name="vardas" value = "<?= $_GET['vardas'] ?? '' ?>">
<br>
Įveskite pavarde <input type="text" name="pavarde" value = "<?= $_GET['pavarde'] ?? '' ?>">
<br>
Įveskite asmens koda <input type="text" name="asmenskodas" value = "<?= $_GET['asmenskodas'] ?? '' ?>">
<br>
<button type="submit" name="action" value="">Atidaryti saskaita</button>
</form>
</div>