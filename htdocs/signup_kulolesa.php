<?php

include_once('db_config.php');


$nome = $_POST['nome'];

$sobrenome = $_POST['snome'];

$telefone = $_POST['telefone'];

$email = $_POST['email'];

$senha = $_POST['senha'];


$cadastrar = "INSERT INTO kulolesa (foto, nome, sobrenome, email, telefone, senha, estado, quando) VALUES ('usuario.webp','".$nome."','".$sobrenome."','".$email."','".$telefone."','".$senha."', 'Usuario', now())";
$set = mysqli_query($conect , $cadastrar);

if($set){
               echo json_encode("true");
 } 

 else{
               echo json_encode("false");
 } 

?>