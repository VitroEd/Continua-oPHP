<?php 

include("../models/conexao.php");

$varAlunoNome = $_POST["alunoNome"];
$varAlunoCidade = $_POST["alunoCidade"];
$varAlunoSexo = $_POST["alunoSexo"];

mysqli_query($conexao, "insert into alunos (nome, cidade, sexo) values ('$varAlunoNome', '$varAlunoCidade', '$varAlunoSexo')");

header("location:../index.php");

?>