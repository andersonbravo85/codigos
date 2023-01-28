<?php

/*
	Função para formatar data e hora de acordo com timestamp fornecido
*/

function formata_data_e_hora_template($layout, $timestamp, $imprimir) {
	
	$data_formatada = date($layout, $timestamp);
	
	if ($imprimir)
		echo $data_formatada;
	else
		return $data_formatada;
}

function formataData($timestamp, $imprimir = true) {
	return formata_data_e_hora_template("d/m/Y", $timestamp, $imprimir);
}

function formataHora($timestamp, $imprimir = true) {
	return formata_data_e_hora_template("H:i:s", $timestamp, $imprimir);
}

function formataData_e_Hora($timestamp, $imprimir = true) {
	return formata_data_e_hora_template("d/m/Y H:i:s", $timestamp, $imprimir);
}

//
// Exemplos de uso
//
$timestampEx = 1632425868;

formataData($timestampEx); // 23/09/2021

$hora = formataHora($timestampEx, false);
echo $hora; // 19:37:48
