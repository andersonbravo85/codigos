<?php

/*
  O método pathinfo retorna informações sobre o path de um arquivo.
  
  https://www.php.net/manual/pt_BR/function.pathinfo.php
*/
 
$path_parts = pathinfo('/www/htdocs/index.html');

echo $path_parts['dirname'], "\n";   // /www/htdocs
echo $path_parts['basename'], "\n";  // index.html
echo $path_parts['extension'], "\n"; // html
echo $path_parts['filename'], "\n";  // index
