<?php

$db_host='fdb22.awardspace.net'; //Should contain the "Database Host" value
$db_name='3498505_cadastro'; //Should contain the "Database Name" value
$db_user='3498505_cadastro'; //Should contain the "Database User" value
$db_pass='katumbela20'; //Should contain the "Database Password" value
$nome=$_POST['nome'];
$email=$_POST['email'];
$data=$_POST['data'];
$pais=$_POST['pais'];
$tel=$_POST['telefone'];
$pass=$_POST['palavrapasse'];

$mysqli_connection = new MySQLi($db_host, $db_user, $db_pass, $db_name);


$sql= "SELECT * FROM acom";
$resultado = $mysqli_connection->query($sql);
$lista = Array();

while($dad = mysqli_fetch_array($resultado)){
     $lista[] = $dad;
     
echo json_encode($lista);
}

echo mysqli_error();


echo "obrigado por submeter se ao nosso serviço $nome. a sua conta foi criada, você poderá desfrutar do melhor!";
?>
<html><head>
    <title>conta gokside</title>
    <body>
    <br>
        <a href="index.html"><button>iiniciar sessão</button></a>
    </body>
</head></html>