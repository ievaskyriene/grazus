<?php
session_start();
$x = $_SESSION['x'] ?? 0;
echo $x;
$x+=rand(1,5);


$_SESSION['x'] = $x;