<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $rawData = file_get_contents("php://input");
    $rawData = json_decode( $rawData,1);
    if($rawData['answer'] == 111){
        $response = 'Pasirink kazka';
    }
    else{
        $response = ($rawData['answer'] == 3) ? 'Teisingai' : 'Blogai';
    }
    $response = json_encode(['atsakymas' => $response]);
    echo $response;
   // _d($rawData);
die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js" defer></scrip>
    <scrip src="http://192.168.64.2/grazus/briedis.js" defer></scrip>
    <title>Briedžių Testas</title>
    <style>
label {
    display: inline-block;
    width: 100px;
}
    </style>
</head>
<body>

<h1 id="top">Pradekite testa</h1>
<br>
<div style = "display:flex;">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Elk-telemark.jpg/1200px-Elk-telemark.jpg" alt="briedis" width="300px">
 <br>
 <form action="" method="post">
 <div style = "margin:30px;">Atspek kas cia toks <br><br>
 <input type="radio" id = "_1" name ="gyvunas" value="1">
 <label for="_1">Suo</label> <br>

 <input type="radio" id = "_2" name ="gyvunas" value="2">
 <label for="_2">Katinas</label> <br>

 <input type="radio" id = "_3" name ="gyvunas" value="3">
 <label for="_3">Briedis</label> <br>

 <input type="radio" id = "_4" name ="gyvunas" value="4">
 <label for="_4">Vilkas</label> <br>

 <br>
<button type="button" name= "button" value = "pressed">Speju!</button>

</div>
</form>
</div>
</body>
</html><?php

