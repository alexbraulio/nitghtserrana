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

$gravanomecliente 		=	  $_POST['nome'];
//EFETUA A CRIAวรO DA TABELA
if($_GET['funcao'] == "gravacliente"){

$createTable = $pdo->exec("CREATE TABLE IF NOT EXISTS `$gravanomecliente` (
`id` int(11) NOT NULL,
  `dia_semana` enum('Segunda-feira','Terca-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado','Domingo') NOT NULL,
  `evento` varchar(255) NOT NULL,
  `horario` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;");}

$insere=$pdo->prepare("INSERT INTO $gravanomecliente (`id`, `dia_semana`, `evento`, `horario`, `local`) VALUES
(1, 'Segunda-feira', 'Aberto', 'de 11:00 as 22:00', 'rua segunda'),
(2, 'Terca-feira', 'Aberto', 'de 22:00 แs 01:00', 'rua do local'),
(3, 'Quarta-feira', 'Aberto', 'de 18:00 แs 22:00', 'rua das vias'),
(4, 'Quinta-feira', 'Aberto', 'de 22:00 แs 12:00', 'rua das nuvens'),
(5, 'Sexta-feira', 'Aberto', 'de 11:00 แs 16:00', 'rua do vasco'),
(6, 'Sabado', 'Aberto', 'de 11:00 แs 04:00', 'rua da esquina'),
(7, 'Domingo', 'Aberto', 'de 11:00 แs 19:00', 'rua da barใo');");
$insere->execute(); 


//$insere=$pdo->prepare("INSERT INTO $gravanomecliente (nome) value
//	(
//'$gravanomecliente')");
//$insere->execute(); 

header("Location: http://system.nightserrana.com.br/index.php");






?>