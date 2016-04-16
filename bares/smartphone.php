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
<html lang="pt_br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="worldvision3d">

    <title>NightSerrana</title>
<link rel="icon" type="image/png" href="/nightserrana/img/ico.ico" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" media="all">
 
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  <script src="js/modernizr.js"></script> <!-- Modernizr -->
<script src="js/main.js"></script>


    

</head>




<body>
  <main class="cd-main-content">
    <div class="cd-tab-filter-wrapper">
  


  <br><br><br>
    </div> 

		<section class="cd-gallery">
			<ul>
				
                
                         
<li class="mix coca-cola co coca color-1 check3 radio2 option4">
	 <div >

  <?php

include_once("conecta.php");
include_once("data.php");

$consulta=$pdo->prepare("SELECT * FROM silva where dia_semana = :dia_semana;");
$consulta->bindValue(':dia_semana', $nomediadasemana, PDO::PARAM_INT);
$consulta->execute();
$linha = $consulta->fetch(PDO::FETCH_ASSOC); 

    ?> 

      <img src="img/img-01.jpg" alt="Image 1"></a>
      <div type="text" class="caption">
      	<br>
      	<h1>Nome: Coca-cola</h1><br>
        
        <h1 type="text">Evento: <?php 
       
         echo   $linha["evento"]; 
    
           ?>
         </h1><br>
        <h1 type="text">Horario: <?php 
          
          echo   $linha["horario"];  
    
           ?></h1><br>
        <h1 type="text">Local: <?php 
          
        echo $linha["local"];
    
           ?>

         </h1><br>
     


      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
    </div>		
</li>
                
                         
<li class="mix color-1 check3 radio2 option4">
	 <div >
      
      <img src="img/img-02.jpg" alt="Image 2"></a>
     <div type="text" class="caption">
        <br>
        <h1>Nome: Coca-cola</h1><br>
        
        <h1 type="text">Evento: <?php 
       
         echo   $linha["evento"]; 
    
           ?>
         </h1><br>
        <h1 type="text">Horario: <?php 
          
          echo   $linha["horario"];  
    
           ?></h1><br>
        <h1 type="text">Local: <?php 
          
        echo $linha["local"];
    
           ?>

         </h1><br>
     


      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
    </div>		
</li>
                
                         
<li class="mix color-1 check3 radio2 option4">
	 <div >
      
      <img src="img/img-03.jpg" alt="Image 3"></a>
      <div type="text" class="caption">
        <br>
        <h1>Nome: Coca-cola</h1><br>
        
        <h1 type="text">Evento: <?php 
       
         echo   $linha["evento"]; 
    
           ?>
         </h1><br>
        <h1 type="text">Horario: <?php 
          
          echo   $linha["horario"];  
    
           ?></h1><br>
        <h1 type="text">Local: <?php 
          
        echo $linha["local"];
    
           ?>

         </h1><br>
     


      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
    </div>		
</li>

                    
             
           
				
				<li class="mix color-2 check2 radio2 option2"><img src="img/img-2.jpg" alt="Image 2">
					<div class="caption">
      	<br>
      	<h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
				</li>


				<li class="mix color-1 check3 radio3 option1"><img src="img/img-3.jpg" alt="Image 3">

				<div class="caption">
      	<br>
      	<h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>

  </li>
				<li class="mix color-1 check3 radio2 option4"><img src="img/img-4.jpg" alt="Image 4">

				<div class="caption">
      	<br>
      	<h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
  </li>
				<li class="mix color-1 check1 radio3 option2"><img src="img/img-5.jpg" alt="Image 5">
				<div class="caption">
      	<br>
      	<h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
  </li>
				<li class="mix color-2 check2 radio3 option3"><img src="img/img-6.jpg" alt="Image 6">
				<div class="caption">
      	<br>
      	<h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
  </li>
				<li class="mix color-2 check2 radio2 option1"><img src="img/img-7.jpg" alt="Image 7">
				<div class="caption">
      	<br>
      	<h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
  </li>
				<li class="mix color-1 check1 radio3 option4"><img src="img/img-8.jpg" alt="Image 8">
				<div class="caption">
      	<br>
      	<h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
  </li>
				<li class="mix color-2 check1 radio2 option3"><img src="img/img-9.jpg" alt="Image 9">
				<div class="caption">
      	<br>
      	<h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
  </li>
				<li class="mix color-1 check3 radio2 option4"><img src="img/img-10.jpg" alt="Image 10">
				<div class="caption">
      	<br>
      	<h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
  </li>
				<li class="mix color-1 check3 radio3 option2"><img src="img/img-11.jpg" alt="Image 11">
				<div class="caption">
      	<br>
      	<h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
  </li>
				<li class="mix choperia check1 radio3 option1"><img src="img/img-12.jpg" alt="Image 12">
				<div class="caption">
      	<br>
      	<h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conheça</a> 
      </div>
  </li>

				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">Não encontrado.</div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">

			<form>
				<div class="cd-filter-block">
					<h4>Pesquisar</h4>
					
					<div class="cd-filter-content">
						<input type="search" placeholder="Exemplo bar do ze...">
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>filtre por atrações.</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox1">Bar com Sinuca</label>
						</li>

						<li>
							<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">Bar com Musica</label>
						</li>

						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">Bar com Chopp</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Filtre por localidade</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Qual localidade</option>
								<option value=".option1">Centro</option>
								<option value=".option2">Itaipava</option>
								<option value=".option3">Quitandinha</option>
							<!-- 	<option value=".option4">Option 4</option> -->
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
 <!--
				<div class="cd-filter-block">
					<h4>Radio buttons</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">All</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">Choice 2</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
							<label class="radio-label" for="radio3">Choice 3</label>
						</li>
					</ul> cd-filter-content -->
		<!-- 		</div> cd-filter-block -->
			</form>

			<a href="#0" class="cd-close">Fechar</a>
		</div> <!-- cd-filter -->

<a href="#0"   class="cd-filter-trigger">Filtros</a>
	</main> <!-- cd-main-content -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>