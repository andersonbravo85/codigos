<?php

/*

  Manipulando arquivos
  --------------------
  
  -Criar arquivo: 
  $ponteiro = fopen ($nomedoarquivo, $mododeabertura); // cria/abre o arquivo

  -Ler conteúdo de arquivo: 
  fgets($ponteiro); // le uma linha inteira do arquivo
  fgets($ponteiro, $numerodebytes); // le o numero de bytes especificado da linha

  -Escrever no arquivo: 
  fwrite($ponteiro, $string, $tamanho); // o tamanho é opcional

  -Fechar arquivo: 
  fclose($ponteiro); 
*/

// Exemplo:
 
// abrimos o arquivo para ler seu conteudo
$arquivo = fopen('meuarquivo.txt','r');
if (!$arquivo)
	die('Nao foi possivel abrir o arquivo.');
	
// imprimimos linha por linha ate detectar o final
while(!feof($arquivo))
	echo fgets($arquivo);

// fechamos o ponteiro para o arquivo
fclose($arquivo);


/*
  MÉTODOS DE ABERTURA DE ARQUIVO:

  • w - escrita; ponteiro no começo do arquivo. Se o arquivo não existe, tenta criá-lo.
  • w+ - leitura e escrita; ponteiro no começo do arquivo. Se o arquivo não existe, tenta criá-lo.
  • r - leitura; ponteiro no começo do arquivo. Retorna erro caso o arquivo não exista e NÃO tenta cria-lo.
  • r+ - leitura e escrita; ponteiro no começo do arquivo. Retorna erro caso o arquivo não exista e NÃO tenta cria-lo.
  • a - escrita; ponteiro no final do arquivo (apend). Se o arquivo não existir, tenta criá-lo.
  • a+ - leitura e escrita; ponteiro no final do arquivo. Se o arquivo não existir, tenta criá-lo.
  • x - Cria e abre o arquivo para escrita; ponteiro no início do arquivo. Se o arquivo já existe, fopen() irá falhar, caso contrário tenta criá-lo.
  • x+ - Cria e abre um arquivo para escrita e leitura; ponteiro no início do arquivo. Se o arquivo já existe, fopen() irá falhar, caso contrário tenta criá-lo.
*/

/*
  FUNÇÕES PARA MANIPULAÇÃO DE ARQUIVOS:

  • basename - Dado um path, retorna o nome do arquivo 
  • chmod - Modifica as permissões do arquivo
  • chown - Modifica o dono do arquivo
  • copy - Copia arquivo
  • dirname - Dado um path, retorna o path sem o nome do aquivo
  • disk_free_space - Retorna o espaço disponível no diretório
  • disk_total_space - Retorna o tamanho total do diretório
  • fclose - Fecha um ponteiro de arquivo aberto
  • feof - Testa pelo fim-de-arquivo (eof) em um ponteiro de arquivo
  • fgetc - Lê um caracter do ponteiro de arquivo
  • fgets - Lê uma linha de um ponteiro de arquivo
  • fgetss - Ler uma linha de um ponteiro de arquivo e retira as tags HTML
  • file_exists - Checa se um arquivo ou diretório existe
  • file_get_contents - Lê todo o conteúdo de um arquivo para uma string
  • file_put_contents - Escreve uma string para um arquivo
  • file - Lê todo o arquivo para um array
  • fileatime - Obtém o último horário de acesso do arquivo
  • filectime - Obtém o tempo de modificação do inode do arquivo
  • filemtime - Obtém o tempo de modificação do arquivo
  • fileowner - Lê o dono (owner) do arquivo
  • fileperms - Lê as permissões do arquivo
  • filesize - Lê o tamanho do arquivo
  • filetype - Lê o tipo do arquivo
  • fopen - Abre um arquivo ou URL
  • fpassthru - Imprime todo os dados restantes de um ponteiro de arquivo
  • fputs - Sinônimo de fwrite
  • fread - Leitura binary-safe de arquivo
  • fscanf - Interpreta a leitura de um arquivo de acordo com um formato
  • fseek - Procura (seeks) em um ponteiro de arquivo
  • fstat - Lê informações sobre um arquivo usando um ponteiro de arquivo aberto
  • ftell - Retorna a posição de leitura/gravação do ponteiro do arquivo
  • ftruncate - Reduz um arquivo a um tamanho especificado
  • fwrite - Escrita binary-safe em arquivos
  • is_dir - Diz se o caminho é um diretório
  • is_executable - Diz se um arquivo é executável
  • is_file - Informa se o arquivo é um arquivo comum (não é diretório)
  • is_link - Diz se o arquivo é um link simbólico (symbolic link)
  • is_readable - Diz se o arquivo pode ser lido
  • is_writable - Diz se o arquivo pode ser modificado
  • link - Criando um hard link
  • linkinfo - Ler informações sobre um link
  • lstat - Obtém informações sobre um arquivo ou link simbólico
  • mkdir - Cria um diretório
  • move_uploaded_file - Move um arquivo enviado para uma nova localização
  • pclose - Fecha um processo de um ponteiro de arquivo
  • popen - Abre um processo como ponteiro de arquivo
  • readfile - Lê e exibe o conteúdo de um arquivo
  • rename - Renomeia um arquivo ou diretório
  • rewind - Reinicializa a posição do ponteiro de arquivos para o início
  • rmdir - Remove um diretório
  • stat - Obtem informações sobre um arquivo
  • tempnam - Cria um nome de arquivo único
  • tmpfile - Cria um arquivo temporário
  • unlink - Apaga um arquivo
*/
