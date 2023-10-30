<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kulolesa | Home </title>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css.map">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php

include('db_config.php');


$email = $_POST['email'];

$senha = $_POST['senha'];


$consultar = "SELECT * FROM kulolesa WHERE email = '".$email."' AND senha = '".$senha."' ";
$set = mysqli_query($conect , $consultar);
$res = mysqli_fetch_assoc($set);

if($res >= 1){
    echo json_encode($res);
 } 

 else{
    echo json_encode("false");
 } 

?>

</body>
</html>
