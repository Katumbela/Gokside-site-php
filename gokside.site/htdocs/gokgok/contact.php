<?php
include('header.php');


$nome = $_POST['nome'];
$snome = $_POST['snome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['msg'];

$hora = "as ".date("H")." e ".date("t");
$hoje = "dia ".date("d")." de ".date("m")." de ".date("Y");


$target_dir = "../contacts/";

$target_file = $target_dir . basename($_FILES["file"]["name"]);

$capa=$_FILES['file']['name'];

move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);


$sql = "INSERT INTO `contactos` (`nome`, `sobrenome`, `email`, `assunto`, `mensagem`, `quando`, `hora`, `documento`) VALUES (  '$nome', '$snome', '$email', '$assunto', '$msg', now(), '$hora', '$capa')";
$con = $conexao->query($sql);

?>