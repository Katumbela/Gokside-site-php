<?php
    session_start();
    include("../gokgok/header.php");

    if (isset($_SESSION['id'])) {

        $id =  $_SESSION['id'];
            
        $logg= "SELECT * FROM cadastro WHERE id = '$id'";
        $con_logg = $conexao->query($logg);
        $num_rll = mysqli_num_rows($con_logg);

                $log_datass = mysqli_fetch_array($con_logg);
                $nome= $log_datass['nome']; 
                $email= $log_datass['email'];
                $senha= $log_datass['senha'];
                $tel= $log_datass['tel'];
                $pac= $log_datass['pacote'];
                $pago= $log_datass['pago'];

                $logo = $log_datass['logo'];
                $empresa= $log_datass['empresa'];
                $api = $log_datass['api_key'];
                $quando = $log_datass['quando'];
        }

        else {
          header("location: login.php?ref=".base64_encode("exp"));
        }

        $plan ="";

        switch ($pac) {
            case 1:
                $pacote = "Plano Individual";
                $preco = "0.50";
                
              $plan = base64_encode("pack-1");
                break;
            
            case 2:
                $pacote = "Plano Business";
                $preco = "0.75";
                $plan = base64_encode("pack-2");
                break;
            
            case 3:
                $pacote = "Plano Gok";
                $preco = "2.99";
                break;
            
            default:
                # code...
                break;
        }

        $dia = explode("-",explode(" ", $quando)[0])[2];
        $mes = explode("-",explode(" ", $quando)[0])[1];
        $ano = explode("-",explode(" ", $quando)[0])[0];
            

?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Template 04 - <?=$empresa?> | Gokside </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
 -->
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jul 05 2043 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>

.mt-7 {
    margin-top: 6rem;
}

.pay-btn {
    background: #1B7BD0;
    border-radius: 90px;
    padding: .3rem .7rem;
    margin-left: 2rem;
    color: white;
}
.pay-btn:hover {
    background: transparent;
    color: #1B7BD0;
    border: 1px solid blue;
}

.controls button, .controls input, .controls input:focus, .controls input:focus-visible {
    border-radius: 0;
    box-shadow: none;
}

@media (min-width: 471px) {

    .tela-pequena {
        display: none;
    }
    .controls {
        display: block;
        width: 70%!important;
    }

    .janela {
        display: flex;
        width: 70%!important;
    }
     #toolbar {
        display: flex;
        flex-wrap: wrap;
        width: 70%!important;
    }

}

@media (max-width: 470px) {
    .tela-pequena {
        display: block;
    }  
    .controls, .janela {
        display: none!important;
    }
}

.navbar li a:hover {
    color:white !important;
    cursor: pointer;
}

@media (max-width: 800px) {
    
  .navbar li a:hover {
      color: #1B7BD0 !important;
      cursor: pointer;
  }

}
</style>
<body>

<?php

if ($dia <= $dia + 2 && $mes == Date("m") && $pago == "Nao" ) {
    ?>
   <div style="font-size: 12px" class="bg-warning fixed-top text-center py-1">
        Seu Teste termina <?=$dia + 2 == date('d') ? " hoje, dia " : " no dia "?> <?= $dia + 2 ." de ". date("m") . ", " . $ano?> 
    </div>
    <?php
}
else if ($dia + 2 >  Date('d') && $mes < Date("m")  && $pago == "Nao") {
     ?>
    <div style="font-size: 12px" class="bg-danger text-white fixed-top text-center py-1">
         Seu tempo de teste terminou no dia <?=$dia+2 ." de " . $mes . " de " . $ano?>, assine o seu plano hoje
     </div>
     <?php
 }
 else  {
      ?>
   <span></span>
      <?php
  }
?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top <?= $dia <= $dia + 2 && $pago == "Nao" || $dia + 2 > Date('d')  && $pago == "Nao" ? "mt-3" : ""?> header-inner-pages">


<div class="container d-flex align-items-center">

<h1 class="logo me-auto"><a href="../dashboard">G o k s i d e</a></h1>
<!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="/" class="logo me-auto"><img src="../assets/img/logo.png" 
alt="Logo image"
      class="img-fluid"></a>-->

