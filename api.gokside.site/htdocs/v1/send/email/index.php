<?php

// Permitir solicitações de qualquer origem
header("Access-Control-Allow-Origin: *, http://localhost, http://localhost:5500");


/* Outros cabeçalhos CORS
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
*/
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Restante do seu código PHP...

// Por exemplo:
if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    // Se for uma solicitação OPTIONS, apenas retorne os cabeçalhos CORS e encerre a execução
    header("HTTP/1.1 200 OK");
    exit();
}


include('../../../gokgok/header.php');

use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

header('Content-type: application/json');
/*
if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    header("HTTP/1.1 200 OK");
    exit();
}
*/
// if  (isset($_POST['api_key']) && !empty($_POST['api_key'])) {

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    
    $subject = $_POST['subject'] ?? "TESTE DE EMAIL - API GOKSIDE";
    $dest = $_POST['receiver'] ?? "ja3328173@gmail.com";
    $api = $_POST['api_key'] ?? '';
    $bod = $_POST['body'] ?? "Teste de envio de email a partir da API da Gokside Inc";

    $inserir = "SELECT * FROM cadastro WHERE api_key = ?";
    $stmt = $conexao->prepare($inserir);
    $stmt->bind_param("s", $api);
    $stmt->execute();
    $set = $stmt->get_result();

    // echo mysqli_num_rows($set);
    if (mysqli_num_rows($set) >= 1) {
        while ($usu = mysqli_fetch_array($set)) {
            
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $quando = $usu['quando'];
            $pago = $usu['pago'];
            $dia = explode("-", explode(" ", $quando)[0])[2];
            $mes = explode("-", explode(" ", $quando)[0])[1];
            $ano = explode("-", explode(" ", $quando)[0])[0];
            $nome = $usu['nome'];
            $de = $_POST['from_email'] ?? $usu['email_set'];
            $empresa = $usu['empresa'];
            $email_from = $de;
            $app_pass = $usu['app_pass'];

            //SMTP Settings
            $mail->Username = $usu['email_set'];
            $mail->Password = $app_pass;
            $mail->Port = 465; //587
            $mail->SMTPSecure = "ssl"; //tls

            //Email Settings
            $body = $bod;

            $mail->isHTML(true);
            $mail->setFrom($email_from, $empresa);
            $mail->Subject = $subject;
            $mail->Body = $body;

            if ($usu['pago'] == "Nao") {
                $acao_bem = false;
                $mensagem = "Seu plano expirou. Ative o seu plano para usar a API";

                $response = Array(
                    'status' => $acao_bem ? 'success' : 'error',
                    'response' => $mensagem
                );

                echo json_encode($response);
            } else if ($dia <= $dia + 2 && $mes == Date("m") && $pago == "Nao") {
                $acao_bem = true;
                $mail->AddAddress($dest, $nome);

                if (!$mail->send()) {
                    // Se houver um erro ao enviar o email, imprima as informações de erro
                    $mensagem = "Erro no envio do email: " . $mail->ErrorInfo;
                    $response = Array(
                        'status' => $acao_bem ? 'success' : 'error',
                        'response' => $mensagem
                    );
                    echo json_encode($response);
                } else {
                    $mail->ClearAddresses();
                    $acao_bem = true;
                    $mensagem = "Seu email foi enviado com sucesso $nome";
                    $response = Array(
                        'status' => $acao_bem ? 'success' : 'error',
                        'response' => $mensagem
                    );
                    echo json_encode($response);
                }
            } else if ($dia + 2 > Date('d') && $mes < Date("m") && $pago == "Nao") {
                $acao_bem = false;
                $mensagem = "Seu plano expirou. Ative o seu plano para usar a API";

                $response = Array(
                    'status' => $acao_bem ? 'success' : 'error',
                    'response' => $mensagem
                );

                echo json_encode($response);
            } else {
                $acao_bem = false;
                $mail->AddAddress($dest, $nome);

                if (!$mail->send()) {
                    // Se houver um erro ao enviar o email, imprima as informações de erro
                    $mensagem = "Erro no envio do email $nome: " . $mail->ErrorInfo;
                    $response = Array(
                        'status' => $acao_bem ? 'success' : 'error',
                        'response' => $mensagem
                    );
                    echo json_encode($response);
                } else {
                    $mail->ClearAddresses();
                    $acao_bem = true;
                    $mensagem = "Seu email foi enviado com sucesso $nome";
                    $response = Array(
                        'status' => $acao_bem ? 'success' : 'error',
                        'response' => $mensagem
                    );
                    echo json_encode($response);
                }
            }
        }
    } else {
        $acao_bem = false;
        $mensagem = "Chave de API invalida. Registre-se primeiro em gokside.site para obter sua chave de API";

        $response = Array(
            'status' => $acao_bem ? 'success' : 'error',
            'response' => $mensagem
        );

        echo json_encode($response);
    }
// } else {
//     $acao_bem = false;
//     $mensagem = "Requisicao bloqueada. Voce nao tem permissao para fazer uma requisicao nesta API";

//     $response = Array(
//         'status' => $acao_bem ? 'success' : 'error',
//         'response' => $mensagem
//     );

//     echo json_encode($response);
// }

//  echo json_encode($_POST['api_key']);

?>
