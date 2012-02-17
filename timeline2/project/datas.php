<?php
function data_info(){
$dia = date("j")-1;
$hora = date("H")-3;
$minuto = date("i");
$segundo = date("s");
 
$semana = array(0 => "Domingo",1 => "Segunda", 2 => "Terça", 3 => "Quarta",  4 => "Quinta", 5 => "Sexta",  6 => "Sábado");
$mes = array(1 => "Janeiro",  2 => "Fevereiro",  3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro",  11 => "Novembro", 12 => "Dezembro");
 
$ano = date("Y");
$data_completa = date("d/m/y");
$hora_completa = $hora.":".$minuto.":".$segundo;
$misc = $semana[date("w")].", ".date("j")." de ".$mes[date("n")]." de ".date("Y");
$data_time = date("m y");
}
?>