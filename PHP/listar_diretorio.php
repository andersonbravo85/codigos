<?php

/*
  Função para listar determinado diretório.
  
  A classe DirectoryIterator fornece uma interface simples para visualização de conteúdo de diretórios de arquivos.
*/

function listaDir($dir) {
  
	foreach (new DirectoryIterator($dir) as $item) {
		
    if ($item->isDot())
			continue;
	  
    if ($item->isDir())
			listaDir($dir . "/" . $item->getFilename());
		else
			echo $dir . "/" . $item->getFilename();
  }
}

/*

MÉTODOS:

  • getATime — Retorna a data de último acesso do arquivo

  • getExtension — Retorna a extensão do arquivo do item corrente do DirectoryIterator

  • getFilename — Retorna o nome do arquivo do elemento atual do diretório

  • getMTime — Retorna a data da última modificação do arquivo

  • getPath — Retorna o caminho do diretório

  • getPathname — Retorna o caminho e o nome do arquivo do elemento atual do diretório

  • getPerms — Retorna as permissões do arquivo

  • getSize — Retorna o tamanho do arquivo

  • getType — Retorna o tipo do arquivo

  • isDir — Retorna true se o elemento atual é um diretório

  • isDot — Retorna true se o elemento atual for '.' ou '..'

  • isExecutable — Retorna true se o arquivo for executável

  • isFile — Retorna true se o elemento atual for um arquivo

  • isLink — Retorna true se o elemento atual for um link simbólico

  • isReadable — Retorna true se o arquivo pode ser lido

  • isWritable — Retorna true se o arquivo pode ser modificado

*/
