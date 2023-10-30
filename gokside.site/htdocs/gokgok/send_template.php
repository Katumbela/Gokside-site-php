<?php
include('header.php');

use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

header('Content-type: application/json');

if (isset($_POST['api'])) {
    $subject = $_POST['subject'];
    $dest = isset($_POST['dest']) ? array_map('trim', explode(',', $_POST['dest'])) : [];
    $api = $_POST['api'];
    $de = $_POST['from_email'];
    $bod = $_POST['div_conteudo'];

    $inserir = "SELECT * FROM cadastro WHERE api_key = '$api'";
    $set = $conexao->query($inserir);

    if (mysqli_num_rows($set) >= 1) {
        while ($usu = mysqli_fetch_array($set)) {
            $mail = new PHPMailer();

            $quando = $usu['quando'];
            $pago = $usu['pago'];
            $nome =  $usu['nome'];

            $dia = explode("-",explode(" ", $quando)[0])[2];
            $mes = explode("-",explode(" ", $quando)[0])[1];
            $ano = explode("-",explode(" ", $quando)[0])[0];

            $empresa = $usu['empresa'];
            $email_from = $de != "" ? $de : $usu['email_set'];
            $app_pass = $usu['app_pass'];

            // SMTP Settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = $usu['email_set'];
            $mail->Password = $app_pass;
            $mail->Port = 465;
            $mail->SMTPSecure = "ssl";

            $mail->isHTML(true);
            $mail->setFrom($email_from, $empresa);

            $mail->Subject = $subject;
            $mail->Body = $bod;

            if ($dia <= $dia + 2 && $mes == date("m") && $pago == "Nao") {
                $acao_bem = true;

                foreach ($dest as $destinatario) {
                    $mail->ClearAddresses();  // Limpa os destinatários anteriores
                    $mail->AddAddress(trim($destinatario), $nome);

                    if (!$mail->send()) {
                        $mensagem = "Erro no envio do email para $destinatario: " . $mail->ErrorInfo;
                        $response = array(
                            'status' => $acao_bem ? 'success' : 'error',
                            'response' => $mensagem
                        );
                        echo json_encode($response);
                        exit;  // Termina o script se houver erro
                    }
                }

                $mensagem = "Seu email foi enviado com sucesso";
                $response = array(
                    'status' => $acao_bem ? 'success' : 'error',
                    'response' => $mensagem
                );
                echo json_encode($response);
                header('location: ../success');


            } else if ($dia + 2 > date('d') && $mes < date("m") && $pago == "Nao") {
                $acao_bem = false;
                $mensagem = "Seu plano expirou. Ative o seu plano para usar a API.";

                $response = array(
                    'status' => $acao_bem ? 'success' : 'error',
                    'response' => $mensagem
                );

                echo json_encode($response);
                header('location: ../error');
            } else {
                $acao_bem = true;

                foreach ($dest as $destinatario) {
                    $mail->ClearAddresses();  // Limpa os destinatários anteriores
                    $mail->AddAddress(trim($destinatario), $nome);

                    if (!$mail->send()) {

                        $mensagem = "Erro no envio do email para $destinatario: " . $mail->ErrorInfo;
                        $response = array(
                            'status' => $acao_bem ? 'success' : 'error',
                            'response' => $mensagem
                        );
                        echo json_encode($response);
                        exit;  // Termina o script se houver erro

                    }
                }

                $mensagem = "Seu email foi enviado com sucesso";
                $response = array(
                    'status' => $acao_bem ? 'success' : 'error',
                    'response' => $mensagem
                );
                echo json_encode($response);
        header('location: ../success');
            }
        }
    } else {
        $acao_bem = false;
        $mensagem = "Invalid API key";

        $response = array(
            'status' => $acao_bem ? 'success' : 'error',
            'response' => $mensagem
        );

        echo json_encode($response);
        header('location: ../error');
    }
} else {
    $acao_bem = false;
    $mensagem = "Invalid API key";

    $response = array(
        'status' => $acao_bem ? 'success' : 'error',
        'response' => $mensagem
    );

    echo json_encode($response);
}
?>