<nav id="navbar" class="navbar">
<ul>
    <li><a class="nav-link scrollto"><?=$nome?></a></li>
    <li><a class="nav-link scrollto"><?=$pacote?></a></li>
    <li><a class="getstarted scrollto" href="../func/logout">Sair</a></li>
</ul>
<i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

</div>
</header><!-- End Header -->

<main id="main">
  

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs  <?= $dia <= $dia + 2 && $pago == "Nao" || $dia + 2 > Date('d')  && $pago == "Nao" ? "mt-7" : ""?>">
<div class="container">

 
<a style="cursor: pointer; color: blue" onclick="link('../dash_email')">Templates </a>

</div>
</section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
      
      <div>
        <label for="" class="text-secondary fs-6">Envie partir do seu website/app</label>
        
             
        <div style="font-size: 12px" class="d-flex ">
                <input type="text" disabled value="https://api.gokside.site/v1/send/email" class="form-control ">
                <a class="btn btn-outline-primary" href="../how_to_use">Como usar</a>
        </div>
 
 
      </div>
      <br>
      <br>
      <div class="section-title">
          <h2>Template 04</h2>
          <p>Olá <?=explode(" ", $nome)[0]?>, Edite este template, quando terminar clique em enviar!</p>
        </div>

        

    <center>


    
<?php

if ($dia <= $dia + 2 && $mes == Date("m") && $pago == "Nao" ) {
    ?>
   <div style="font-size: 12px" class=" text-center py-1">
        Desfrute do seu teste gratuito <?=explode(" ", $nome)[0]?>, demos lhe este privilégio até o dia <?=$dia+2 ." de ". date("m")?> 
    </div>

  
    <form action="../gokgok/send_template" method="post">
         <div class="controls d-flex justify-content-between -end">
            <button class="btn btn-success" disabled>API</button>
                <div style="font-size: 12px" class="d-flex ">
                    <input name="api" required id="api" type="hidden" value="<?=$api?>" class="form-control">
                    <input name="from_email"  placeholder="Enviar de outro email(Opcional)" id="destinatario" type="text" class="form-control">
                    <input name="subject" required placeholder="Insira o Titulo" id="destinatario" type="text" class="form-control">
                    <input name="dest" required placeholder="Insira o destinatário" id="destinatario" type="text" class="form-control">
                    <button type="submit" name="send_email" class="btn btn-primary">Enviar</button>
                
                </div>
         </div>
          <style>
                #editor {
                    border: 1px solid #ccc;
                    padding: 10px;
                    margin: 10px;
                    max-width: 600px;
                    margin-left: auto;
                    margin-right: auto;
                }

                #toolbar {
                    margin-bottom: 10px;
                }

                #toolbar button {
                    margin: 2px;
                    padding: 5px 10px;
                    font-size: 14px;
                    background: #f5f5f5;
                    border: 1px solid #0066be!important;

                    cursor: pointer;
                }

                #toolbar label {
                    margin-right: 5px;
                    font-size: 12px:
                }

                #toolbar input {
                    width: 50px;
                    margin: auto 1px;
                }
            </style>
             <div id="toolbar">
                <button onclick="execCommand('bold')">Negrito</button>
                <button onclick="execCommand('italic')">Itálico</button>
                <button onclick="execCommand('underline')">Sublinhado</button>
                <button onclick="execCommand('insertOrderedList')">Lista Numerada</button>
                <button onclick="execCommand('insertUnorderedList')">Lista com Marcadores</button>
                <button onclick="execCommand('justifyLeft')">Alinhar à Esquerda</button>
                <button onclick="execCommand('justifyCenter')">Centralizar</button>
                <button onclick="execCommand('justifyRight')">Alinhar à Direita</button>
                <button onclick="execCommand('justifyFull')">Justificar</button>
                <button onclick="execCommand('removeFormat')">Remover Formatação</button>
                <button onclick="execCommand('undo')">Desfazer</button>
                <button onclick="execCommand('redo')">Refazer</button>
                <label>Tamanho da Fonte: <input type="number" id="fontSize" min="1" max="7"></label>
                <button onclick="execCommand('fontSize', false, document.getElementById('fontSize').value)">Aplicar</button>
                <label>Cor do Texto: <input type="color" id="fontColor"></label>
                <button onclick="execCommand('foreColor', false, document.getElementById('fontColor').value)">Aplicar</button>
            </div>
            
            <script>
                function execCommand(command, showDefaultUI, value) {
                    document.execCommand(command, showDefaultUI, value);
                }
            </script>
            
        <div contentEditable="true" style="padding: 1rem ; border: 1px solid grey" class="janela">
            
        
                <div name="body" style='

                    background: #008ada;
                    height: 100%; padding: 0rem;
                    ' class='temp1'>

                    <div id="body" style='padding: .1rem 2rem; margin: auto;
                        min-width:100%; max-width: 100%; background: #eef4fd; width: 100%;
                        '>
                        <center> <br><br>
                            <img style='height: 3.5em; border-radius: 10px;' src='https://gokside.site/gokgok/uploads/<?=$logo?>' alt=''>
                            <br><br>
                            <h1 contenteditable='true'>CONFIRMAÇÃO DE EMAIL</h1>
                        </center>


                        <p style='writing-mode: sideways-rl;'>
                            Utilize este codigo para confirmar seu email, Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            In aperiam illo reiciendis ?

                        </p>
                        <center>
                            <h1 style='color: #00395a;'>000-000</h1>
                        </center>
                        <br>

                        <br>
                        <center style='font-size: 13px;'>
                            <h4>Gokside Inc</h4>
                            <p>Email enviado apartir da Gokside Inc &copy; 2023</p>
                        </center>
                        <br>


                  </div>

             </div>

           
             </div>
        </form>

    <?php
}

