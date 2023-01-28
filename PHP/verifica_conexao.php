<?php

/*
	Função para verificar se o computador (no caso de script local) possui conexão com a Internet
*/

function isConnected() {
  // vamos usar o site do google para testar, já que está sempre online (esperamos)
	return @fsockopen("www.google.com", 80);
}

if (!isConnected())
	die("Sem conexão");
