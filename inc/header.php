<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SATA</title>
  <link rel="shortcut icon" type="image/png" href="/inc/favicon.png">
  <link rel="stylesheet" href="/css/material-icons.css">
  <link rel="stylesheet" href="/css/materialize.min.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <nav class="main-color" role="navigation">
    <div class="nav-wrapper container">
      <?php if (!$_COOKIE['nivel_acesso']) : ?>
        <a href="/home.php" class="brand-logo center secondary-text">SATA</a>
      <?php else : ?>
        <a href="/home.php" class="brand-logo secondary-text">SATA</a>
        <a data-activates="mobile-menu" class="button-collapse secondary-text"><i class="material-icons">menu</i></a>
      <?php endif; ?>
      <?php if ($_COOKIE['nivel_acesso']) : ?>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <?php if ($_COOKIE['nivel_acesso'] >= '2') : ?>
            <li><a class="dropdown-button secondary-text" data-activates="dropdownCadastros">Gerenciar<i class="material-icons right">arrow_drop_down</i></a></li>
          <?php endif; ?>
          <li><a class="dropdown-button secondary-text" data-activates="dropdownAvaliacoes">Avaliações<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button secondary-text" data-activates="dropdownGeral"><i class="material-icons">more_vert</i></a></li>
        </ul>
      <?php endif; ?>
      <ul class="side-nav" id="mobile-menu">
        <?php if ($_COOKIE['nivel_acesso'] >= '6') : ?>
          <li><a href="/pacientes/">Gerenciar Pacientes</a></li>
          <li><a href="/profissionais/">Gerenciar Profissionais</a></li>
          <li><a href="/cadastros/profissoes/">Gerenciar Profissões</a></li>
          <li><a href="/cadastros/instituicoes/">Gerenciar Instituições</a></li>
        <?php endif; ?>
        <?php if ($_COOKIE['id_profissao'] == '2') : ?>
          <li><a href="/responsavel/cars/" class="main-text">CARS</a></li>
        <?php else: ?>
          <li><a href="/avaliacao/cars/" class="main-text">CARS</a></li>
        <?php endif; ?>
      </ul>
    </div>

    <ul id="dropdownCadastros" class="dropdown-content">
      <?php if ($_COOKIE['nivel_acesso'] >= '4') : ?>
        <li><a href="/pacientes/" class="main-text">Pacientes</a></li>
        <li><a href="/responsaveis/" class="main-text">Responsáveis</a></li>
      <?php endif; ?>
      <?php if ($_COOKIE['nivel_acesso'] >= '6') : ?>
        <li><a href="/profissionais/" class="main-text">Profissionais</a></li>
        <li><a href="/cadastros/profissoes/" class="main-text">Profissões</a></li>
        <li><a href="/cadastros/instituicoes/" class="main-text">Instituições</a></li>
      <?php endif; ?>
    </ul>

    <ul id="dropdownAvaliacoes" class="dropdown-content">
      <?php if ($_COOKIE['id_profissao'] == '2') : ?>
        <li><a href="/responsaveis/cars/" class="main-text">CARS</a></li>
      <?php else: ?>
        <li><a href="/avaliacao/cars/" class="main-text">CARS</a></li>
      <?php endif; ?>
    </ul>

    <ul id="dropdownGeral" class="dropdown-content">
      <li><a class="main-text" onClick="abrirModalSobre();">Sobre</a></li>
      <li><a href="/logout.php" class="red-text"><i class="material-icons">clear</i>Sair</a></li>
    </ul>

    <div id="modal-sobre" class="modal">
      <div class="modal-content">
        <h4 class="black-text center">Sobre SATA</h4>
        <p class="black-text center">SATA é a sigla de Sistema de Apoio ao Tratamento de Autismo, desenvolvido no LIMS.</p>
        <p class="black-text center">Desenvolvido por: Lucas Rodrigues e Fernando Santana (Professor Responsável)</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat black-text">Voltar</a>
      </div>
    </div>
  </nav>

  <div class="container">