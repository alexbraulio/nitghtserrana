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


?>