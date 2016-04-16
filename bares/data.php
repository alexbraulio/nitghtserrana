<?php
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
 date_default_timezone_set( 'America/Sao_Paulo' );
$meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");

$diasdasemana = array (1 => "Segunda-feira",2 => "Terca-feira",3 => "Quarta-feira",4 => "Quinta-feira",5 => "Sexta-feira",6 => "Sabado",7  => "Domingo");

 $hoje = getdate();
 $dia = $hoje["mday"];
 $mes = $hoje["mon"];
 $nomemes = $meses[$mes];
 $ano = $hoje["year"];
 $diadasemana = $hoje["wday"];
 $nomediadasemana = $diasdasemana[$diadasemana];
// echo "$nomediadasemana, $dia de $nomemes de $ano";
 ?>