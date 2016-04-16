<?php
$usuario="admin";
$senha="nightserrana2016";

function msg_erro(){
    header('WWW-Authenticate: Basic realm="NIGHTSERRANA - Acesso Restrito"');
    header('HTTP/1.0 401 Unauthorized');
    echo '<h1>Acesso Restrito - Digite os dados de Autenticação</h1>';
    exit;
}

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
     msg_erro();
}else{
     if ($_SERVER['PHP_AUTH_USER']!=$usuario || $_SERVER['PHP_AUTH_PW']!=$senha) {
              msg_erro();
     }
}
?>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="worldvision3d">

    <title>NightSerrana</title>

    <link rel="icon" type="image/png" href="/nightserrana/img/ico.ico" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

   

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Plano Night</span> Serrana
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li>
                        <a class="page-scroll" href="/">NightSerrana</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#bar">Bares</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#casa">Casa Noturna</a>
                    </li>
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 align="center">NightSerrana</h1>
                        <p class="intro-text">As melhores opções de publicidade para noite Petropolitana.<br>Veja todas as opções e planos disponíveis no momento.<br>Conheça todos os Planos disponíveis e muito mais.</p>
                             <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    

<section id="bar" class="container content-section text-center">
                   <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-primary">Planos Para Bares</h1>
            <p class="text-center">Escolha o plano que melhor lhe atente.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img src="/nightserrana/img/bares/thumb-01.jpg"
            class="center-block img-circle img-responsive">
            <br>

            <h2 class="text-center">Plano Básico</h2>
            <h3 class="text-center">crição de foto</h3>
            <h3 class="text-center">criação de logo</h3>
            <h3  class="text-center">exibição de evento.</h3>
            <h3 class="text-center">exibição de ambiente.</h3>
            <h3 class="text-center">exibição de foto na pagina principal.</h3>
            <h3 class="text-center">cobertura por 6 meses</h3>
            <h3 class="text-center"><font color="Red">Por mês R$46,67 </font></h3>
            <h1 class="text-center" ><font color="Red">total R$280,00 </font></h1>

            
<!-- botão pag seguro -->
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="B8583BD9A6A6A8044474DFB7A40A17FB" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-comprar-preto.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
           
              
          </div>
          <div class="col-md-4">
            <img src="/nightserrana/img/bares/thumb-04.jpg"
            class="center-block img-circle img-responsive">
            <h2 class="text-center">Plano Pro</h2>
            <h3 class="text-center">crição de foto</h3>
            <h3 class="text-center">criação de logo</h3>
            <h3  class="text-center">exibição de evento.</h3>
            <h3 class="text-center">exibição de ambiente.</h3>
            <h3 class="text-center">exibição de foto na pagina principal.</h3>
            <h3 class="text-center">cobertura por 12 meses</h3>
            <h3 class="text-center">Um mês gratis.</h3>
            <h3 class="text-center"><font color="Red">Por mês R$33,33</font></h3>
            <h1 class="text-center" ><font color="Red">total R$400,00</font></h1>
            <h1 class="text-center" >Desconto de <font color="Red">R$160,00</font></h1>

            <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="E2E1A68E7A7A348AA460FF93BBC297E4" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-comprar-preto.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->




          </div>
          <div class="col-md-4">
            <img src="/nightserrana/img/bares/thumb-07.jpg"
            class="center-block img-circle img-responsive">
            <h2 class="text-center">Expert</h2>
            <h3 class="text-center">crição de foto</h3>
            <h3 class="text-center">criação de logo</h3>
            <h3  class="text-center">exibição de evento.</h3>
            <h3 class="text-center">exibição de ambiente.</h3>
            <h3 class="text-center">exibição de foto na pagina principal.</h3>
            <h3 class="text-center">cobertura por 12 meses</h3>
            <h3 class="text-center">Criação de subdominio site interno.</h3>
            <h3 class="text-center">Um mês gratis.</h3>
            <h3 class="text-center"><font color="Red">Por mês R$66,67 </font></h3>
            <h1 class="text-center" ><font color="Red">total R$800,00 </font></h1>
            
            <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="848EE2FF353541F114000F9A68ABD6A6" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-comprar-preto.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->


          </div>
                </div>
            </div>
        </div>
      </section>



