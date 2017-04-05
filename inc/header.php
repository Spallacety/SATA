<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SADA</title>
  <link rel="shortcut icon" type="image/png" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/inc/favicon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/css/materialize.css">
  <link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/css/style.css">
  <link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/css/font-awesome.min.css">
</head>

<body>
  <nav class="main-color" role="navigation">
    <div class="nav-wrapper container">
      <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/home.php" class="brand-logo secondary-text">SADA</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="dropdown-button secondary-text" href="#!" data-activates="dropdownCadastros">Cadastros<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button secondary-text" href="#!" data-activates="dropdownAvaliacoes">Avaliações<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button secondary-text" href="#!" data-activates="dropdownTratamentos">Tratamentos<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button secondary-text" href="#!" data-activates="dropdownResultados">Resultados<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="secondary-text" href="#!" onClick="abrirModalSobre();">Sobre</a></li>
      </ul>
    </div>

    <ul id="dropdownCadastros" class="dropdown-content">
      <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/cadastros/pacientes/index.php" class="main-text">Gerenciar Pacientes</a></li>
      <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/cadastros/profissionais/index.php" class="main-text">Gerenciar Profissionais</a></li>
      <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/cadastros/profissoes/index.php" class="main-text">Gerenciar Profissões</a></li>
      <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/cadastros/instituicoes/index.php" class="main-text">Gerenciar Instituições</a></li>
    </ul>

    <ul id="dropdownAvaliacoes" class="dropdown-content">
      <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/avaliacao/avaliacao.php" class="main-text">CARS</a></li>
    </ul>

    <ul id="dropdownTratamentos" class="dropdown-content">
    </ul>

    <ul id="dropdownResultados" class="dropdown-content">
      <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/cadastros/pacientes/index.php" class="main-text">Profissionais</a></li>
    </ul>

    <div id="modal-sobre" class="modal">
      <div class="modal-content">
        <h4 class="black-text center">Sobre SADA</h4>
        <p class="black-text center">SADA é a sigla de Sistema de Apoio ao Diagnóstico de Autismo, desenvolvido no LIMS.</p>
        <p class="black-text center">Desenvolvido por: Guilherme, Emanuel, Iara, Luana, Lucas Rodrigues e Fernando Santana (Professor Responsável)</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat black-text">Voltar</a>
      </div>
    </div>
  </nav>

  <div class="container">