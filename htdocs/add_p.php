<?php

include('db_config.php');

$id = $_POST["id"];

$target_dir = "acomodacaoK/";

$target_file = $target_dir . basename($_FILES["image"]["name"]);

$foto=$_FILES['image']['name'];

move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);


$cadastrar = "INSERT INTO kulolesa (foto, nome, sobrenome, email, telefone, senha, estado, quando) VALUES ('usuario.webp','nome.','sobrenome','email','telefone.','senha', 'Usuario', now())";
$set = mysqli_query($conect , $cadastrar);


?>