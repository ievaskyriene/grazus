<?php
require __DIR__ . '/bootstrap.php';

print('<pre>' . print_r($_GET, true) . '</pre>');
if (!empty($_GET) && isset($_GET['color'])) $color = $_GET['color'];
else $color = 'white';
echo "<div style='background-color: $color; width: 100%; height: 100vh'>";
echo '<a href="'.$URL.'ieva_skyriene_7_2.php">link</a><br>';
echo "</div>";
