<?php
include('db_config.php');

$query = $_POST["query"];
$tabela = $_POST["tabela"];

$sql= "SELECT * FROM $tabela WHERE descricao LIKE '%$query%'";
$resultado = $conect->query($sql);
$lista = Array();

while($dad = mysqli_fetch_array($resultado)){
     $lista[] = $dad;
     
}
echo json_encode($lista);

?>