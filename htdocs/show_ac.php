<?php
include("db_config.php");

$sql= "SELECT * FROM acom";
$resultado = $conect->query($sql);
$lista = Array();

while($dad = mysqli_fetch_array($resultado)){
     $lista[] = $dad;
     
}

echo json_encode($lista);

?>