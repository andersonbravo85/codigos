/*
  A classe COM faz parte da extensão com_dotnet que faz parte do núcleo do PHP.

  Essa classe permite instanciar um objeto COM compatível com OLE e chamar seus métodos e acessar suas propriedades.

  Você pode usar esta técnica para chamar o Internet Explorer, Word, Excel e outras ferramentas.
*/

$browser = new COM("InternetExplorer.Application");

$browser->navigate("about:blank");
$browser->Visible = true;
$browser->Width = 700;
$browser->height = 380;
//$browser->resizable = false;

$browser = null;
