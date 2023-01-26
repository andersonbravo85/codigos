<?php

/*
  Script com exemplo de como criar um sistema para exibir o número de usuários online na página.
*/

/*
  CREATE TABLE `usersonline` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,    
    `ip` VARCHAR(20) NOT NULL,    
    `last_time` INT(11) NOT NULL,  
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/

$expired = 5; //minutos para inatividade de um usuário

$ip = $_SERVER["REMOTE_ADDR"]; //pega o IP do visitante

$db = @mysqli_connect("localhost", "usuario", "senha", "banco");

mysqli_query($db, "BEGIN");

// select para verificar se o usuario ja visitou a pagina
if (mysqli_num_rows(mysqli_query($db, "SELECT * FROM usersonline WHERE ip = '".$ip."';")) > 0) {
	
	//se ip ja visitou, atualizo o tempo
	mysqli_query($db, "UPDATE usersonline SET last_time = ".time()." WHERE ip = '".$ip."';");

} else { 

	// caso contrario, adiciono ele na tabela
	mysqli_query($db, "INSERT INTO usersonline (ip, last_time) VALUES ('".$ip."', ".time().");");
}

// deletamos os ips com mais de 5 minutos de inatividade
mysqli_query($db, 'DELETE FROM usersonline WHERE last_time < '.(time()-($expired*60)));

// retornamos o numero de usuarios online
echo mysqli_num_rows(mysqli_query("SELECT * FROM usersonline;")) . ' usuários online';

mysqli_query($db, "COMMIT");