else if ($dia + 2 >  Date('d') && $mes < Date("m")  && $pago == "Nao") {
  ?>
    <div style="font-size: 12px" class="alert alert-danger w-75 text-whiste text-center py-1">
         Seu tempo de teste terminou no dia <?=$dia+2 ." de " . $mes . " de " . $ano?>, assine o seu plano hoje para ter acesso aos emails / templates
     </div>
     <a href='pay_plan?p=<?=$plan?>' class='pay-btn btn-sm btn-primary'>Pagar agora</a>
     <?php
 }

 else  {
      ?>
  
        
    <form action="../gokgok/send_template" method="post">
         <div class="controls d-flex justify-content-between -end">
         <button class="btn btn-success" disabled>API</button>
        <div style="font-size: 12px" class="d-flex ">
            <input name="api" required id="api" type="hidden" value="<?=$api?>" class="form-control">
            <input name="from_email"  placeholder="Enviar de outro email(Opcional)" id="destinatario" type="text" class="form-control">
            <input name="subject" required placeholder="Insira o Titulo" id="destinatario" type="text" class="form-control">
            <input name="dest" required placeholder="Insira o destinatário" id="destinatario" type="text" class="form-control">
        <button type="submit" name="send_email" class="btn btn-primary">Enviar</button>
        
        </div>
         </div>

          <style>
                #editor {
                    border: 1px solid #ccc;
                    padding: 10px;
                    margin: 10px;
                    max-width: 600px;
                    margin-left: auto;
                    margin-right: auto;
                }

                #toolbar {
                    margin-bottom: 10px;
                }

              
                #toolbar button {
                    margin: 2px;
                    padding: 5px 10px;
                    font-size: 14px;
                    background: #f5f5f5;
                    border: 1px solid #0066be!important;

                    cursor: pointer;
                }

                #toolbar label {
                    margin-right: 5px;
                    font-size: 12px:
                }

                #toolbar input {
                    width: 50px;
                    margin: auto 1px;
                }
            </style>
             <div id="toolbar">
                <button onclick="execCommand('bold')">Negrito</button>
                <button onclick="execCommand('italic')">Itálico</button>
                <button onclick="execCommand('underline')">Sublinhado</button>
                <button onclick="execCommand('insertOrderedList')">Lista Numerada</button>
                <button onclick="execCommand('insertUnorderedList')">Lista com Marcadores</button>
                <button onclick="execCommand('justifyLeft')">Alinhar à Esquerda</button>
                <button onclick="execCommand('justifyCenter')">Centralizar</button>
                <button onclick="execCommand('justifyRight')">Alinhar à Direita</button>
                <button onclick="execCommand('justifyFull')">Justificar</button>
                <button onclick="execCommand('removeFormat')">Remover Formatação</button>
                <button onclick="execCommand('undo')">Desfazer</button>
                <button onclick="execCommand('redo')">Refazer</button>
                <label>Tamanho da Fonte: <input type="number" id="fontSize" min="1" max="7"></label>
                <button onclick="execCommand('fontSize', false, document.getElementById('fontSize').value)">Aplicar</button>
                <label>Cor do Texto: <input type="color" id="fontColor"></label>
                <button onclick="execCommand('foreColor', false, document.getElementById('fontColor').value)">Aplicar</button>
            </div>
            
            <script>
                function execCommand(command, showDefaultUI, value) {
                    document.execCommand(command, showDefaultUI, value);
                }
            </script>
            
        <div contentEditable="true" style="padding: 1rem ; border: 1px solid grey" class="janela">
            
        
         <div name="body" style='

                    background: #008ada;
                    height: 100%; padding: 0rem;
                    ' class='temp1'>

                    <div id="body" style='padding: .1rem 2rem; margin: auto;
                        min-width:100%; max-width: 100%; background: #eef4fd; width: 100%;
                        '>
                        <center> <br><br>
                            <img style='height: 3.5em; border-radius: 10px;' src='https://gokside.site/gokgok/uploads/<?=$logo?>' alt=''>
                            <br><br>
                            <h1 contenteditable='true'>CONFIRMAÇÃO DE EMAIL</h1>
                        </center>


                        <p style='writing-mode: sideways-rl;'>
                            Utilize este codigo para confirmar seu email, Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            In aperiam illo reiciendis ?

                        </p>
                        <center>
                            <h1 style='color: #00395a;'>000-000</h1>
                        </center>
                        <br>

                        <br>
                        <center style='font-size: 13px;'>
                            <h4>Gokside Inc</h4>
                            <p>Email enviado apartir da Gokside Inc &copy; 2023</p>
                        </center>
                        <br>


                 </div>

                </div>

         
             </div>
        </form>

      <?php

  }
