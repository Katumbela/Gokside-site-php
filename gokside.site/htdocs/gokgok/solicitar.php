<?php
session_start();
include("header.php");


$quem = $_SERVER['SERVER_ADDR'];
$h =  date("h");
$hora = "as ".$h." e ".date("m")." minutos.";
$email = $_POST['email'];
$prod = $_POST['prod'];
$quando = date("d")." de ".date("M")." de ".date("Y");




$ins= "INSERT INTO loja (email, produto, quem , quando, hora, obs) VALUES('$email','$prod','$quem','$quando','$hora', 'observação')";
$con = $conexao->query($ins);

?>