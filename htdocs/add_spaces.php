<?php
include("db_config.php");


        $espaco = $_POST["espaco"];
        $desc = $_POST["descricao"];
        $local = $_POST["localizacao"];
        $dispo = $_POST["disp"];
        $preco = $_POST["preco"];
        $prov = $_POST["prov"];
        $id = $_POST["conta"];



$target_dir = "acomodacaoK/";

$target_file = $target_dir . basename($_FILES["image"]["name"]);

$foto=$_FILES['image']['name'];

move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);


        $inserir = "INSERT INTO acom (foto, usuario,	espaco,	descricao, localizacao,	preco,	classificacao,	disponivel,	provincia, aprovacao,	quando, ate, telefone) VALUE ('$foto','$id','$espaco','$desc','$local','$preco','Vazio','Sim','$prov','nao', now(), '$dispo', '946445629')";
        $conexao = $conect ->query($inserir);

        



        
?>