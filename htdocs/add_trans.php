<?php
include_once("db_config.php");


        $marca = $_POST["marca"];
        $desc =  $_POST["descricao"];
        $trajecto =  $_POST["trajecto"];
        $preco =   $_POST["preco"];
        $prov =  $_POST["prov"];
        $lugares =   $_POST["lugares"];
        $onde =   $_POST["onde"];
        $tel =   $_POST["tel"];
        $id =   $_POST["conta"];
        


$target_dir = "trans/";

$target_file = $target_dir . basename($_FILES["image"]["name"]);

$foto=$_FILES['image']['name'];

move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);


        $inserir = mysqli_query($conect, "INSERT INTO `transp` (`conta`, `foto_carro`, `marca`, `descricao`, `trajecto`, `para`, `classificacao`, `preco`, `lugares`, `aprovacao`, `quando_sai`, `quando`, `provincia`, `telefone`) VALUES ( '$id', '$foto', '$marca', '$desc', '$trajecto', '$onde', '0', '$preco', '$lugares', 'Sim', 'null', now(), '$prov', '$tel')");
        ?>