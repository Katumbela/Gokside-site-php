<?php
include("db_config.php");


        $id_serv = $_POST["id"];
        $para = $_POST["para"];
        $servico = $_POST["servico"];
        $obs = $_POST["obs"];
        $quem = $_POST["quem"];
        $meu_id = $_POST["quemm"];


        $inserir = "INSERT INTO agendamento (id_servico, quem,id_quem, servico, para, quando, obs) VALUE ('$id_serv','$quem', '$meu_id', '$servico', '$para', now(), '$obs')";
        $conexao = $conect ->query($inserir);

        

if($conexao){
    echo json_encode("agendado com sucesso, será contactado");
}
else{
    
    echo json_encode(mysqli_error($conect));
    
}

        
?>