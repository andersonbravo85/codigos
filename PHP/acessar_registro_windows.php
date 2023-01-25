<?php

/*

Exemplos de como acessar e manipular o registro do windows.
-----------------------------------------------------------

ATENÇÃO: cuidado ao testar pois pode apagar ou alterar algum registro importante para o funcionamento do windows e/ou algum programa.
	Crie uma chave de teste e teste nela.

* CONSTANTES:

HKEY_CURRENT_CONFIG (HKCC)
HKEY_LOCAL_MACHINE (HKLM)
HKEY_USERS (HKU)
HKEY_CLASSES_ROOT (HKCR)
HKEY_CURRENT_USER (HKCU)

* TIPOS DE DADOS:

REG_DWORD – inteiro
REG_SZ – string de tamanho fixo
REG_EXPAND_SZ – string de tamanho variável
REG_MULTI_SZ – lista de itens separados por espaço ou vírgula
REG_BINARY – binário
REG_NONE – nenhum data type associado

[ TESTADO NO PHP 7.4.7 ]

*/

//////////////////////////////////////////
//
// 1) Utilizando a extensão 'com_dotnet'
//
//////////////////////////////////////////

$Wshshell= new COM('WScript.Shell');

$caminho = 'HKEY_CURRENT_USER\\SOFTWARE\\BRAVO\\';

// lendo um valor
$valor = $Wshshell->regRead($caminho.'Nome');

echo "O valor lido é:".$valor;

// escrevendo um valor
$registro = $caminho.'Ano';

try {
	$result = $Wshshell->RegWrite($registro, 1985, 'REG_DWORD');
} catch (Exception $e) {
	echo $e;
}

// deletando um valor. Também serve para deletar uma chave
$registro = $caminho.'Inativo';

try {
	$Wshshell->RegDelete($registro);
	
} catch (Exception $e){
	echo $e;
}


///////////////////////////////////////////////////////////////////
//
// 2) Utilizando 'win32std' - Set of standard Windows API functions
//
//	https://pecl.php.net/package/win32std
//
///////////////////////////////////////////////////////////////////

$chavePrincipal = HKEY_CURRENT_USER;

$chave = 'SOFTWARE\\BRAVO';

// abrindo a chave do registro
$reg = @reg_open_key($chavePrincipal, $chave);
if (!$reg) {
	throw new Exception("Não foi possível abrir o registro.");
}

// retorna um array de subchaves
$subchaves = reg_enum_key($reg);
foreach ($subchaves as $index => $subchave)
	echo $subchave . "\n";

// retorna uma subchave especifica
$index = 2;
$subchave = reg_enum_key($reg, $index);
echo "A subchave na posição '" . $index . "' é '" . $subchave . "'\n";

// retorna um array de valores
$valores = reg_enum_value($reg);
foreach ($valores as $index => $valor)
	echo "O valor na posição '" . $index . "' é '" . $valor . "' e armazena o valor '";
	echo reg_get_value($reg, $valor) . "'\n";
}

// retorna um valor especifico
$index = 1;
$valor = reg_enum_value($reg, $index);
echo "O valor na posição '" . $index . "' é '" . $valor . "' e armazena o valor '";
echo reg_get_value($reg, $valor) . "'\n";

// escrevendo no registro
$valores = array(
	array("nome",        REG_SZ,  "Anderson"),
	array("sobrenome",   REG_SZ,  "Bravo"),
	array("ano",         REG_DWORD, 1985)
);

foreach ($valores as $valor)
	reg_set_value($reg, $valor[0], $valor[1], $valor[2]);

// fecha o registro
reg_close_key($reg);
