<?php
session_start();
include("header.php");


if (isset($_POST['id'])) {
        
    $targetDiretory = "uploads/";
    $targetFile = $targetDiretory . basename($_FILES['file']['name']);
    $id =  $_POST['id'];
    $file = basename($_FILES['file']['name']);

    if(move_uploaded_file($_FILES['file']["tmp_name"], $targetFile)) {
           

        $ins= "UPDATE cadastro SET logo = '$file' WHERE id='$id'";
        $con = $conexao->query($ins);

       header("location: ../success");
    }
    else {
        
        header("location: ../error");

    }

}


?>