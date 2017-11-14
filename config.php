<?php

/*
user: b91015b1bbae14
pass: a8840fc6
host: us-cdbr-iron-east-03.cleardb.net
db: heroku_9e3d73128281d5a
*/

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$host = 'us-cdbr-iron-east-05.cleardb.net';
$username = 'bfe4f880903c27';
$password = '8e3ba76c';
$db = 'heroku_23c5b0a5e8964ff';

define('DB_NAME', $db);
define('DB_USER', $username);
define('DB_PASSWORD', $password);
define('DB_HOST', $host);
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');
if ( !defined('BASEURL') )
  define('BASEURL', '/sata/');
if ( !defined('DBAPI') )
  define('DBAPI', ABSPATH . 'inc/database.php');

define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');