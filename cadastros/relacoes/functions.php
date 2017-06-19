<?php
require_once('../../config.php');
require_once('../../auth.php');
require_once(DBAPI);
$relacao = null;

function index() {
  if (!empty($_POST['relacao'])) {
    
    $relacao = $_POST['relacao'];
    $relacao['status'] = 1;
    
    save('relacoes', $relacao);
    header('location: index.php');
  }
}