<?php

/*

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

if (mysqli_connect_errno()) {
    echo "ERRO: ".mysqli_connect_error();
    die;
}

// Inicia as transações no banco de dados
mysqli_query($db, "BEGIN");

$sql = "SELECT nome, idade FROM pessoa;";

// Executa uma query no banco de dados (SELECT, UPDATE, DELETE)
$query = mysqli_query($db, $sql);

if (!$query) {
	// Algo deu errado. Termina a transação, ignorando as operações realizadas anteriormente
	mysqli_query($db, "ROLLBACK");
}

// Em caso de SELECT, temos uma query que nos retornará as linhas selecionadas
// Retorna o número de linhas encontradas
$numero_de_pessoas = mysqli_num_rows($query);

while ($pessoa = mysqli_fetch_assoc($query))
	echo "Meu nome é ".$pessoa['nome']." e eu tenho ".$pessoa['idade']." anos.\r\n";
	
// Em caso de INSERT
$ultimo_id_inserido = mysqli_insert_id($db);

// Finaliza as transações. Nesse momento as operações realizadas são salvas no banco de dados
mysqli_query($db, "COMMIT");
