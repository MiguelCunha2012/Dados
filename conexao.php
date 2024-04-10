<?php

$hostaname = "localhost";
$bancodedados = "banco1";
$usuario = "root";
$senha = "";

$mysqli = new mysqli ($hostaname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno){
    echo "Falha ao conectar :(" . $mysqli->connect_errno . ")" . $mysql->connect_erro;
}
