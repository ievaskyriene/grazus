
<form action="" method="get">
 <input type="text" name="X" id="iksas" value = "<?= $_GET['X'] ?? '' ?>">
 <br>
 <input type="text" name="Y" id="iksas" value = "<?= $_GET['Y'] ?? '' ?>">
 <br>

 
<br>
<button type="submit" name="action" value="+">Sumator</button>
<button type="submit" name="action" value="-">Minusator</button>
</form>

<?php
//if(!empty($_GET)){
if(isset($_GET['X']) && isset($_GET['action']) && isset($_GET['Y'])){
    echo $_GET['X'] . $_GET['action'] . $_GET['Y'];
}
else{
    echo "Iveskite skaiciukus";
}

if ($_GET['action'] == '+') {
    echo '<h1>'.((int)$_GET['X']+(int)$_GET['Y']).'</h1>';
}
else if ($_GET['action'] == '-') {
    echo '<h1>'.((int)$_GET['X']-(int)$_GET['Y']).'</h1>';
}

echo "<pre>";
print_r($_GET);




// button gali netureti nieko bendro su mygtuko pavadinimu, reikia ristis prei value ar id
/*
<input type="text" id="tuscias">
<br>
<input type="submit" name = "action" value="Sumator"> */