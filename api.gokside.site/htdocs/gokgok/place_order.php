<?php
$nome = $_POST['nome'];
$end = $_POST['end'];
$tel = $_POST['tel'];
$prod = $_POST['prod'];
$mod = $_POST['mod'];

$phone='+244937419536';
$apikey='5744775';
$message= 'Olá Elvira *'.$nome.'* - Telefone: '.$tel.', Endereço: '.$end.'. Fez uma encomenda do Kit: '.base64_decode(base64_decode(base64_decode($prod))).', Modalidade de aquisição: '.$mod;

$url='https://api.callmebot.com/whatsapp.php?source=php&phone='.$phone.'&text='.urlencode($message).'&apikey='.$apikey;
$html=file_get_contents($url);


?>

