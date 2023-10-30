


<?php

use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer";
require_once "PHPMailer/SMTP";
require_once "PHPMailer/Exception";

include('../../../gokgok/header.php');
header('Content-type: application/json');

/*
Datas Needed qith required postes values:

=============================================================================

POST[]:

subject: 
receiver:
api_key:
body:
email_from

=============================================================================

*/

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;

if (isset($_POST['api_key'])) {

            $subject = $_POST['subject'] ?? "TESTE DE EMAIL - API GOKSIDE";
            $dest = $_POST['receiver'] ?? Null;
            $api = $_POST['api_kei'] ?? Null;
            $bod = $_POST['body'] ?? "Teste de envio de email a partir da api da Gokside Inc";

         


           

            $inserir = "SELECT * FROM cadastro where api_key ='$api'";
            $set = $conexao->query($inserir);

            $usu = mysqli_fetch_array($set);


            if (mysqli_num_rows($set) >= 1) {
                    
                    $quando = $usu['quando'];
                    $pago = $usu['pago'];
                        
                    $dia = explode("-",explode(" ", $quando)[0])[2];
                    $mes = explode("-",explode(" ", $quando)[0])[1];
                    $ano = explode("-",explode(" ", $quando)[0])[0];
                        


                    $usu = mysqli_fetch_array($set);

                    $nome =  $usu['nome'];
                    
                    $de = $_POST['from_email'] ?? $usu['email_set'] !="-" ? $usu['email_set'] :  "contacto@gokside.site";
                    $email_from = $usu['email_set'] != "-" ?  $usu['email_set'] : "katumbela.meucarrinho@gmail.com";
                    $app_pass = $usu['app_pass'] != "-" ?  $usu['app_pass'] : "zzpmoxdrefyhqyzu";
     
                                                
                        //SMTP Settings
                      
                        $mail->Username = $email_from;
                        $mail->Password = $app_pass;
                        $mail->Port = 465; //587
                        $mail->SMTPSecure = "ssl"; //tls

                        //Email Settings

                        #$subject = "CADASTRO DE ESCOLA - AROTEC";
                        $body = $bod ;


                        $mail->isHTML(true);
                        $mail->setFrom($de, $nome);
                            
                        $mail->Subject = $subject;
                        $mail->Body = $body;



                    if ($usu['pago'] == "Nao") {
                        $acao_bem = false;
                        $mensagem = "Seu plano expirou active o seu plano para usar a api";
                        
                        $response = Array(
                            'status' => $acao_bem ? 'success' : 'error',
                            'response' => $mensagem
                        );
                        
                        echo json_encode($response);
                    }

                    else if  ($dia <= $dia + 2 && $mes == Date("m") && $pago == "Nao" ) {
                        $acao_bem = true;
                        $mensagem = "Esta testando a api, nao tem ainda um plano assinado, o seu teste termina no dia $dia";
                    
                        $response = Array(
                            'status' => $acao_bem ? 'success' : 'error',
                            'response' => $mensagem
                        );
                        
                        for ($i=0; $i <= count($dest) ; $i++) { 
                            
                            $mail->AddAddress($dest, $nome);

                           if ( $mail->send()) {
                                 $mail->ClearAddresses();
                                 echo json_encode($response);
                           }
                            
                        }
                       
                    }

                    else if ($dia + 2 >  Date('d') && $mes < Date("m")  && $pago == "Nao") {
                        $acao_bem = false;
                        $mensagem = "Seu plano expirou active o seu plano para usar a api";
                        
                        $response = Array(
                            'status' => $acao_bem ? 'success' : 'error',
                            'response' => $mensagem
                        );
                        
                        echo json_encode($response);
                    }
                    else {
                        $acao_bem = true;
                        $mensagem = "Sua requisicao foi executada com sucesso $nome";
                    
                        $response = Array(
                            'status' => $acao_bem ? 'success' : 'error',
                            'response' => $mensagem
                        );

                          if ( $mail->send()) {
                                 $mail->ClearAddresses();
                                 echo json_encode($response);
                           }
                    }
            
            }
            else {
                $acao_bem = false;
                $mensagem = "Invalid API key, register first at gokside.site to get your api key";
               
                $response = Array(
                    'status' => $acao_bem ? 'success' : 'error',
                    'response' => $mensagem
                );
                
                echo json_encode($response);
            }
           

    }

    else {
        $acao_bem = false;
        $mensagem = "Requisicao barrada, nao tem permissao para fazer alguma requisicao nesta api";
    
        $response = Array(
            'status' => $acao_bem ? 'success' : 'error',
            'response' => $mensagem
        );
        
        echo json_encode($response);
    }

?>




