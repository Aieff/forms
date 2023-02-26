<?php 
include 'conexao.php';

$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];


$sql = "INSERT INTO `forms`(`nome`, `nascimento`, `celular`, `email`, `senha`, `csenha`, `q2`, `q3`, `q4`, `q5`, `q6`) 
VALUES ('$nome',
        $nascimento,
        '$celular',
        '$email',
        '$senha',
        '$q2',
        '$q3',
        '$q4',
        '$q5',
        '$q6')";

$inserir = mysqli_query ($conexao, $sql);

?> 