<?php
include('header.php');

use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer";
require_once "PHPMailer/SMTP";
require_once "PHPMailer/Exception";



$escola = $_POST['escola'];
$resp = $_POST['resp'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$web = $_POST['web'];
$local = $_POST['local'];
$dat = $_POST['quando'];



$inserir = "INSERT INTO `escolas` (escola, responsavel, contacto, email, local, website , datas) VALUES ('$escola', '$resp', '$tel','$email','$local','$web','$dat')";
$set = $conexao->query($inserir);



$mail = new PHPMailer();


$subject = "CADASTRO DE ESCOLA - AROTEC";
$body = "
<center style='background: #FFFFFF; width: 100%'>
    <div style='padding: 1rem 2rem; background: #C1E0FF7A; max-height: 1200px; max-width: 700px'>
        
        <br>
        <br>
        <br>
        <img src='cid:email' style='border-radius: 100px;' height='120em' alt=''>
        <h1 style='color: #0066be'>CANDIDATURA RECEBIDA COM SUCESSO</h1>
        <br>
        <h3 style='text-align: center; color:rgb(66, 85, 95); max-width: 500px'>
            Olá {$resp}, recebemos a sua aplicação para o programa <b> AROTEC ROBOTIC SCHOOL</b>, entraremos em contacto muito em breve para proceder com a inscrição de seus estudantes
        </h3>
        <br>
        <br>
        <span style='color:rgba(71, 92, 105, 0.791); font-size: 12px'>
            Contactos: 938 811 659 &middot; arotec.info@gmail.com
        </span>
    </div>
    <div style='padding: 1rem 2rem; gap: 5px; background: rgb(67, 67, 67); max-height: 1200px; max-width: 700px'>
        
        <br>
        <img src='cid:logo' style='height: 1.5em' alt=''>
        <br>
        <span style='font-size: 11px; color:rgb(167, 166, 166); margin-top: 1rem;'>&copy; Copyright &middot; 2023</span>
    </div>
</center>
";



//SMTP Settings
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "arotec.unitelcode@gmail.com";
$mail->Password ='kpputtdjtcjqmjvo';
$mail->Port = 465; //587
$mail->SMTPSecure = "ssl"; //tls

//Email Settings
$mail->isHTML(true);
$mail->setFrom("academia@aro-tec.net", "AROTEC ROBOTIC SCHOOL - AROTEC");
    
$mail->Subject = $subject;
$mail->Body = $body;

    $mail->AddAddress($email, $nome);
    $mail->send();
    $mail->ClearAddresses();




if($set){
    echo json_encode("Sua candidatura foi submetida com sucesso, aguarde pelo nosso feedback por email, Obrigado!");
}
else{
    echo json_encode("Falha ao submeter a sua candidatura !");
}


?>




