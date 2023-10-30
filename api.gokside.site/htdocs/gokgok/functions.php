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
$api_key = base64_encode($senha."gok2023");

$ins= "INSERT INTO cadastro (nome, empresa, tel , email, senha, pacote, pago, api_key, logo, email_set, app_pass, template) VALUES('$nome','$empresa','$tel','$email', '$senha','$pack', '$pago', '$api_key', 'default.png', '-', '-', '01')";
        $con = $conexao->query($ins);


if ($con) {
        
       $logg= "SELECT * FROM cadastro WHERE email = '$email' AND senha ='$senha'";
       $con_logg = $conexao->query($logg);
       $num_rll = mysqli_num_rows($con_logg);
       
       if ($num_rll >= 1) {
               session_start();
               $log_datass = mysqli_fetch_array($con_logg);
               $_SESSION['id'] = $log_datass['id'];
               header("location: ../dashboard");
       }
       else {
                header("location: ../cadastro?e=".base64_encode("erro"));
                
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
               header("location: ../login.php?ref=".base64_encode("email/senha errada"));
       }
       }


       
if (isset($_POST['finish'])) {

        $mail_ativo = $_POST['emaila'];
        $senha_app = $_POST['senhaapp'];
        $id = $_POST['id'];
        
       
               
       $log= "UPDATE cadastro SET email_set = '$mail_ativo', app_pass = '$senha_app' WHERE id='$id'";
       $con_log = $conexao->query($log);
       
       
       
       if ($con_log) {
               
        echo "sucesso!";
               header("location: ../dashboard");
       }
       else {
               
        echo "Ocorreu um erro ao tentar salvar seus dados, tente novamente mais tarde!";
               #header("location: ../login.php?ref=".base64_encode("email/senha errada"));
       }
       }




?>