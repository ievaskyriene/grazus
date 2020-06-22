<?php
echo "Im GET";
echo "<pre>";
print_r($_GET); // uzsipildo tik tada, kai duomenys perisusnciami form data formatu
echo "<pre>";
print_r($_POST);//uzsipildo tik tada, kai duomenys perisusnciami form data formatu
if(!empty($_POST)){
}

?>

<form action="?getoparametras=ggg&rrr=uuu" method="post">
Page: <input type="text" name="page">
<br>
orderBy: <input type="text" name="orderBy">
<br>
<button type="submit">Varyk</button>
</form>