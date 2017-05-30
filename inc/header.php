<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SADA</title>
  <link rel="shortcut icon" type="image/png" href="/inc/favicon.png">
  <link rel="stylesheet" href="/css/material-icons.css">
  <link rel="stylesheet" href="/css/materialize.min.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <nav class="main-color" role="navigation">
    <div class="nav-wrapper container">
      <a href="/home.php" class="brand-logo secondary-text">SADA</a>
      <a href="#" data-activates="mobile-menu" class="button-collapse secondary-text"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="dropdown-button secondary-text" href="#!" data-activates="dropdownCadastros">Cadastros<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button secondary-text" href="#!" data-activates="dropdownAvaliacoes">Avaliações<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="secondary-text" href="#!" onClick="abrirModalSobre();">Sobre</a></li>
      </ul>
      <ul class="side-nav" id="mobile-menu">
        <li><a href="/cadastros/pacientes/index.php">Gerenciar Pacientes</a></li>
        <li><a href="/cadastros/profissionais/index.php">Gerenciar Profissionais</a></li>
        <li><a href="/cadastros/profissoes/index.php">Gerenciar Profissões</a></li>
        <li><a href="/cadastros/instituicoes/index.php">Gerenciar Instituições</a></li>
        <li><a href="/avaliacao/cars/index.php">CARS</a></li>
      </ul>
    </div>

    <ul id="dropdownCadastros" class="dropdown-content">
      <li><a href="/cadastros/pacientes/index.php" class="main-text">Gerenciar Pacientes</a></li>
      <li><a href="/cadastros/profissionais/index.php" class="main-text">Gerenciar Profissionais</a></li>
      <li><a href="/cadastros/profissoes/index.php" class="main-text">Gerenciar Profissões</a></li>
      <li><a href="/cadastros/instituicoes/index.php" class="main-text">Gerenciar Instituições</a></li>
    </ul>

    <ul id="dropdownAvaliacoes" class="dropdown-content">
      <li><a href="/avaliacao/cars/index.php" class="main-text">CARS</a></li>
    </ul>

    <div id="modal-sobre" class="modal">
      <div class="modal-content">
        <h4 class="black-text center">Sobre SADA</h4>
        <p class="black-text center">SADA é a sigla de Sistema de Apoio ao Diagnóstico de Autismo, desenvolvido no LIMS.</p>
        <p class="black-text center">Desenvolvido por: Lucas Rodrigues e Fernando Santana (Professor Responsável)</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat black-text">Voltar</a>
      </div>
    </div>
  </nav>

  <div class="container">