<?php

include('db_config.php');

$id = $_POST["id"]

$cadastrar = "INSERT INTO kulolesa (foto, nome, sobrenome, email, telefone, senha, estado, quando) VALUES ('usuario.webp','nome.','sobrenome','email','telefone.','senha', 'Usuario', now())";
$set = mysqli_query($conect , $cadastrar);

if($set){
               echo json_encode("true");
 } 

 else{
               echo json_encode("false");
 } 

?>