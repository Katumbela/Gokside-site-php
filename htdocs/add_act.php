<?php
include("db_config.php");


        $act = $_POST["act"];
        $desc = $_POST["descricao"];
        $local =  $_POST["localizacao"];
        $preco =  $_POST["preco"];
        $prov =  $_POST["pro"];
        $conta =  $_POST["conta"];


$target_dir = "expe/";

$target_file = $target_dir . basename($_FILES["image"]["name"]);

$foto=$_FILES['image']['name'];

move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);


        $inserir = "INSERT INTO exp_kulolesa (foto, usuario,	tipo_exp,	descricao, localizacao,		classificacao,	preco,	 aprovacao,	quando, provincia, telefone) VALUE ('$foto','$conta','$act','$desc','$local','0','10.000','Sim', now(), '$prov', '946445629')";
        $conexao = $conect ->query($inserir);

        


        
?>