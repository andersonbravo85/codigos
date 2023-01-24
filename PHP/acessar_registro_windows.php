/*
  Funções para ler e escrever no registro do windows.
*/

/*
* 1) Via 'win32std'
*/

$keyConst = HKEY_LOCAL_MACHINE;

$key = "Software\Teste";

$reg = @reg_open_key($keyConst, $key);
if (!$reg) {
	throw new Exception("Não foi possível abrir o registro.");
}

// retorna um array de subchaves
$subkeys = reg_enum_key($reg);
foreach ($subkeys as $index => $subkey)
	echo "Subchave na posição '" . $index . "' é '" . $subkey . "'\n";

// retorna uma subchave especifica
$index = 2;
$subkey = reg_enum_key($reg, $index);
echo "A subchave na posição '" . $index . "' é '" . $subkey . "'\n";

// retorna um array de valores
$values = reg_enum_value($reg);
foreach ($values as $index => $value) {
	echo "O valor na posição '" . $index . "' é '" . $value . "' e armazena o valor '";
	echo reg_get_value($reg, $value) . "'\n";
}

// retorna um valor especifico
$index = 1;
$value = reg_enum_value($reg, $index);
echo "O valor na posição '" . $index . "' é '" . $value . "' e armazena o valor '";
echo reg_get_value($reg, $value) . "'\n";

// escrevendo no registro
$values = array(
	array("nome",        REG_SZ,  "Anderson"),
	array("sobrenome",   REG_SZ,  "Bravo"),
	array("ano",         REG_DWORD, 1985)
);

foreach ($values as $value)
	reg_set_value($reg, $value[0], $value[1], $value[2]);

// fecha o registro
reg_close_key($reg);


////////////////////////////////////////////////////////////////////////////////////


/*
* 2) Via 'com_dotnet'
*/

$Wshshell= new COM('WScript.Shell');

// lendo um valor
$data = $Wshshell->regRead('HKEY_LOCAL_MACHINE\\SOFTWARE\\Brother\\SCLink\\Ver1\\Path');

echo "O valor lido é:".$data;

// escrevendo no registro
$registry = 'HKEY_LOCAL_MACHINE\\SOFTWARE\\Brother\\SCLink\\Ver1\\Teste';
try {
	$result = $Wshshell->RegWrite($registry, "teste", REG_SZ);
} catch(Exception $e) {
	echo $e;
}

// deletando o registro
$registry = "HKEY_LOCAL_MACHINE\\SOFTWARE\\" . $folder . "\\" . $key;
try{
	$result = $Wshshell->RegDelete($registry);
	echo $key." is Successfully deleted from HKEY_LOCAL_MACHINE\\SOFTWARE\\" . $folder ; 
}
catch(Exception $e){
	echo "Some Exception with the code::".$e;
}

/*

CONSTANTES:

HKEY_CURRENT_CONFIG (HKCC)

HKEY_LOCAL_MACHINE (HKLM)

HKEY_USERS (HKU)

HKEY_CLASSES_ROOT (HKCR)

HKEY_CURRENT_USER (HKCU)


TIPOS DE DADOS:

REG_DWORD – inteiro

REG_SZ – string de tamanho fixo

REG_EXPAND_SZ – string de tamanho variável

REG_MULTI_SZ – lista de itens separados por espaço ou vírgula

REG_BINARY – binário

REG_NONE – nenhum data type associado

*/
