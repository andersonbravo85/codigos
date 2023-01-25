<?php

/*
  Scripts de exemplo de backup/restore de banco de dados MYSQL
*/

/*
*  Tabela Específica
*/

// Backup
$tableName  = 'tabelaX';
$backupFile = 'backup/tabelaX.sql';
$query      = "SELECT * INTO OUTFILE '$backupFile' FROM $tableName";
$result = mysql_query($query);

// Restore
$tableName  = 'tabelaX';
$backupFile = 'backup/tabelaX.sql';
$query      = "LOAD DATA INFILE '$backupFile' INTO TABLE $tableName";
$result = mysql_query($query);

////////////////////////////////////////////////////////////

/*
*  Todo o banco de dados
*/

// Backup
$full_file = 'mybackup.sql';
$server = "127.0.0.1";
$dbname = "meubanco"; // para todas as tabelas use '--all-databases'
$user = "root";
$mysqlpass = '';

$configpwdfile = ".my.cnf";
file_put_contents($configpwdfile, "[mysqldump]\r\npassword=".$mysqlpass);
@chmod($configpwdfile, 0600);

$cmd = 'mysqldump ';
$cmd .= ' --defaults-file='.$configpwdfile.' ';
$cmd .= ' -h '.$server.' ';
$cmd .= ' --user="'.$user.'" ';
//$cmd .= ' --password="'.$mysqlpass.'" ';
$cmd .= ' '.$dbname.' ';
$cmd .= ' > '.$full_file;

shell_exec($cmd);

// Restore 
// igual ao codigo acima
// a diferenca é que no backup jogamos o conteudo do banco para o arquivo  
// backup: db > file.txt
// ja no restore é ao contrario: file.txt > db

// OBS.: O banco precisa ter sido criado anteriormente

$full_file = 'mybackup.sql';
$server = "127.0.0.1";
$dbname = "meubanco";
$user = "root";
$mysqlpass = '';

$configpwdfile = ".my.cnf";
file_put_contents($configpwdfile, "[mysqldump]\r\npassword=".$mysqlpass);
@chmod($configpwdfile, 0600);

$cmd = 'mysqldump ';
$cmd .= ' --defaults-file='.$configpwdfile.' ';
$cmd .= ' -h '.$server.' ';
$cmd .= ' --user="'.$user.'" ';
//$cmd .= ' --password="'.$mysqlpass.'" ';
$cmd .= ' '.$dbname.' ';
$cmd .= ' < '.$full_file;

shell_exec($cmd);
