<?php

/*
  Função para remover acentos
*/

function remove_caracter($string) {
  
  $naopode = array("á","à","ã","â","é","ê","í","ó","ô","õ","ú","ü","ç","Á","À","Ã","Â","É","Ê","Í","Ó","Ô","Õ","Ú","Ü","Ç");
  $pode    = array("a","a","a","a","e","e","i","o","o","o","u","u","c","A","A","A","A","E","E","I","O","O","O","U","U","C");

  $newstring = str_replace($naopode, $pode, $string);
}

echo remove_caracter("Não de açúcar pára o superman"); // Nao de acucar para o superman
