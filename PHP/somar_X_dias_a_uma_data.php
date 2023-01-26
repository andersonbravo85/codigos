<?php

$timestamp_hoje = mktime(0, 0, 0, date("m") , date("d"), date("Y"));

echo date("d/m/Y", $timestamp_hoje);

$x = 10; // numero de dias que quero somar a data

$data_futura = $timestamp_hoje + ($x*24*60*60);

echo date("d/m/Y", $data_futura);
