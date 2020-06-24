<?php
require __DIR__ . '/bootstrap.php';
$data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);

?>
<div style="width: 100%; height: 100vh;">
<form action="" method="post">
<?php
echo '<pre>';

print_r($_POST);
foreach ($data as $user) {
    echo '<div style="display: flex;">';
    echo $user['name'];
    echo $user['surname'];
    echo $user['ID'];
    echo $user['IBAN'];
    echo '<button type="submit" name="action" value="">Trinti</button>';
    echo '</div>';

    if(isset($_POST['action'])){
        unset($user);
       // echo $user['name']. 'yra istrintas';
    }
}

echo '<pre>';

print_r($data);

file_put_contents(__DIR__ .'/data.json', json_encode($data));