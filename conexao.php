<?php

define('HOST' , '127.0.0.1');
define('USUARIO' , 'root');
define('SENHA', '31323817j');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ( 'Nao foi possivel acessar');

?>

