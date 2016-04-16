<?php

  require_once("session.php");
  
  require_once("class.user.php");
  $auth_user = new USER();
  
  
  $user_id = $_SESSION['user_session'];
  
  $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
  $stmt->execute(array(":user_id"=>$user_id));
  
  $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>Sr(a) <?php print($userRow['user_name']); ?></title>
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.nightserrana.com.br">NIGHTSERRANA | SYSTEM</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/home.php">HOME</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="glyphicon glyphicon-user"></span>&nbsp;Olá <?php echo $userRow['user_email']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Meu Perfil</a></li>
                <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sair</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="clearfix"></div>
      
    
<div class="container-fluid" style="margin-top:50px;">
  
    <div class="container">

       <label class="h5">Seja bem vindo ao NIGHTSERRANA | SYSTEM <br>
      Senhor(a): <?php print($userRow['user_name']); ?></label>
        <hr />
        
        <h1>
        <a href="home.php"><span class="glyphicon glyphicon-home"></span> VOLTAR PARA NIGHTSERRANA</a> &nbsp; 
    <a class="glyphicon glyphicon-share" href="logout.php?logout=true">SAIR</a>
    <div class="clearfix"></div>


    
    </div>

</div>

<script src="bootstrap/js/bootstrap.min.js"></script>




<div class="container">
      <div class="page-header">
             <h1>Controlhe de eventos, horários e local:</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
                <table class="table table-bordered">
    <thead>
      <tr>
                <th>Dia da Semana</th>
                <th>Evento</th>
                <th>Horario</th>
                <th>Local</th>
                <th>Editar</th>
               

      </tr>
    </thead>

        
  <?php
  //TRAZ OS DADOS PARA EXIBIR NA TELA 
  $meunome=$userRow['user_name'];
  include "conecta.php";
  $sql_visualizar = $pdo->prepare("SELECT * FROM $meunome");
  $sql_visualizar->execute();
  while($linha =$sql_visualizar->fetch(PDO::FETCH_ASSOC)){
   $id = $linha['id'];

  ?>
</div>  
   <tbody>
                <tr>
                <td><?php echo       $linha["dia_semana"];                      ?></td>
                <td><?php echo       $linha["evento"];                      ?></td>
                <td><?php echo       $linha["horario"];                     ?></td>
                <td><?php echo       $linha["local"];                      ?></td>
              
                             
                <td>       
  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal22<?php echo  $linha['id']  ?>">Editar.</button>
  <div class="modal fade" id="myModal22<?php echo  $linha['id']  ?>" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cadastro de Cliente.</h4>
        </div>
          <div class="modal-body">
          <p>EDIÇÃO DE CRONOGRAMA</p>

<div class="row">
     <div class="col-md-12">
            <form method="post" role="form" enctype="multipart/form-data" action="http://system.nightserrana.com.br/edita.php?funcao=edita&id=<?php echo  $linha['id'] ?>">
              <div class="form-group">
                <label class="control-label" for="marca">Dia da Semana:</label>
                <input name="dia_semana" type="text"class="form-control" id="dia_semana" placeholder="<?php echo   $linha['dia_semana'];                            ?>" disabled>
                <label class="control-label" for="marca">Evento:</label>
                <input name="evento" type="text"class="form-control" id="evento" value="<?php echo   $linha['evento'];                                    ?>">
                <label class="control-label" for="marca">Horário:</label>
                <input name="horario" type="text"class="form-control" id="horario" value="<?php echo   $linha['horario'];                                 ?>">
                <label class="control-label" for="marca">Local:</label>
                <input name="local" type="text"class="form-control" id="local" value="<?php echo   $linha['local'];                                  ?>">
           
             
                
              </div>
              <button type="submit" class="btn btn-success">Alterar.</button>
            </form>
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
        </div>
      
    </div>
  </div>
</div>
</td>
     
                </tr> 
                <?php 
                }

                 ?>     


            </tbody>
  </table>
</div>

                 <p class="blockquote-reverse" style="margin-top:200px;">
    EM CASO DE DÚVIDAS ENTRE EM CONTATO<br /><br />
     <a class="glyphicon glyphicon-question-sign" href="logout.php?logout=true">DÚVIDAS?</a>
    </p>
    <br />

<footer class="footer">
      <div class="container">
        <p class="text-muted">&copy; copyright, <a href="http://www.nightserrana.com.br" target="_blank">www.nightserrana.com.br</a> | <a href="http://localhost/nightserrana/home.php#contact">Contato.</a></p>
      </div>
</footer>
</body>
       
</html>