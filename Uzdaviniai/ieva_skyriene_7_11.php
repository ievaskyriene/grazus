<?php
session_start();

if(!empty($_POST) && isset( $_POST['zaidejas1']) && isset( $_POST['zaidejas2'])){
    $_SESSION['zaidejas1'] = $_POST['zaidejas1'];
    $_SESSION['zaidejas2'] = $_POST['zaidejas2'];
 
}

$zaidejas1 = $_SESSION['zaidejas1'] ?? '';
$zaidejas2 = $_SESSION['zaidejas2'] ?? '';
$count = 0;
$count = $_SESSION['count'] ?? 0;
$count++;

$_SESSION['count'] = $count;


echo '<pre>';
print_r($_SESSION);
print_r($_POST);

if(isset($_POST['action'])){
    echo $zaidejas1;
    echo '<form action="" method="post">';
    echo "<button type='submit' name='kauliukas' value=''>Mesti kauliuka</button>";
    echo '</form>'; 
}

if(isset($_POST['kauliukas'])){
    if($_SESSION['count']%2 == 1){
        $rezultatas1 = $_SESSION['rezultatas1'] ?? 0;
        $rezultatas1+=rand(1,6);
        $_SESSION['rezultatas1'] =  $rezultatas1;
        echo $zaidejas2;
        }
    if($_SESSION['count']%2 == 0){
        $rezultatas2 = $_SESSION['rezultatas2'] ?? 0;
        $rezultatas2+=rand(1,6);
        $_SESSION['rezultatas2'] =  $rezultatas2;
        echo $zaidejas1;
        }
    echo '<form action="" method="post">';
    echo "<button type='submit' name='kauliukas' value=''>Mesti kauliuka</button>";
    echo '</form>';
}
if (isset($_SESSION['rezultatas1']) && $_SESSION['rezultatas1']>=30 || isset($_SESSION['rezultatas2']) && $_SESSION['rezultatas2'] >= 30){
   if($_SESSION['rezultatas1']>$_SESSION['rezultatas2']){
        echo 'Zaidimas baigtas, laimejo ' .$zaidejas1.'.';
   }else{echo 'Zaidimas baigtas, laimejo ' .$zaidejas2.'.';}
   
   $count = 0;
    session_destroy();
}

?>
<form action="" method="post">
<p><input type="text" name="zaidejas1" id="iksas" value = "<?= $_SESSION['zaidejas1'] ?? '' ?>">
<?= $_SESSION['rezultatas1'] ?? '' ?></p>
<br>
<p>
<input type="text" name="zaidejas2" id="iksas" value = "<?= $_SESSION['zaidejas2'] ?? '' ?>">
<?= $_SESSION['rezultatas2'] ?? '' ?></p>
<br>

<button type="submit" name="action" value="">Pradeti</button>
</form>








