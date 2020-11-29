<?php

$host = "ec2-54-226-165-161.compute-1.amazonaws.com";
$user = "19003";
$pass = "19003rafaela";
$banco = "etim_19003";

$conexao = mysqli_connect($host, $user, $pass, $banco)
        or die("Problemas com a conexão do Banco de Dados");
mysqli_set_charset($conexao, "UTF8");
?>