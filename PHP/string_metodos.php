<?php

// explode - quebra uma string em um array
$str1 = "Anderson,Bravo,dos,Santos";
$arr1 = explode(",", $str1);
print_r($arr1); // Array ( [0] => Anderson, [1] => Bravo, [2] => dos, [3] => Santos )

// implode - junta um array em uma string
$arr2 = array("Anderson", "Bravo", "dos", "Santos");
$str2 = implode(",", $arr2);
echo $str2; // Anderson,Bravo,dos,Santos

// htmlspecialchars - converte "<" (less than) and ">" (greater than) em entidades HTML
$str3 = "Anderson <Bravo>";
echo htmlspecialchars($str3); // Anderson &lt;Bravo&gt;

// addslashes - adiciona uma barra invertida na frente de cada aspas (simples ou dupla)
$str4 = "Anderson Bravo's";
echo htmlspecialchars($str4); // Anderson Bravo\'s;

// strip_tags - remove tags html
$str5 = "<p><h1>Anderson</h1> <h2>Bravo</h2></p>";
echo htmlspecialchars($str5); // Anderson Bravo;

// strrev - inverte uma string
$str6 = "Anderson Bravo";
echo strrev($str6); // ovarB nosrednA

// nl2br - converte quebra de linha em br (quebra de linha html)
$str7 = "Anderson\nBravo";
echo nl2br($str7); // Anderson<br />Bravo
