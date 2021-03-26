<?php
@session_start();
session_destroy();
setcookie('username','',1);
setcookie('id','',1);
setcookie('tipo_usuario','',1);
header("Location: index.html");
?>