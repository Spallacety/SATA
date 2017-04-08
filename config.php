<?php

/*
user: b91015b1bbae14
pass: a8840fc6
host: us-cdbr-iron-east-03.cleardb.net
db: heroku_9e3d73128281d5a
*/

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$host = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

define('DB_NAME', $db);
define('DB_USER', $username);
define('DB_PASSWORD', $password);
define('DB_HOST', $host);
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