<?php

/*
  Função para converter bytes em gb, mb, ...  
*/

function translate_bytes($bytes) {

  $b  = 1;
  $kb = 1024;
  $mb = 1024 * $kb;
  $gb = 1024 * $mb;
	$tb = 1024 * $gb;
	
	if ($bytes > $tb) return round($bytes/$tb, 1) . " TB";
  if ($bytes > $gb) return round($bytes/$gb, 1) . " GB";
  if ($bytes > $mb) return round($bytes/$mb, 1) . " MB";
  if ($bytes > $kb) return round($bytes/$kb, 1) . " KB";

  return round($bytes, 1) . " bytes";
} 
