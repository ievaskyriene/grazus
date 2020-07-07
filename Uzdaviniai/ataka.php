


  <?php 
  use Main\App;
  $data = json_decode(file_get_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data2.json'),1);

  foreach ($data as $key => $user){
?>
<div style="display:inline-block; width:100%; background-image:'https://i.pinimg.com/originals/f3/bd/84/f3bd8497e15399201b634714ec5ed390.jpg'; ">
<?php
    echo '
    <form action="http://localhost:8080/grazus/Uzdaviniai/composer/public/users/delete/'.$key.'" method="post"> 
    <button style = "background: transparent; border: none !important; font-size:0; width:300px; height:300px;" type="submit" name="delete" value="'.$user['IBAN'].'">Trinti</button> 
    </form>';
}
?>
<div>





