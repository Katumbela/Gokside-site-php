


<?php
include('header.php');
header('Content-type: application/json');

/*
use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer";
require_once "PHPMailer/SMTP";
require_once "PHPMailer/Exception";
*/


if (isset($_POST['api_key'])) {

            $subject = $_POST['subject'];
            $dest = $_POST['dest'];
            $api = $_POST['api'];
            $bod = $_POST['div_conteudo'];
            #$_POST['body'];

            /*echo $subject;
            echo "<br>";
            echo $dest;
            echo "<br>";
            echo $api;
            echo "<br>";
           # echo $bod;
           */



           

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
                        echo json_encode($response);
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
                        
                        echo json_encode($response);
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
            /*

            $mail = new PHPMailer();


            #$subject = "CADASTRO DE ESCOLA - AROTEC";
            $body = $body ;



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

            $mail->AddAddress($dest, $nome);
            #$mail->send();
            #$mail->ClearAddresses();




            if($set){
                echo json_encode("Sua candidatura foi submetida com sucesso, aguarde pelo nosso feedback por email, Obrigado!");
            }
            else{
                echo json_encode("Falha ao submeter a sua candidatura !");
            }*/

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




