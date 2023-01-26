<?php

// DD/MM/YYYY

$string = "15/10/2007";

if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $string))
	echo "OK";
else
  echo "Data inválida";
