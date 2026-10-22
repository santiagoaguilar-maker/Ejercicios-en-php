<form action="" method="post">
    <label for="name">Nombre</label>
    <input type="text" name="name">
    <label for="email">Email</label>
    <input required type="email" name="email">
    <label for= "password">Contraseña</label>
    <input type="password" name="password">

    <input type="submit" value="Enviar" name="enviar">
</form>
<?php
if(isset($_POST['enviar'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $pass = $_POST['password'];

    echo 'El nombre registrado es : '.$name.' su email es: '.$email. ' la contraseña es: '. 
    $pass.'.';
}

