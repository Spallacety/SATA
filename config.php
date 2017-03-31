<?php
/** O nome do banco de dados*/
define('DB_NAME', 'epiz_19901727_sada');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'epiz_19901727');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '3h0B4p5n');
/** nome do host do MySQL */
define('DB_HOST', 'sql312.byetcluster.com');
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