?>

<div class="tela-pequena">
    <h4>Utilize uma tela maior do que <b> 400px</b> de largura para acessar a este recurso</h4>
</div>

    </center>

    </main><!-- End #main -->

    <div id="preloader"></div>
    <a href="/#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

    <!-- Link do paypal 
  <div id="paypal-button-container-P-23794522DV3935435MS55BBQ"></div>
   -->
    <script
        src="https://www.paypal.com/sdk/js?client-id=Achki2KvbRpWCbc-y41bd-5RHsf0SLC6NDJMrPktXH0Q-QcrUP4Te7nZLw9UC3JwAozTRD1zyleZQV5J&vault=true&intent=subscription"
        data-sdk-integration-source="button-factory"></script>
    <script>
        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'blue',
                layout: 'vertical',
                label: 'subscribe'
            },
            createSubscription: function (data, actions) {
                return actions.subscription.create({
                    /* Creates the subscription */
                    plan_id: 'P-23794522DV3935435MS55BBQ'
                });
            },
            onApprove: function (data, actions) {
                alert(data.subscriptionID); // You can add optional success message for the subscriber here
            }
        }).render('#paypal-button-container-P-23794522DV3935435MS55BBQ'); // Renders the PayPal button


            document.querySelector('form').addEventListener('submit', function () {
            var divConteudo = document.getElementById('body').innerHTML;

            var campoOculto = document.createElement('input');
            campoOculto.type ='hidden';
            campoOculto.name = 'div_conteudo';
            campoOculto.value = divConteudo;

            this.appendChild(campoOculto);
            
            })
    </script>
</body>

</html>