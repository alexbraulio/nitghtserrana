
<?php 

$hostname = 'mysql.hostinger.com.br';
$username = 'u747579689_sys';
$password = '9A6jUme9O5MPfw';
$database = 'u747579689_sys';
 
try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //echo 'Conexao efetuada com sucesso!';
}
catch(PDOException $e){
    echo $e->getMessage();
}

  require_once("session.php");
  
  require_once("class.user.php");
  $auth_user = new USER();
  
  
  $user_id = $_SESSION['user_session'];
  
  $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
  $stmt->execute(array(":user_id"=>$user_id));
  
  $userRow=$stmt->fetch(PDO::FETCH_ASSOC);


$meunome=$userRow['user_name'];
////FUNÇÃO PARA EDITAR

$id		=	  $_POST['id'];

$evento 	=	  $_POST['evento'];
$horario 		=	  $_POST['horario'];
$local 			=	  $_POST['local'];

if($_GET['funcao'] == "edita"){
$id = $_GET['id'];
$insertaleracao=$pdo->prepare("UPDATE $meunome SET 
evento='$evento', 			               
horario='$horario',                
local='$local' 		               
WHERE id = '$id'");
$insertaleracao->execute();
header("Location: http://system.nightserrana.com.br/profile.php");
}


?>