
<?php 

Use Main\App;

if(isset($_SESSION['note'])) {
    echo '<br>', $_SESSION['note'];
    unset($_SESSION['note']);
};

?>
<form action="<?= Main\App::URL ?>doLogin" method="post">
<input type="text" name="user"> User Name<br>
<input type="password" name="password"> User Password<br>
<button type="submit">Jungtis</button>
</form>