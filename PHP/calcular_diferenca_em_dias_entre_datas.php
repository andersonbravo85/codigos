<?php

$time_inicial = 1000; // colocar aqui timestamp inicial
$time_final = 100000; // colocar aqui timestamp final

$diferenca = $time_final - $time_inicial;

$dias = (int) floor($diferenca / (60 * 60 * 24));
