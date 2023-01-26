<?php

/*
  Exemplo de upload de arquivo
*/

// HTML: 
/*
  <form enctype="multipart/form-data" action="upload.php" method="POST">
	  Enviar este arquivo: <input name="sendfile" type="file"/>
	  <input type="submit" value="Enviar Arquivo"/>
  </form>
*/

// Página PHP (upload.php): 
$uploaddir = 'arquivos';     // diretório para onde será enviado o arquivo

// diretório + nome do arquivo (que pode ser alterado aqui)    
$uploadfile = $uploaddir . DIRECTORY_SEPARATOR . $_FILES['sendfile']['name'];

// move arquivo enviado para diretório especificado, com o nome especificado
if (move_uploaded_file($_FILES['sendfile']['tmp_name'], $uploadfile))  
	echo "O arquivo foi transferido com sucesso!";
else
	echo "Erro ao transferir arquivo!";


/*

O upload de arquivos pode retornar alguns erros em $_FILES['sendfile']['error']:

UPLOAD_ERR_OK
Valor: 0
There is no error, the file uploaded with success.

UPLOAD_ERR_INI_SIZE
Valor: 1
The uploaded file exceeds the upload_max_filesize directive in php.ini.

UPLOAD_ERR_FORM_SIZE
Valor: 2
The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.

UPLOAD_ERR_PARTIAL
Valor: 3
The uploaded file was only partially uploaded.

UPLOAD_ERR_NO_FILE
Valor: 4
No file was uploaded.

UPLOAD_ERR_NO_TMP_DIR
Valor: 6
Missing a temporary folder.

UPLOAD_ERR_CANT_WRITE
Valor: 7
Failed to write file to disk.

*/
