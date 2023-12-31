<?php
    session_start();
    include("./gokgok/header");

    if (isset($_SESSION['id'])) {

        $id =  $_SESSION['id'];
            
        $logg= "SELECT * FROM cadastro WHERE id = 4";
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
        }

        else {
            #header("location: login.php?ref=exp");
        }

        switch ($pac) {
            case 1:
                $pacote = "Plano Individual";
                $preco = 2.00;
                break;
            
            case 2:
                $pacote = "Plano Business";
                $preco = 5.00;
                break;
            
            case 3:
                $pacote = "Plano Kat";
                $preco = 10.00;
                break;
            
            default:
                # code...
                break;
        }

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Editar template <?=$empresa?> | Gokside </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons 
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
-->
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
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


            <h2>Benvindo  <?=explode( " ", $nome)[0] ?>. </h2>
                <h6 class="fs-6 ">Empresa: <b><?=$empresa?></b> </h6>
                <span class="fs-6 "> Ativo: <span class="<?php if ($pago == "Nao") {
                    echo "text-warning";
                } else { echo "text-success" ;} ?>"><?=$pacote?></span></span>
                <br> 
                <span class="fs-6 text-secondary">
                     <?php if ($pago == "Nao") {
                      echo "Faça o pagamento do seu plano! &middot; $ ".$preco."";
                } else { echo "Plano Pago" ;} ?>
             
                </span>
                  <br>

                <div class="datas">
                    <h4 class="text-secondary">API Key: <span class="fw-light"><?=$api?></span></h4>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->
  
        <section class="container">
            <div class="row edit-e">
                <div class="col-md-4 col-xl-3">
                    <div class="form-datas">
                        <b class="text-k">Header do email</b>
                        <hr>
                        <div class=" d-flex flex-column">
                            <div>
                                <b class="fs-6">Dia específico:</b>
                                <input class="form-control" type="date" start-date='2023' name="" id=""><br>

                            </div>
                            <div>
                                <b class="fs-6">Recorrente:</b>
                                <label for="todos">
                                    <input type="checkbox" name="" id="todos">
                                    <span>Todos os dias</span>
                                </label>
                            </div>
                        </div>
                        <div class=" d-flex mt-1 flex-column">
                            <label for="" class="text-secondary fs-6">Email de: </label>
                            <input name="" type="email" class="form-control" id="from-e"
                                placeholder="dono@exemplo.com"/>
                        </div>
                        <div class=" d-flex my-3 flex-column">
                            <label for="" class="text-secondary fs-6">Titulo: </label>
                            <input name="" type="email" class="form-control" id="titulo-e"
                                placeholder="Titulo do email"/>
                        </div>
                        <div class=" d-flex flex-column">
                            <label for="" class="text-secondary fs-6">Enviar Para: </label>
                            <textarea name="" class="form-control" id="to-e" cols="30" rows="3"
                                placeholder="Separe por virgulas para adicionar vários. Ex. email@exemplo.com, contato@gokside.site , ..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-xl-9">

                    <center>
                        <h1>Template aqui</h1>
                    </center>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <div id="preloader"></div>
    <a href="/#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
    </script>
</body>

</html>