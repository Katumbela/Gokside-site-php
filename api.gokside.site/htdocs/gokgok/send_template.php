


<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer";
require_once "PHPMailer/SMTP";
require_once "PHPMailer/Exception";


include('header.php');
header('Content-type: application/json');
 

$mail = new PHPMailer();

if (isset($_POST['send_email'])) {

            $subject = $_POST['subject'];
            $dest = $_POST['dest'];
            $api = $_POST['api'];
            $bod = $_POST['div_conteudo'];
            #$_POST['body'];

            
           

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
        /*
                    if ($usu['pago'] == "Nao") {
                        $acao_bem = false;
                        $mensagem = "Seu plano expirou active o seu plano para usar a api";
                        
                        $response = Array(
                            'status' => $acao_bem ? 'success' : 'error',
                            'response' => $mensagem
                        );
                        
                        echo json_encode($response);
                    }
        */


                                                
                        //SMTP Settings
                        $mail->isSMTP();
                        $mail->Host = "smtp.gmail.com";
                        $mail->SMTPAuth = true;
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


                       

                    if  ($dia <= $dia + 2 && $mes == Date("m") && $pago == "Nao" ) {
                        $acao_bem = true;
                        $mensagem = "Esta testando a api, nao tem ainda um plano assinado, o seu teste termina no dia $dia";
                    
                        $response = Array(
                            'status' => $acao_bem ? 'success' : 'error',
                            'response' => $mensagem
                        );
                        echo json_encode($response);
                        
                        for ($i=0; $i <= count($dest) ; $i++) { 
                            
                            $mail->AddAddress($dest, $nome);
                            $mail->send();
                            $mail->ClearAddresses();
                            
                        }
                        header('location: ../success');
                    }

                    else if ($dia + 2 >  Date('d') && $mes < Date("m")  && $pago == "Nao") {
                        $acao_bem = false;
                        $mensagem = "Seu plano expirou active o seu plano para usar a api";
                        
                        $response = Array(
                            'status' => $acao_bem ? 'success' : 'error',
                            'response' => $mensagem
                        );
                        
                        echo json_encode($response);
                        header('location: ../error');
                    }
                    else {
                        $acao_bem = true;
                        $mensagem = "$dia Sua requisicao foi executada com sucesso $nome";
                    
                        $response = Array(
                            'status' => $acao_bem ? 'success' : 'error',
                            'response' => $mensagem
                        );

                        
                        for ($i=0; $i <= count($dest) ; $i++) { 
                            
                            $mail->AddAddress($dest, $nome);
                            $mail->send();
                            $mail->ClearAddresses();
                            
                        }
                        echo json_encode($response);
                        header('location: ../success');
                    }
    
            }
            else {
                $acao_bem = false;
                $mensagem = "Invalid API key";
                
                $response = Array(
                    'status' => $acao_bem ? 'success' : 'error',
                    'response' => $mensagem
                );
                
                echo json_encode($response);
                header('location: ../error');
            }
           
}
else {
    $acao_bem = false;
    $mensagem = "Invalid API key";
    
    $response = Array(
        'status' => $acao_bem ? 'success' : 'error',
        'response' => $mensagem
    );
    
    echo json_encode($response);
}

?>




