<?php

$conn = new mysqli('localhost','root','','sistema');

if(!$conn){
    die('Error en la conexión a la base de datos '.$conn->error);
}