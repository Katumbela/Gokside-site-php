<?php
    session_start();
    include("./gokgok/header.php");

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
                $template = $log_datass['template'];
                $emailAtivo = $log_datass['email_set'];
                $senha_app = $log_datass['app_pass'];
                $logo = $log_datass['logo'];
        }

        else {
            header("location: login.php?ref=".base64_encode("exp"));
        }

        $plan ="";

        switch ($pac) {
            case 1:
                $ppacote = "Plano Individual";
                $ppreco = "0.50";
                
              $plan = base64_encode("pack-1");
                break;
            
            case 2:
                $ppacote = "Plano Business";
                $ppreco = "0.75";
                $plan = base64_encode("pack-2");
                break;
            
            case 3:
                $ppacote = "Plano Gok";
                $ppreco = "2.99";
                break;
            
            default:
                # code...
                break;
        }

        $dia = explode("-",explode(" ", $quando)[0])[2];
        $mes = explode("-",explode(" ", $quando)[0])[1];
        $ano = explode("-",explode(" ", $quando)[0])[0];
            

if(isset($_GET['p'])) {
  $p = base64_decode($_GET['p']);
  $pacote = '';
  $preco = '';

  switch ($p) {
    case 'pack-1':
      # code...
      $pacote = 'Plano Individual';
      $preco = '0.50';
      break;
    case 'pack-2':
      # code...
      $pacote = 'Plano Business';
      $preco = '0.75';
      break;
    
    default:
      # code...
      header('location: ./dashboard');
      break;
  }

}


?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Assinar <?=$pacote?> | Gokside Inc.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jul 05 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>

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

@media (max-width: 800px) {
    
  .navbar li a:hover {
      color: #1B7BD0 !important;
      cursor: pointer;
  }

}



.mt-7 {
    margin-top: 6rem;
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
.pay-btn {
    background: #1B7BD0;
    border-radius: 90px;
    padding: .1rem .7rem;
    margin-left: 2rem;
    color: white;
}
.pay-btn:hover {
    background: transparent;
    color: #1B7BD0;
    border: 1px solid blue;
}

ol li {
    font-size: 13px;
}

.col-12 label {
    font-size: 12px
}

button, input,input:focus-within, input:focus-visible, input:hover, input:focus {
    border-radius: 0!important;
    box-shadow: none!important;
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

<h1 class="logo me-auto"><a href="dashboard">G o k s i d e</a></h1>
<!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="/" class="logo me-auto"><img src="assets/img/logo.png" 
    alt="Logo image"
     class="img-fluid"></a>-->

<nav id="navbar" class="navbar">
<ul>
    <li><a class="nav-link scrollto"><?=$nome?></a></li>
    <li><a class="nav-link scrollto"><?=$pacote?></a></li>
    <li><a class="getstarted scrollto" href="./func/logout">Sair</a></li>
</ul>
<i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

</div>
</header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Inicial</a></li>
          <li>Planos</li>
        </ol>
        <h2><?=$pacote?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Assinar <?=$pacote?></h4>
            <h1>$ <?=$preco?> / mês</h1>
            <p>Para assinar este Plano escolha o método de pagamento.</p>
             
             <?php

                if(isset($_GET['p'])) {
                  if (base64_decode($_GET['p']) == "pack-1") {
                    ?>

                      <br>
                      <div id="paypal-button-container-P-32J25565ST5551541MUI2C6A"></div>
                      <script src="https://www.paypal.com/sdk/js?client-id=Achki2KvbRpWCbc-y41bd-5RHsf0SLC6NDJMrPktXH0Q-QcrUP4Te7nZLw9UC3JwAozTRD1zyleZQV5J&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
                      <script>
                        paypal.Buttons({
                            style: {
                                shape: 'rect',
                                color: 'blue',
                                layout: 'vertical',
                                label: 'subscribe'
                            },
                            createSubscription: function(data, actions) {
                              return actions.subscription.create({
                                /* Creates the subscription */
                                plan_id: 'P-32J25565ST5551541MUI2C6A'
                              });
                            },
                            onApprove: function(data, actions) {
                              alert(data.subscriptionID); // You can add optional success message for the subscriber here
                            }
                        }).render('#paypal-button-container-P-32J25565ST5551541MUI2C6A'); // Renders the PayPal button
                      </script>
                    <?php
                  }
                  else if (base64_decode($_GET['p']) == "pack-2") {
                    ?>

                      <br>
                      <div id="paypal-button-container-P-096782872Y3322525MUI2FGQ"></div>
                        <script src="https://www.paypal.com/sdk/js?client-id=Achki2KvbRpWCbc-y41bd-5RHsf0SLC6NDJMrPktXH0Q-QcrUP4Te7nZLw9UC3JwAozTRD1zyleZQV5J&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
                        <script>
                          paypal.Buttons({
                              style: {
                                  shape: 'rect',
                                  color: 'blue',
                                  layout: 'vertical',
                                  label: 'subscribe'
                              },
                              createSubscription: function(data, actions) {
                                return actions.subscription.create({
                                  /* Creates the subscription */
                                  plan_id: 'P-096782872Y3322525MUI2FGQ'
                                });
                              },
                              onApprove: function(data, actions) {
                                alert(data.subscriptionID); // You can add optional success message for the subscriber here
                              }
                          }).render('#paypal-button-container-P-096782872Y3322525MUI2FGQ'); // Renders the PayPal button
                        </script>

                    <?php
                  }
                  else {
                    header('location: ./dashboard');
                  }
                }
             ?>

          </div>
     
        </div>
      </div>
    </div>


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact#contact-form">
            <h3>Gokside </h3>
            <p>
              Luanda <br>
             Talatona<br>
              Angola <br><br>
              <strong>Tel:</strong> +244 928 134 249<br>
              <strong>Email:</strong> contato@gokside.site<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4> Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero   ">Inicial</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="termos">Termos e condições</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacidade">Politicas de privacidade</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos Serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="contact#contact-form">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact#contact-form">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact#contact-form">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Redes Sociais</h4>
            <p>Encontre nos nas redes sociais</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/joao_katumbela" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://facebook.com/gokside" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://instagram.com/afonso.katumbela" class="instagram insta"><i class="bx bxl-instagram"></i></a>
              <a href="https://linkedin.com/in/joao-afonso-katombela" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Gokside Inc</span></strong>. todos os direitos reservados
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="/#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
     
  <div id="paypal-button-container-P-23794522DV3935435MS55BBQ"></div>
  <script src="https://www.paypal.com/sdk/js?client-id=Achki2KvbRpWCbc-y41bd-5RHsf0SLC6NDJMrPktXH0Q-QcrUP4Te7nZLw9UC3JwAozTRD1zyleZQV5J&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
  <script>
    paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'blue',
            layout: 'vertical',
            label: 'subscribe'
        },
        createSubscription: function(data, actions) {
          return actions.subscription.create({
            /* Creates the subscription */
            plan_id: 'P-23794522DV3935435MS55BBQ'
          });
        },
        onApprove: function(data, actions) {
          alert(data.subscriptionID); // You can add optional success message for the subscriber here
        }
    }).render('#paypal-button-container-P-23794522DV3935435MS55BBQ'); // Renders the PayPal button
  </script>
</body>

</html>