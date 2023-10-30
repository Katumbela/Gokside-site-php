<?php

session_start();
if(isset($_SESSION['id'])) {
  header('location: dashboard');
}

?>


<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gokside | Automação & Emails</title>
  <meta content="API de envio de mensagens de e emails, automação e leads, formulários prontos para seus clientes plataforma de email marketing. Gokside. Gokside. João Afonso Katumbela" name="description">
  <meta content="API, API Whatsapp, Email Marketing, Marketing Angola, Email, E-mails, Angola Tech, tecnologicamente, Tecnologia,gokside, Gokside, katumbela, katombela, joão afonso, João, Joao afonso, João Afonso Katombela" name="keywords">

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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">G O K S I D E</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="/" class="logo me-auto"><img src="assets/img/logo.png" 
alt="Logo image"
      class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Planos</a></li>
          <li><a class="nav-link scrollto" href="contact#contact-form">Contacto</a></li>
          <li><a class="getstarted scrollto" href="login">Entrar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>A Melhor Solução Para o Sua Empresa </h1>
          <h2> Aumente, automatize os seus serviços e tenha mais leads com a nossa plataforma</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="how_to_use" class="btn-get-started scrollto">Como usar</a>
            <a href="https://www.youtube.com/watch?v=8IOCeu5NVGc" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Pitch</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" 
alt="Logo image"
     >
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <!--<div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/a.jpg" class="img-fluid" 
alt="Logo image"
     >
          </div>-->

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/s.jpg" class="img-fluid" 
alt="Logo image"
     >
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/g.jpg" class="img-fluid" 
alt="Logo image"
     >
          </div>

        <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/katoo.png" class="img-fluid" 
alt="Logo image"
     >
          </div>
  <!-- 
          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" 
alt="Logo image"
     >
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" 
alt="Logo image"
     >
          </div> -->

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section =======
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>E-mails <span style="text-decoration: underline" class="underline">GRATUITOS</span></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
             
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>temp-email@gokside.site</li>
              <li><i class="ri-check-double-line"></i>gokside-email@gokside.site</li>
              <li><i class="ri-check-double-line"></i>receive-email@gokside.site</li>
              <li><i class="ri-check-double-line"></i>angola-email@gokside.site</li>
              <li><i class="ri-check-double-line"></i>my-email@gokside.site</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
             Proteja se do Spams, utilize um destes emails para receber emails e tenha acesso publicamente à estes emails.
            </p>
            <a href="#" class="btn-learn-more">Caixa de entrada</a>
          </div>
        </div>

      </div>
    </section> 
    End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3 style="color: #1B7BD0"><strong>Campanhas</strong> e envio de emails automatizados </h3>
              <p>
              Envie emails personalizados, edite os templates de emails disponíveis na nossa plataforma, com os recursos disponíveis em um dos nossos Planos terá acesso à:
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>10+</span>  Templates de emails<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                    Varios templates de modelos diferentes disponíveis para personalizar e enviar para seus clientes / usuários
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> API Keys <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                     Poderá enviar emails apartir do seu website desenvolvido em qualquer tecnologia e plataforma
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>-</span> Agendar emails & campanhas <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
Num plano pago poderá ainda agendar envio de emails ou automatizar emaill recorrentes em datas específicas ou em intervalos de tempo determinado por sí
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/3.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/why-us.png" class="img-fluid" 
alt="Logo image"
     >
          </div>
          <div class="col-lg-6 my-auto  content" data-aos="fade-left" data-aos-delay="100">
           <div class="m-auto">
           <h3>Automação de e-mails</h3>
            <p class="fst-italic">
                Automação de e-mails Individual ou empresarial para dar respostas com brevidade e atendimento de seus clientes e evitar atrasos por demanda
            </p>

           </div>
          <!--
           <div class="skills-content">

              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>
--> 
          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>recursos</h2>
          <p>Recursos essenciais para alavancar o seu negócio, sua empresa e aprimorar o seu atendimento e interacação com serus clientes.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon">
                <img src="assets/img/skills.png" class="img-fluid" 
alt="Logo image"
     >
              </div>
              <h4><a>Automação do e-mails</a></h4>
              <p>Utilize a nossa plataforma para enviar mensagens aos seus clientes periodicamente ou crie uma Newsletter para os mesmos automaticamente</p>
              
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon">
                
                <img src="assets/img/2.jpg" class="img-fluid" 
alt="Logo image"
     >
              </div>
              <h4><a>Campanhas e envios de emails</a></h4>
              <p>Crie campanhas de email marketing e envie emails com vários templates disponíveis, e agende envio de emails</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon">
                
                <img src="assets/img/4.png" class="img-fluid" 
