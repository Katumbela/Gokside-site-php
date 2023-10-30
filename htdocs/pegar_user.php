<?php
include("db_config.php");

$id = $_POST['id'];

$sql= "SELECT * FROM kulolesa WHERE id='$id'";
$resultado = $conect->query($sql);
$lista = Array();

while($dad = mysqli_fetch_array($resultado)){
     $lista[] = $dad;
     
}

echo json_encode($lista);

?>