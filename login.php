<?php
require('./connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password' LIMIT 1";

$usuario = $conn->query($sql);

if($usuario){
    $row = $usuario->fetch_assoc();
    echo 'Bienvenido, '.$row['tipo_usuario'].' '.$row['username'];
}else{
    die('Error al iniciar sesión '.$conn->error);
}