<?php
include('db_config.php');

$para = $_POST["text"];

$sql= "SELECT * FROM transp WHERE para LIKE '%$para%'";
$resultado = $conect->query($sql);
$lista = Array();

while($dad = mysqli_fetch_array($resultado)){
     $lista[] = $dad;
     
}

echo json_encode($lista);

?>