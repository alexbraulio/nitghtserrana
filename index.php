<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="worldvision3d">

    <title>NightSerrana</title>

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

   

      



    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 align="center">Em Breve!!!</h1>
                        <h2 align="center">NightSerrana</h2>
                        <p class="intro-text">As melhores opções da noite Petropolitana.<br>Saiba de todas as baladas que estão rolando no momento.<br>Conheça todos os bares disponíveis e muito mais.</p>
                             <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>NightSerrana</h2>
 <p>A NightSerrana vem apresentar tudo que há de melhor na noite petropolitana,
  para que você e seus amigos possam curtir as melhores baladas da cidade!!
Conheça as <a href="">Casas Noturnas</a>
 e todas as <a href="">Chopperias disponíveis</a>.
</p>
<p>Gostaria de reunir os amigos e tomar aquela cerveja bem gelada, 
mas não sabe onde ir?! Então a NightSerrana lhe mostra todos os 
<a href="">Bares</a> 
da cidade de Petrópolis. Aqui você ficará por dentro de tudo que há 
de disponível para sua Night, e ainda pode encontrar os famosos 
<a href="">Food Truck</a>.</p>
                <p>Na NightSerrana você conhece todos os lugares em um só lugar.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center">
            <p>Copyright &copy; NightSerrana 2016 </p> <p>  <?php
$arquivo = "contador.txt";
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


</body>

</html>
