<?php
$usuario="admin";
$senha="nightserrana2016";

function msg_erro(){
    header('WWW-Authenticate: Basic realm="NIGHTSERRANA - Acesso Restrito"');
    header('HTTP/1.0 401 Unauthorized');
    echo '<h1>Acesso Restrito - Digite os dados de AutenticaÃ§Ã£o</h1>';
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


    
 
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  <script src="js/modernizr.js"></script> <!-- Modernizr -->
<script src="js/main.js"></script>


   <script type="text/javascript">
var url_mobile = "smartphone.php";
(function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))window.location=b})(navigator.userAgent||navigator.vendor||window.opera,url_mobile);
</script>
</head>




<body>

<main class="cd-main-content">
    <div class="cd-tab-filter-wrapper">
      <div class="cd-tab-filter">
        <ul class="cd-filters">
          <li class="placeholder"> 
            <a data-type="all" href="#0">All</a>
           </li>  
          <li class="filter" data-filter=".color-1"><a  href="http://www.nightserrana.com.br/" data-type="all">NightSerrana</a></li>
          <li class="filter"><a class="selected" href="#0" data-type="all">Todos</a></li>

          <li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Bares</a></li>
          <li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Casas Noturna</a></li>
          <li class="filter" data-filter=".choperia"><a href="#0" data-type="color-3">Choperias</a></li>
        </ul>
      </div> 
     </div> 

    

    <section class="cd-gallery">
      <ul>
        
                
                         
<li class="mix coca-cola co coca color-1 check3 radio2 option4">
   <div >

  <?php

include_once("conecta.php");
include_once("data.php");

$consulta=$pdo->prepare("SELECT * FROM douglasdiniz where dia_semana = :dia_semana;");
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
     


      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
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
     


      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
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
     


      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
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
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
      </div>
        </li>


        <li class="mix color-1 check3 radio3 option1"><img src="img/img-3.jpg" alt="Image 3">

        <div class="caption">
        <br>
        <h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
      </div>

  </li>
        <li class="mix color-1 check3 radio2 option4"><img src="img/img-4.jpg" alt="Image 4">

        <div class="caption">
        <br>
        <h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
      </div>
  </li>
        <li class="mix color-1 check1 radio3 option2"><img src="img/img-5.jpg" alt="Image 5">
        <div class="caption">
        <br>
        <h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
      </div>
  </li>
        <li class="mix color-2 check2 radio3 option3"><img src="img/img-6.jpg" alt="Image 6">
        <div class="caption">
        <br>
        <h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
      </div>
  </li>
        <li class="mix color-2 check2 radio2 option1"><img src="img/img-7.jpg" alt="Image 7">
        <div class="caption">
        <br>
        <h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
      </div>
  </li>

   				<li class="mix color-1 check1 radio3 option4">

   <?php

include_once("conecta.php");
include_once("data.php");

$consulta=$pdo->prepare("SELECT * FROM dangelo where dia_semana = :dia_semana;");
$consulta->bindValue(':dia_semana', $nomediadasemana, PDO::PARAM_INT);
$consulta->execute();
$linha = $consulta->fetch(PDO::FETCH_ASSOC); 

    ?> 

      <img src="img/img-8.jpg" alt="Image 8"></a>
      <div type="text" class="caption">
        <br>
        <h1>Nome: Dangelo</h1><br>
        
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
     


      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e Conhe�a</a> 
      </div>
    </div>    
</li>
                



        <li class="mix color-2 check1 radio2 option3"><img src="img/img-9.jpg" alt="Image 9">
        <div class="caption">
        <br>
        <h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
      </div>
  </li>
        <li class="mix color-1 check3 radio2 option4"><img src="img/img-10.jpg" alt="Image 10">
        <div class="caption">
        <br>
        <h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
      </div>
  </li>
        <li class="mix color-1 check3 radio3 option2"><img src="img/img-11.jpg" alt="Image 11">
        <div class="caption">
        <br>
        <h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
      </div>
  </li>
        <li class="mix choperia check1 radio3 option1"><img src="img/img-12.jpg" alt="Image 12">
        <div class="caption">
        <br>
        <h1>Nome: </h1><br>
        <h1>Evento: </h1><br>
        <h1>Horario: </h1><br>
        <h1>Local: </h1><br>
      <a href="#" class="btn btn-Danger btn-block" role="button">Clique e ConheÃ§a</a> 
      </div>
  </li>

        <li class="gap"></li>
        <li class="gap"></li>
        <li class="gap"></li>
      </ul>
      <div class="cd-fail-message">NÃ£o encontrado.</div>
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
          <h4>filtre por atraÃ§Ãµes.</h4>

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
              <!--  <option value=".option4">Option 4</option> -->
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
    <!--    </div> cd-filter-block -->
      </form>

      <a href="#0" class="cd-close">Fechar</a>
    </div> <!-- cd-filter -->

    <a href="#0" class="cd-filter-trigger">Filtros</a>
  </main> <!-- cd-main-content -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>