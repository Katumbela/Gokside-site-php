<?php
include_once("db_config.php");


        $de = $_POST["de"];
        $nome = $_POST["nome"];
        $para =$_POST["para"];
        $msg =   $_POST["msg"];
        $id_s =  $_POST["id"];
        $tipo =  $_POST["tipo"];
        $code =   $de + $para;
        $dia = date("d");
        $dia_s = date("D");
        $hora = date("h");
        
        $datas= $dia_s.", ".$dia.", as ".$hora."h";


        $inserir = "INSERT INTO `menagens` (`de`, `para`, `msg`, `code`, `obs`,`quando`) VALUES ( '$de', '$para', '$msg', '$code','$tipo', '$datas')";
        
        $in = $conect->query($inserir);
        
        if($in){
                        echo json_encode("inserido");
        }
        
        else{
                        echo json_encode("falhou");
        }
        

        
?>