<section id="casa" class="container content-section text-center">
                   <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-primary">Planos Para Casas Noturnas</h1>
            <p class="text-center">Escolha o plano que melhor lhe atente.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img src="/nightserrana/img/boatebasico.jpg"
            class="center-block img-circle img-responsive">
            <br>

            <h2 class="text-center">Plano Básico</h2>
            <h3 class="text-center">crição de foto</h3>
            <h3 class="text-center">criação de logo</h3>
            <h3  class="text-center">exibição de evento.</h3>
            <h3 class="text-center">exibição de ambiente.</h3>
            <h3 class="text-center">exibição de foto na pagina principal.</h3>
            <h3 class="text-center">cobertura por 6 meses</h3>
            <h3 class="text-center"><font color="Red">Por mês R$50,00 </font></h3>
            <h1 class="text-center" ><font color="Red">total R$300,00 </font></h1>

            <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="499266CEE2E26A2AA4FE3F996555B860" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-comprar-preto.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->


          </div>
          <div class="col-md-4">
            <img src="/nightserrana/img/boatepro.jpg"
            class="center-block img-circle img-responsive">
            <h2 class="text-center">Plano Pro</h2>
            <h3 class="text-center">crição de foto</h3>
            <h3 class="text-center">criação de logo</h3>
            <h3  class="text-center">exibição de evento.</h3>
            <h3 class="text-center">exibição de ambiente.</h3>
            <h3 class="text-center">exibição de foto na pagina principal.</h3>
            <h3 class="text-center">cobertura por 12 meses</h3>
            <h3 class="text-center">Um mês gratis.</h3>
            <h3 class="text-center"><font color="Red">Por mês R$35,00</font></h3>
            <h1 class="text-center" ><font color="Red">total R$420,00</font></h1>
            <h1 class="text-center" >Desconto de <font color="Red">R$180,00</font></h1>

            
            <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="C15FEF73BFBF299CC43B7F831D5D1EE5" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-comprar-preto.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->


          </div>
          <div class="col-md-4">
            <img src="/nightserrana/img/boateultra.jpg"
            class="center-block img-circle img-responsive">
            <h2 class="text-center">Expert</h2>
            <h3 class="text-center">crição de foto</h3>
            <h3 class="text-center">criação de logo</h3>
            <h3  class="text-center">exibição de evento.</h3>
            <h3 class="text-center">exibição de ambiente.</h3>
            <h3 class="text-center">exibição de foto na pagina principal.</h3>
            <h3 class="text-center">cobertura por 12 meses</h3>
            <h3 class="text-center">Criação de subdominio site interno.</h3>
            <h3 class="text-center">Um mês gratis.</h3>
            <h3 class="text-center"><font color="Red">Por mês R$66,67 </font></h3>
            <h1 class="text-center" ><font color="Red">total R$800,00 </font></h1>
            
             <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="8916C48A9999587FF4512F98213A4ADC" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-comprar-preto.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->


             </a>
              
          </div>
                </div>
            </div>
        </div>
      </section>

    





  
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; NightSerrana 2016 </p> <p>  <?php
$arquivo = "contavenda.txt";
// Este é o arquivo de texto que mantemos na nossa contagem

$handle = fopen($arquivo, 'r+') ;
/*
Aqui vamos definir o arquivo, as permissões para ler e escrever, por isso utilizamos o r+ (ler e escrever no arquivo)
*/

$data = fread($handle, 512) ;
//Obtem a contagem atual do arquivo

$contador = $data + 1;
//Adiciona + 1
print "Número de acessos ".$contador;
//Exibe na tela o resultado encontrado no TXT

fseek($handle, 0);

fwrite($handle, $contador) ;
// Salva o valor da variavel contador no arquivo

fclose($handle) ;
// Fecha o arquivo
?></p>
        </div>
    </footer>
    


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
