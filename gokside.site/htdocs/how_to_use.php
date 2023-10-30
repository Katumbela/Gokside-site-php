<?php


/*
Datas Needed qith required postes values:

=============================================================================

POST[]:

subject: 
receiver:
api_key:
body:
email_from:

=============================================================================

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to use the API | GOKSIDE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
</head>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 20px;
        }
        .how-to-card {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .language-title {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .code-example {
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
        }
        .copy-button {
            margin-top: 10px;
        }
    </style>
</head>
<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixe header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">G o k s i d e</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="/" class="logo me-auto"><img src="assets/img/logo.png" 
alt="Logo image"
      class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="/#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="./services">Serviços</a></li>
          <li><a class="nav-link scrollto" href="./pricing">Planos</a></li>
        
          <li><a class="nav-link scrollto" href="/contact#contact-form">Contacto</a></li>
          <li><a class="getstarted scrollto" href="login">Entrar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


    <div class="container">
        <h1 class="mt-4">How to Use</h1>

        <!-- JavaScript Example -->
        <div class="how-to-card">
            <h2 class="language-title">JavaScript</h2>
            <div class="code-example">
                <pre>
                    <code>
// JavaScript Example
const data = {
    subject: "Your Subject",
    receiver: "receiver@example.com",
    api_key: "your_api_key",
    body: "Your Email Body",
    email_from: "your_email@example.com"
};

fetch("https://api.gokside.site/v1/send/email", {
    method: "POST",
    headers: {
        "Content-Type": "application/json"
    },
    body: JSON.stringify(data)
})
.then(response => response.json())
.then(data => console.log(data))
.catch(error => console.error(error));
                    </code>
                </pre>
            </div>
            <button class="btn btn-primary copy-button" data-clipboard-target="./js-code">Copy Code</button>
        </div>

        <!-- Python Example -->
        <div class="how-to-card">
            <h2 class="language-title">Python</h2>
            <div class="code-example">
                <pre>
                    <code>
# Python Example
import requests

data = {
    'subject': 'Your Subject',
    'receiver': 'receiver@example.com',
    'api_key': 'your_api_key',
    'body': 'Your Email Body',
    'email_from': 'your_email@example.com'
}

response = requests.post('https://api.gokside.site/v1/send/email', json=data)

print(response.json())
                    </code>
                </pre>
            </div>
            <button class="btn btn-primary copy-button" data-clipboard-target="./python-code">Copy Code</button>
        </div>

        <!-- PHP Example -->
        <div class="how-to-card">
            <h2 class="language-title">PHP</h2>
            <div class="code-example">
                <pre>
                    <code>

// PHP Example
$data = [
    'subject' => 'Your Subject',
    'receiver' => 'receiver@example.com',
    'api_key' => 'your_api_key',
    'body' => 'Your Email Body',
    'email_from' => 'your_email@example.com'
];

$options = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-Type: application/json',
        'content' => json_encode($data)
    ]
];

$context = stream_context_create($options);
$response = file_get_contents('https://api.gokside.site/v1/send/email', false, $context);
if ($response === FALSE) {
    die('Error');
}

echo $response;

                    </code>
                </pre>
            </div>
            <button class="btn btn-primary copy-button" data-clipboard-target="./php-code">Copy Code</button>
        </div>

        <!-- Node.js Example -->
        <div class="how-to-card">
            <h2 class="language-title">Node.js</h2>
            <div class="code-example">
                <pre>
                    <code>
// Node.js Example
const https = require('https');

const data = JSON.stringify({
    subject: 'Your Subject',
    receiver: 'receiver@example.com',
    api_key: 'your_api_key',
    body: 'Your Email Body',
    email_from: 'your_email@example.com'
});

const options = {
    hostname: 'example.com',
    port: 443,
    path: '/api/send-email',
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'Content-Length': data.length
    }
};

const req = https.request(options, (res) => {
    let response = '';

    res.on('data', (chunk) => {
        response += chunk;
    });

    res.on('end', () => {
        console.log(JSON.parse(response));
    });
});

req.on('error', (error) => {
    console.error(error);
});

req.write(data);
req.end();
                    </code>
                </pre>
            </div>
            <button class="btn btn-primary copy-button" data-clipboard-target="./nodejs-code">Copy Code</button>
        </div>
        
        <!-- Add More Examples for Other Languages Here -->

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.copy-button');
    </script>
    </body>
</html>