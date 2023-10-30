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

    <title>Dashboard <?=$empresa?> | Gokside  </title>
    <meta content="" name="description">
    <meta content="Panel, painel, gokside, joao, katumbela, katombela, linkedin" name="keywords">

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

</head>
<style>

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
        <section id="breadcrumbs" class="breadcrumbs  <?= $dia <= $dia + 2 && $pago == "Nao" || $dia + 2 > Date('d')  && $pago == "Nao" ? "mt-7" : ""?>">
            <div class="container">

            <div class="row">
                <div class="col-12 col-sm-8 col-md-9">
                                
                            <h2>Bem-vindo  <?=explode( " ", $nome)[0] ?>. </h2>
                            <h6 class="fs-6 ">Empresa: <b><?=$empresa?></b> </h6>
                            <span class="fs-6 "> Ativo: <span class="<?php if ($pago == "Nao") {
                                echo "text-warning";
                            } else { echo "text-success" ;} ?>"><?=$pacote?></span></span>
                            <br> 
                            <span class="fs-6 "> Template: <span class="text-success"><?=$template?></span></span>
                            <br> 
                            <span class="fs-6 text-secondary">
                                <?php if ($pago == "Nao") {
                            echo "Assine seu plano &middot; <b class='text-success'>$ ".$preco."</b>     <a href='pay_plan?p={$plan}' class='pay-btn btn-sm btn-primary'>Pagar</a>";
                            } else { echo "Plano <b class='text-success'>Pago</b> ( $ $preco )" ;} ?>
                        
                            </span>
                            <br>

                            <div class="datas mt-1">
                                <h6 class="text-secondary">API Key: <span class="fw-light"><?=$api?></span></h6>
                            </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3">
                          <div class="my-auto">
                          <form action="./gokgok/logo_set" enctype="multipart/form-data" method="post">
                          <div style="height: 7em; width: 7em; border-radius: 90px; background: url(./gokgok/uploads/<?=$logo?>) center center; border: 2px solid blue; background-repeat: no-repeat; background-size: contain" class="mx-auto" 
alt="Logo image"
     > </div>
                            <div class="">
                                <div style="font-size: 12px" class="d-flex ">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <input style="font-size: 10px" name="file" type="file" class="form-control">
            
                            
                                    <button class="btn btn-primary btn-sm" style="font-size: 10px" type="submit">Salvar</button>
                                </div>
                            </div>
                        </form>
                          </div>
                </div>
            </div>

            </div>
        </section><!-- End Breadcrumbs -->

            <?php


                    if ($senha_app == "-" || $emailAtivo == "-") {
                        
                        ?>
                        
                     <section class="container">
                            <p><h4>Termine a configuração da sua conta</h4>
                            Para enviar emails em seu nome/email, precisa configurar sua conta.

                            Siga estes passos:
                            <ol class="text-secondary">
                                <li>Adicione seu email principal;</li>
                                <li>Vá em configurações da sua conta e crie uma palavra passe de Apps e adicione aqui;</li>
                                <li>Feito, clique em salvar.</li>
                            </ol>

                            <br>
                            Caso queira enviar por <a href="mailto:contacto@gokside.site">contacto@gokside.site</a> insira N/A nos dois campos
                        
                        </p>
                           
                        <form action="./gokgok/functions" method="post">
                        <div class="row">
                                <div class="col-12 col-sm-4 col-md-4">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <input type="text" name="emaila" placeholder="Insira o email" class="form-control">
                                </div>
                                <div class="col-12 col-sm-4 col-md-4">
                                    <input type="text" name="senhaapp" placeholder="Palavra passe criada" class="form-control">
                                </div>
                                <div class="col-12 col-sm-4 col-md-4">
                                    <button type="submit" name="finish" class="btn-buy btn btn-primary buy-btn">Salvar</button>
                                </div>
                            </div>
                    </form>
                    
        </section>

                        <?php


                    }

            ?>
      

        <?php

                    if ($senha_app != "-" && $emailAtivo != "-") {
                        ?>


<section style="margin-top: -3rem"  class="container">
                            <p style="font-size: 12px">
                            Para enviar emails em seu nome/email, precisa configurar sua conta.
                            Conta configurada!
<br> Pode editar seus dados quando quiser                        </p>
                           
                        <form action="./gokgok/functions" method="post">
                        <div class="row">
                                <div class="mt-3 mt-sm-0 col-12 col-sm-4 col-md-4">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <label for="" class="text-secondary">E-mail</label>
                                    <input type="text" name="emaila" value="<?=$emailAtivo?>" placeholder="Insira o email" class="form-control">
                                </div>
                                <div class="mt-3 mt-sm-0 col-12 col-sm-4 col-md-4">
                                    <label for="" class="text-secondary">Senha de App</label>
                                    <input type="password" name="senhaapp" value="<?=$senha_app?>" placeholder="Palavra passe criada" class="form-control">
                                </div>
                                <div class="mt-3 mt-sm-0 text-end col-12 col-sm-4 col-md-4">
                                    <br><button type="submit" name="finish" class="btn-buy btn btn-primary buy-btn">Salvar</button>
                                </div>
                            </div>
                    </form>
<hr>
                    
        </section>


<section style="margin-top: -4rem" class="items-serv container">
            <div style="margin-top: -3rem" class="row">
                
                <div class="col-md-6">
                    <div class="item text-center">
                        <h2>Formulários</h2>
                        <div class="w-50 des mx-auto">
                            <span class="text-secondary  w-50 fw-light fs-6">
                               Receba contactos de seus clientes por meio de formulários.</span>
                        </div>
                        <br>
                        <div style="display: grid; place-itens: center; align-item: center" class="wpp fs-6 bg-white border-1 border-light cardd">
                           <span class="my-auto text-primnary">
                           Brevemente
                           </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div  class="item text-center">
                        <h2>Envie e-mails</h2>
                        <div class="w-50 des mx-auto">
                            <span class="text-secondary w-50 fw-light fs-6">Comece a enviar emails usando templates
                                 prontos ou apartir do seu website via api.</span>
                        </div>
                        <br>
                        <div class="cardd" onclick="link('dash_email')" style="background: url('./assets/img/3.png') center center; background-position: center; background-size: cover ">
                            <i class="bi bi-email"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>


            <?php
                    }

            ?>


    </main><!-- End #main -->

    <center>
    <div class="col-12 container">
                    <p>
                        Suporte: <a href="tel:+244928134249">928 134 249</a> / <a href="mailto:contato@gokside.site">contato@gokside.site</a>
                    </p>
                </div>
                <br>
                <br>

    </center>
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