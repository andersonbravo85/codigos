<?php

/*
	Exemplos de acesso e manipulação de banco de dados ( MYSQL )
	
	mysqli - Extensão que permite a manipulação de bancos de dados MYSQL
	https://www.php.net/manual/pt_BR/book.mysqli.php
*/

// Parâmetros de conexão ao banco de dados
$servidor = "NOME_DO_SERVIDOR";
$banco = "NOME_DO_BANCO";
$usuario = "NOME_DO_USUARIO";
$senha = "SENHA_DO_USUARIO";

// Conecta no banco de dados, retornando um 'ponteiro' com a conexão para os próximos comandos
$db = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$db || mysqli_connect_errno())
    die("ERRO: ".mysqli_connect_error());

//
// mysqli_query() - Executa o comando sql
//

// Inicia as transações no banco de dados
mysqli_query($db, "BEGIN");

// insere no banco
$sql = "INSERT INTO pessoa (nome, idade) VALUES ('Anderson', 37);";

$query = mysqli_query($db, $sql);

if (!$query) {
	// Algo deu errado. Termina a transação, anulando as operações realizadas anteriormente
	mysqli_query($db, "ROLLBACK");	
	die("Error description: " . mysqli_error($db));
}

// retorna o último ID inserido
$ultimo_id_inserido = mysqli_insert_id($db);

// seleciona dados do banco
$sql = "SELECT nome, idade FROM pessoa;";

$query = mysqli_query($db, $sql);

// Em caso de SELECT, retorna o número de linhas encontradas
$numero_de_pessoas = mysqli_num_rows($query);

// Em caso de SELECT, temos uma query que nos retornará as linhas selecionadas
while ($pessoa = mysqli_fetch_assoc($query))
	echo "Meu nome é ".$pessoa['nome']." e eu tenho ".$pessoa['idade']." anos.\r\n";

// retorna o ponteiro para o primeiro registro do banco
 mysqli_data_seek($db, 0);

// Finaliza as transações. Nesse momento as operações realizadas são salvas no banco de dados
mysqli_query($db, "COMMIT");
