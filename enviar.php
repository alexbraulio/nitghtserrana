<?php

$nomeremetente     = $_POST['nomeremetente'];
$emailremetente    = trim($_POST['emailremetente']);
$emaildestinatario = 'feedback@nightserrana.com.br'; 
$telefone      	   = $_POST['telefone'];
$assunto          = $_POST['assunto'];
$mensagem          = $_POST['mensagem'];
  

$mensagemHTML = '<P>FORMULARIO PREENCHIDO NO SITE WWW.NIGHTSERRANA.COM.BR</P>
<p><br>Nome:</br> '.$nomeremetente.'
<p><br>E-Mail:</br> '.$emailremetente.'
<p><br>Telefone:</br> '.$telefone.'
<p><br>Assunto:</br> '.$assunto.'
<p><br>Mensagem:</br> '.$mensagem.'</p>
<hr>';

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: $emaildestinatario\r\n"; // remetente
$headers .= "Return-Path:$emaildestinatario\r\n"; // return-path
$envio = mail("$emaildestinatario", "$assunto", "$mensagemHTML", "$headers"); 
 
if($envio)
echo "<script>location.href='index.php'</script>"; 

?>