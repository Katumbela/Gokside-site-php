<?php
$to =  Array("Isaiaschicango1@gmail.com","adafedemendes10@gmail.com","edmilsonhb123@gmail.com","abelmassanga@gmail.com ","filomenabuti@icloud.com","ladjeizedmilson4@gmail.com","manuelamuana50@gmail.com","benofernandes27@gmail.com","helmercap@gmail.com","quingila.hebo@gmail.com","evaniodistinto@gmail.com","pauloafonso.modupe@gmail.com","pauloafonso.modupe@gmail.com","delciomanico2003@gmail.com","Cristovaocacombe@hotmail.com","brunomalecama97@gmail.com","zepaulo31@hotmail.com","neide.carlos@unitel.co.ao","neide.carlos@unitel.co.ao","clarajeovania9@gmail.com","euclidesbizerra10@gmail.com","emanuela.silva@unitel.co.ao","jessicaad24@gmail.com","lukenyestevao12@gmail.com","Kenikenilson@gmail.com","celmiratuiango@gmail.com","davibanvo2@gmail.com","gabrielcorto272@gmail.com","disgohortencio@gmail.com","horaciop08@gmail.com","horaciop08@gmail.com", "ja3328173@gmail.com");

$subject = "SELECIONADO - Unitel Code Robótica";

$message = "
<html>
<head>
<title>Unitel Code Robótica</title>
</head>
<body>
<h1 style='color: orange'>Unitel Code Robótica</h1>
<h2 style='color: #0066be'>AROTEC SA</h2>
<p>
Cordiais saudações Prezado/a Encarregado 
<br>
Gostaríamos de informar que o seu educando foi selecionado para participar da formação de programação e Robótica do Programa Unitel code.
A mesma irá decorrer no nova vida,e terá início no dia 12 do mês em curso, com duração de 3 dias.
<br><br>
<b>De informar que temos dois horários disponíveis<b><br>
manhã: <span style='color: green'>10h:00 - 12h:00</span><br>
Tarde: <span style='color: green'>14h:00 - 16h:00</span>
<br><br>
Agradeceríamos se informasse-nos o horário que o seu educando estará disponível para participar da formação.<br><br>
<span style='color: green'>Irá decorrer na urbanização Nova vida, rua 53, dentro do parque do nova vida.</span><br><br><br>
<span style='color: gray'>Cordialmente, equipa AROTEC</span><br><br>
<h1 style='color: #0066be'>AROTEC SA</h1><br>
</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <arotec.info@gmail.com>' . "\r\n";
$headers .= 'Cc: arotec.info@gmail.com' . "\r\n";


for($i = 0 ; $i < count($to); $i++ ){
mail($to[$i],$subject,$message,$headers);
}
?>
