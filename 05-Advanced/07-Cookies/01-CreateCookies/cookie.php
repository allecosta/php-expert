<?php 

/**
 * Cria-se o nome de cookie de "user" com o valor "José"
 * O cookie expirará após 30 dias (86400 * 30), onde 86400 = 1 dia
 * O cookie está disponivel em todo site pois o mesmo foi definido na raiz "/" do projeto.
 * 
 * O valor do cookie é recuperado utilizando a variável global $_COOKIE.  
 */

$cookieName = "user";
$cookieValue = "José";

setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/");



