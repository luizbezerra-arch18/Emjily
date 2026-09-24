<?php
// dados para ctar no banco de dados
$servidor = "db";
$usuario = "root";
$senha = "123";  
$banco = "biblioteca";

// isso é uma função que se conecta ao banco(Pra lembra)
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
?>