alt="Logo image"
     >
              </i></div>
              <h4><a >Envio de mensagens e emails via API</a></h4>
              <p>Envie emails e mensagens apartir do seu website consumindo nossa API.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon">
                
                <img src="assets/img/1.png" class="img-fluid" 
alt="Logo image"
     >
              </i></div>
              <h4><a href="">Atendimento Automático</a></h4>
              <p>Automação no atendimento de seus clientes via emails com eficiência</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Gokside.</h3>
            <p>Impulsione seu negócio/ projecto e aumente o seu empenho e comunicação com a Goksida APartir dos nossos servidores </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#pricing">Teste Grátis</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= 
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> End Portfolio Section -->

    <!-- ======= Team Section =======
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" 
alt="Logo image"
     ></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Preços & Planos</h2>
          <p>Escolha o melhor plano para o seu negócio ou empresa, opte pela qualidade dos recursos que vão com as suas necessidades ou serviços <br><b> Teste Grátis por 48h</b></p>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Plano Individual </h3>
              <h4><sup>$</sup>0.50<span>/ mês</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 1 e-mail</li>
                <li><i class="bx bx-check"></i>Consumo da API</li>
                <li class="na"><i class="bx bx-x"></i> <span> Envio de emails </span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Agendamento de E-mails</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Formulários</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Suporte 24/6</span></li>
              </ul>
              <a href="pack-1" class="buy-btn">Assinar</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Plano Business</h3>
              <h4><sup>$</sup>0.75<span>/ mês</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Envio de emails</li>
                <li class=""><i class="bx bx-check"></i> <span>Consumo da API</span></li>
                <li class=""><i class="bx bx-check"></i> <span>Agendamento de E-mails</span></li>
                <li class=""><i class="bx bx-check"></i> <span>1 Formulário</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Suporte 24/6</span></li>
                <li class="na"><i class="bx bx-x"></i><span> 10 e-mails</span></li>
             
              </ul>
              <a href="pack-2" class="buy-btn">Assinar</a>
            </div>
          </div>

          <div class="col-md-12 col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Plano Gok</h3>
              <h4><sup>$</sup>2.50<span>/ mês</span></h4>
              <ul>
                <li><i class="bx bx-check"></i>E-mails Ilimitados</li>
                <li><i class="bx bx-check"></i> Envio de emails</li>
                <li class=""><i class="bx bx-check"></i> <span>Consumo da API</span></li>
                <li class=""><i class="bx bx-check"></i> <span>Agendamento de E-mails</span></li>
                <li class=""><i class="bx bx-check"></i> <span>5 Formulários</span></li>
                <li class=""><i class="bx bx-check"></i> <span>Suporte 24/6</span></li>
             
              </ul>
              <button  class="buy-btn disabled" disabled>Indisponível</button>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Perguntas Frequentes</h2>
          <p>Perguntas frequentes de nossos usuarios e testadores</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">O que é a Gokside ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                 É uma plataforma de gerenciamento de emails e automação, que possibilita o consumo da API para envio automaticos externamente, agendamentos de emails, campanhas de emails, leads e formulários.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Como eu envio emails apartir do meu site ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Após a abertura da sua conta, no seu painel administrativo encontrará as suas credenciais para o devido consumo da API para o envio de emails, claro dependendo do plano assinado
                    </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Como eu personalizo as mensagens / emails ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                 Para o envio de emails via API a personalização ou estilização do email é feito com HTML semântico e CSS3, caso naão tenha conhecimento algum sobre programação poderá encontrar alguns templates no seu painel prontos para uso.
                 </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Quais os métodos de pagamentos ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Poderá pagar a sua subscrição por cartão de crédito (Visa, MasterCard, AmericaExpress...), via PayPal, via depósito ou ainda transferência bancária.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact#contact-form" class="contact#contact-form">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contactar</h2>
          <p>Entre em contacto com a nossa equipa, deixe sua mensagem ou feedback no formulário abaixo</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Endereço:</h4>
                <p>Luanda, Luanda - Talatona</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contato@gokside.site</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Tel:</h4>
                <p>+244 928 134 249</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.632198202596!2d13.274279774499455!3d-9.005950091054451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a521d2743dd18dd%3A0x2fed67d74a20275f!2sFubu!5e0!3m2!1spt-PT!2sao!4v1695657321476!5m2!1spt-PT!2sao" class="w-100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact#contact-form" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Seu Nome</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Seu Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Assunto</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Mensagem</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada com sucesso, obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div> -->
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Subscreva nossa Newsletter</h4>
            <p>Receba actualizações de novos serviços, descontos e muito mais.</p>
            <form action="" method="post">
              <input class="input" type="email" name="email"><input type="submit" value="Subscrever">
            </form>
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
        &copy; Copyright <strong><span>Gokside </span></strong>. todos os direitos reservados
      </div>

    </div>
  </footer><!-- End Footer -->

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