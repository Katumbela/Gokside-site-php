<?php

include('db_config.php');



        $sql="SELECT img FROM photos_k WHERE id = 21";
        $resultado = $conect->query($sql);
        $dado= mysqli_fetch_assoc($resultado);
        
        echo json_encode($dado['img']);


?>