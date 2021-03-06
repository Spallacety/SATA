<?php
require_once('../../config.php');
require_once('../../auth.php');
require_once(DBAPI);
$resultados = array();
$resultado = null;
$paciente = null;
$allcars = null;
$minhasavaliacoes = null;
$outrasavaliacoes = null;

function index() {
  global $paciente;
  global $allcars;

  $relacao = find_relacao($_COOKIE['id_profissional']);

  $paciente = find('pacientes', $relacao['id_paciente']);
  findAllCars($relacao['id_paciente']);
}

function initAttr(){
  global $paciente;

  $relacao = find_relacao($_COOKIE['id_profissional']);

  $paciente = find('pacientes', $relacao['id_paciente']);
}

function add() {
  if (!empty($_POST['q15'])) {
    
    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $resultado['id_paciente'] =  $_POST['id_paciente'];
    $resultado['id_profissional'] = $_COOKIE['id_profissional'];
    $resultado['q1'] = $_POST['q1'];
    $resultado['q2'] = $_POST['q2'];
    $resultado['q3'] = $_POST['q3'];
    $resultado['q4'] = $_POST['q4'];
    $resultado['q5'] = $_POST['q5'];
    $resultado['q6'] = $_POST['q6'];
    $resultado['q7'] = $_POST['q7'];
    $resultado['q8'] = $_POST['q8'];
    $resultado['q9'] = $_POST['q9'];
    $resultado['q10'] = $_POST['q10'];
    $resultado['q11'] = $_POST['q11'];
    $resultado['q12'] = $_POST['q12'];
    $resultado['q13'] = $_POST['q13'];
    $resultado['q14'] = $_POST['q14'];
    $resultado['q15'] = $_POST['q15'];
    $resultado['resultado'] = $_POST['q1'] + $_POST['q2'] + $_POST['q3'] + $_POST['q4'] + $_POST['q5'] + $_POST['q6'] + $_POST['q7'] + $_POST['q8'] + $_POST['q9'] + $_POST['q10'] + $_POST['q11'] + $_POST['q12'] + $_POST['q13'] + $_POST['q14'] + $_POST['q15'];
    $resultado['modificacao'] = $today->format("Y-m-d");

    save('avaliacoes', $resultado);
    header('location: /responsaveis/cars/mylist.php');
  }
}

function edit() {
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['q15'])) {
      $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
      $resultado['id_paciente'] =  $_POST['id_paciente'];
      $resultado['id_profissional'] = $_COOKIE['id_profissional'];
      $resultado['q1'] = $_POST['q1'];
      $resultado['q2'] = $_POST['q2'];
      $resultado['q3'] = $_POST['q3'];
      $resultado['q4'] = $_POST['q4'];
      $resultado['q5'] = $_POST['q5'];
      $resultado['q6'] = $_POST['q6'];
      $resultado['q7'] = $_POST['q7'];
      $resultado['q8'] = $_POST['q8'];
      $resultado['q9'] = $_POST['q9'];
      $resultado['q10'] = $_POST['q10'];
      $resultado['q11'] = $_POST['q11'];
      $resultado['q12'] = $_POST['q12'];
      $resultado['q13'] = $_POST['q13'];
      $resultado['q14'] = $_POST['q14'];
      $resultado['q15'] = $_POST['q15'];
      $resultado['resultado'] = $_POST['q1'] + $_POST['q2'] + $_POST['q3'] + $_POST['q4'] + $_POST['q5'] + $_POST['q6'] + $_POST['q7'] + $_POST['q8'] + $_POST['q9'] + $_POST['q10'] + $_POST['q11'] + $_POST['q12'] + $_POST['q13'] + $_POST['q14'] + $_POST['q15'];
      $resultado['modificacao'] = $today->format("Y-m-d");
      update('avaliacoes', $id, $resultado);
      header('location: /responsaveis/cars/mylist.php');
    } else {
      global $resultado;
      $resultado = find('avaliacoes', $id);
    } 
  } else {
    header('location: /responsaveis/cars/mylist.php');
  }
}

function view($id = null) {
  global $paciente;
  global $allcars;
  $paciente = find('pacientes', $id);
  findAllCars($id);
}

function delete($id = null) {
  global $resultado;
  $resultado = remove('avaliacoes', $id);
  header('location: /avaliacao/cars/');
}

function findAllCars( $id ){
  global $allcars;

  $database = open_database();
  $found = null;

  try {
      $sql = "SELECT * FROM avaliacoes WHERE id_paciente = " . $id;
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $found = $result->fetch_all(MYSQLI_ASSOC);
        
        /* Metodo alternativo
        $found = array();
        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
      }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);

  $allcars = $found;
  return $allcars;

}

function findAnswer($questao, $valor){
  $database = open_database();
  $found = null;

  try {
    $sql = "SELECT * FROM carsrespostas WHERE questao = " . $questao . " AND valor = " . $valor;
    $result = $database->query($sql);
    
    if ($result->num_rows > 0) {
      $found = $result->fetch_assoc();
    }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);
  return $found['significado'];
}

function myList(){
  global $minhasavaliacoes;
  $database = open_database();

  $relacao = find_relacao($_COOKIE['id_profissional']);

  $paciente = find('pacientes', $relacao['id_paciente']);

  try {
      $sql = "SELECT * FROM avaliacoes WHERE id_paciente = " . $relacao['id_paciente'] . " AND id_profissional = " . $_COOKIE['id_profissional'] . " ORDER BY modificacao DESC";
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $minhasavaliacoes = $result->fetch_all(MYSQLI_ASSOC);
      }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);

  return $minhasavaliacoes;
}

function otherList(){
  global $outrasavaliacoes;
  $database = open_database();

  $relacao = find_relacao($_COOKIE['id_profissional']);

  $paciente = find('pacientes', $relacao['id_paciente']);

  try {
      $sql = "SELECT * FROM avaliacoes WHERE id_paciente = " . $relacao['id_paciente'] . " AND id_profissional != " . $_COOKIE['id_profissional'] . " ORDER BY modificacao DESC";
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $outrasavaliacoes = $result->fetch_all(MYSQLI_ASSOC);
      }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);

  return $outrasavaliacoes;
}

function details($id){
  global $resultado;
  $resultado = find('avaliacoes', $id);
}

function result($resultado){
  if ($resultado <= 30){
    return "Sem autismo";
  }
  if ($resultado <= 36){
    return "Autismo leve";
  }
  else{
    return "Autismo severo";
  }
}