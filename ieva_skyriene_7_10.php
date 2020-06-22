<?php
session_start();
if (!isset($_SESSION['letters_random']))
{
  $_SESSION['letters_random'] = rand(3,10);
}
$lettersLength = $_SESSION['letters_random'];

echo "<pre>";
$backgroundColor='black';
$checkedArr = [];
$result = '';

if( isset($_POST['button']) && !isset($_POST['letters']) ){
    $count = [];
    $result = 'Nieko nepasirinkote';
    $backgroundColor = 'white';
    echo '<div style="width: 100%; height: 100vh; background-color:white"';
    echo '<h2>'.$result.'</h2>';
    echo '</div>';
}else if( isset($_POST['letters'])  ){
    $checkedArr = $_POST['letters'];
    $count = count($checkedArr);
    $result = 'Pasirinkta '.$count.' raides. Sugeneruota '.$lettersLength.' raides.'; 
    $backgroundColor = 'white';
    echo '<div style="width: 100%; height: 100vh; background-color:white"';
    echo '<h2>'.$result.'</h2>';
    echo '</div>';
    unset($_SESSION['letters_random']); 
} 

?>
<div style="width: 100%; height: 100vh; background-color:<?= $backgroundColor ?>">
<form action="" method="post">
<?php
    $letter = "";
    $alphabet = range('A', 'Z');
    for($i = 0; $i<$lettersLength; $i++){
        $letter = $alphabet[$i];
        echo "<br>";
        echo '<input type = "checkbox" name="letters[]" value = '.$i.'; style="color:white;">';
        echo '<label for="letters" style="color:white;">'.$letter.'</label><br>';
       
    }
    $previous = $lettersLength;
   
?>
<button type="submit" name = "button" value = "pressed">Spausti</button>
</form>
<h1><?= $result ?></h1>
</div>


 