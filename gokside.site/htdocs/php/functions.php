<?php
include("header.php");


if (isset($_POST['cadastrar'])) {
        
$nome = $_POST['nome'];
$empresa = $_POST['empresa'];
$tel = $_POST['telefone'];
$email = $_POST['email'];
$pack = $_POST['pacote'];
$senha = $_POST['senha'];
$pago = "Nao";  
$api_key = sha1($senha);

$ins= "INSERT INTO cadastro (nome, empresa, tel , email, senha, pacote, pago, api_key) VALUES('$nome','$empresa','$tel','$email', '$senha','$pack', '$pago', '$api_key')";
        $con = $conexao->query($ins);


if ($con) {
        
       $logg= "SELECT * FROM cadastro WHERE email = '$mail' AND senha ='$senha'";
       $con_logg = $conexao->query($logg);
       $num_rll = mysqli_num_rows($con_logg);
       
       if ($num_rll >= 1) {
               session_start();
               $log_datass = mysqli_fetch_array($con_logg);
               $_SESSION['id'] = $log_datass['id'];
               header("location: ../dashboard");
       }
       else {
               header("location: ../cadastro");
       }

        }
        else {
                
                echo"erro!".mysqli_error($conexao);
        }
    }




if (isset($_POST['entrar'])) {

        $mail_log = $_POST['email_log'];
        $senha_log = $_POST['senha_log'];
        
       
               
       $log= "SELECT * FROM cadastro WHERE email = '$mail_log' AND senha = '$senha_log'";
       $con_log = $conexao->query($log);
       $num_rl = mysqli_num_rows($con_log);
       
       if ($num_rl >= 1) {
               session_start();
               $log_datas = mysqli_fetch_array($con_log);
               $_SESSION['id'] = $log_datas['id'];
               header("location: ../dashboard");
       }
       else {
               header("location: ../login.php?ref=err");
       }
       }
?>