<?php

    $values = 'ABCDEFGHIJKL';
    $checkboxes1 = '<br>';
    for ($j=0; $j <rand(3,10); $j++) {
        $key1 = substr($values, $j, 1);
        $checkboxes1 .= "$key1<input type=\"checkbox\" name=\"$key1\" value=\"$key1\"><br>";
    }
    $checkboxes1 .='<button name="pushed1" value="'.$j.'">PUSH</button>';
    $colorBg4 = 'black';
    $checked1 = '';
        if (isset($_POST['pushed1'])) {
            $colorBg4 = 'white';
            $checkboxes1 = "";
            $checked1 = '<br><br><br>Paspausta: <span style="font-size:30px"> '.(count($_POST)-1).'</span>,<br>sugeneruota: <span style="font-size:30px"> '.$_POST['pushed1'].' </span>';
        }
        echo "<div style=\"width:20%; height:30vh; color:red; text-align:center; background-color: $colorBg4\">";
        echo $checked1;
        ?>
        <form action="" method="post">
        <?= $checkboxes1 ?>
        </form>
        <?php
        echo '</div>';