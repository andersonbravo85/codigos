<?php
/*
  Script para abrir determinado programa do Windows utilizando a classe COM.
  --------------------------------------------------------------------------

  A classe COM faz parte da extensão 'com_dotnet'. Essa classe permite instanciar um objeto COM compatível com OLE e chamar seus métodos e acessar suas propriedades.

  Você pode usar esta técnica para chamar o Internet Explorer, Word, Excel e outras ferramentas.

  WScript, Windows Scripting Host ou simplesmente WSH é a linguagem de script do sistema operacional Windows.
*/
 
$shell = new COM("WScript.Shell");
$shell->Run("notepad.exe");
