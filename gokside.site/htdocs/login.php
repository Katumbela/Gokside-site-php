<?php

if (isset($_GET['ref'])) {
  $ref = $_GET['ref'];
}
else {
  echo $ref = "";
}

?>


<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Entrar para sua conta | Gokside Inc</title>
  <meta content="Entre para sua conta para ter acesso aos recursos da plataforma." name="description">
  <meta content="Login whatsapp, login, entrar, whatsapp,email, marketing, gmail" name="keywords">

  <!-- Favicons 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
-->
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

<body>

  
  <main id="main" class="my-auto text-center">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs bg-white">
      <div class="container text-center">

      <a style="position: absolute; top: 1rem; left: 1rem;" href="/">Voltar</a></li>

        
        <form action="gokgok/functions" method="post">
        <div class="login py-4 px-5 rounded-3 breadcrumbs">
        <h2><img src="./assets/img/clients/g.png" style="height: 3em" 
alt="Logo image"
     ></h2>
        <br>
        
            <input type="email" name="email_log" placeholder="Seu telefone" class="input-1 form-control my-1"> <br>
            <input type="password" name="senha_log" placeholder="Palavra passe" class="input-1 form-control my-1">
            <br>
            <button type="submit" name="entrar" class="btn-login btn">Entrar</button>

            <center>
              <span class="text-secondary fs-6">Não possui uma conta ? <a href="cadastro">crie uma conta</a></span>
            </center>
        </div>
      </form>
      <?php

if (base64_decode($ref) == "exp") {

      ?>
      <br>
      <div class="alert mt-3 login alert-warning fs-6">Sua sessão exprou , faça login novamente</div>

      <?php

}
else if (base64_decode($ref) == "email/senha errada") {
    ?>
    <br>
      <div class="alert login mt-3 alert-danger fs-6">Seus dados de login estão incorrets,tente novamente</div>

      <?php

    }

    ?>
      </div>
    </section><!-- End Breadcrumbs -->

  </main><!-- End #main -->

  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
     
</body>

</html>