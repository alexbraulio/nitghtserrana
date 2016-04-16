<?php
$usuario= "admin";
$senha = "nightserrana2016"; 
function msg_erro(){
   
    header('WWW-Authenticate: Basic realm=""');
    header('HTTP/1.0 401 Unauthorized');
    echo require_once('tentativaburla.php');
    exit;
}

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
     msg_erro();
}else{
     if ($_SERVER['PHP_AUTH_USER']!=$usuario || $_SERVER['PHP_AUTH_PW']!=$senha) {
              msg_erro();
     }
}?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>NIGHTSERRANA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.maskMoney.js"></script>
  <script src="js/maskdatahora.js"></script>
    

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">SISTEMA | NIGHTSERRANA</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
             </ul>
    </div>
  </div>
</nav>

<div class="container">


    <div class="modal-dialog">
      <div class="modal-content">
        
          <div class="modal-body">
          <p>Prencha os dados com cuidado.</p>
<div class="row">

               <div class="col-md-12">
               <form method="post" role="form" action="criaTB.php?funcao=gravacliente">

                           
         
                <label class="control-label" for="sel1">Nome estabelecimento:</label>
                  <select name="nome" type="text" class="form-control" id="nome" id="sel1">
                                   <option disabled="disabled" type="text">Pessoa Física:</option>
                                   <?php  
                                   include_once("conecta.php");
                                   $sql_visualizar = $pdo->prepare("SELECT * FROM users");
                                   $sql_visualizar->execute();
                                   while($linhamodelo = $sql_visualizar->fetch(PDO::FETCH_ASSOC)){
                                                                     
                                   ?>
                                   <option ><?php  echo $linhamodelo ['user_name'] ?></option><?php } ?>
                                   </select>
                               
                        
                <button type="submit" class="btn btn-default">Cadastrar.</button>
                
            
            </form>
            <form method="post" role="form" action="criaTB.php?funcao=gravacliente">

                <label class="control-label" for="sel1">Nome estabelecimento:</label>
                <input name="nome" type="text"class="form-control" id="valor">
                   <button type="submit" class="btn btn-default">Cadastrar.</button>
                
            
            </form>
          </div>
        </div>
        </div>       
      </div>      
    </div>  
  </div>  
