<?php 
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST[ 'nome']));
$consulta = mysqli_real_escape_string($conexao, trim($_POST[ 'consulta']));
$medico = mysqli_real_escape_string($conexao, trim($_POST[ 'medico']));
$data = mysqli_real_escape_string($conexao, trim($_POST[ 'data']));

$sql = "INSERT INTO usuario (nome, consulta, medico, data_consulta) VALUES ('$nome', '$consulta', '$medico', '$data')";

if($conexao -> query($sql) === TRUE)
{
    $_SESSION['status_cadastro'] = true;
}

$conexao -> close();

header('Location: painel.php');
exit;
?>