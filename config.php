<?php
define('DB_NAME', 'dbsada');
define('DB_USER', 'usersada');
define('DB_PASSWORD', 'sadaifpi01S');
define('DB_HOST', 'db4free.net:3306');
/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/sada/');
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
/*$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);*/