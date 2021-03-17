<?php

require('./connection.php');

$username = $_POST['username'];
$password = $_POST['password'];
$cedula = $_POST['cedula'];
$tipo_usuario = $_POST['tipo_usuario'];

$sql = "INSERT INTO usuarios (username, `password`, cedula, tipo_usuario) 
VALUES ('$username', '$password', '$cedula', '$tipo_usuario')";

if($conn->query($sql)){
    header('Location: ./login.html');
}else{
    die('Error al ingresar datos '.$conn->error);
}