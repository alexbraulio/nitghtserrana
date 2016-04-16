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
}

session_start();
require_once('class.user.php');
$user = new USER();

if($user->is_loggedin()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);	
	
	if($uname=="")	{
		$error[] = "Coloque seu nome !!!";	
	}
	else if($umail=="")	{
		$error[] = "Coloque seu e-mail !!!";	
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Coloque um e-mail válido!';
	}
	else if($upass=="")	{
		$error[] = "Coloque sua Senha!";
	}
	else if(strlen($upass) < 6){
		$error[] = "Sua senha deve ter no minimo 6 caracters";	
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			if($row['user_name']==$uname) {
				$error[] = "Desculpe, usuário já cadastrado.";
			}
			else if($row['user_email']==$umail) {
				$error[] = "Desculpe, e-mail já cadastrado.";
			}
			else
			{
				if($user->register($uname,$umail,$upass)){	
					$user->redirect('index.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NIGHTSERRANA SYSTEM</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="style.css" type="text/css"  />
</head>
<body>

<div class="signin-form">


<div class="container">
    	
        <form method="post" class="form-signin" >
            <h2 class="form-signin-heading">CADASTRO DE LOGIN <BR> NIGHTSERRANA SYSTEM.</h2><hr />
            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                 <div class="alert alert-info">



                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
                 </div>
                 <?php
			}
			?>
			
			 
            <div class="form-group">
            <input type="text" class="form-control" name="txt_uname" placeholder="Nome" value="<?php if(isset($error)){echo $uname;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="txt_umail" placeholder="E-Mail" value="<?php if(isset($error)){echo $umail;}?>" />
            </div>
            <div class="form-group">
            	<input type="password" class="form-control" name="txt_upass" placeholder="Senha" />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
            	<button type="submit" class="btn btn-primary" name="btn-signup">
                	<i class="glyphicon glyphicon-open-file"></i>&nbsp;CADASTRAR
                </button>
            </div>
            <br />
            <!--<label>have an account ! <a href="#">Sign In</a></label>-->
        </form>
</form>
        </div>
       </div>
</div>

</div>

</body>
</html>