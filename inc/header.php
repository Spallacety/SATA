<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>SADA</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="../inc/favicon.png">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="../home.php" class="navbar-brand">SADA</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../cadastros/pacientes/index.php">Gerenciar Pacientes</a></li>
              <li><a href="../cadastros/profissionais/index.php">Gerenciar Profissionais</a></li>
              <li><a href="../cadastros/profissoes/index.php">Gerenciar Profissões</a></li>
              <li><a href="../cadastros/instituicoes/index.php">Gerenciar Instituições</a></li>
            </ul>
          </li>       
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Avaliações <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../avaliacao/avaliacao.php">CARS</a></li>
              <li><a href="../avaliacao/relatorios/index.php">Avaliação Descritiva</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resultados <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../cadastros/pacientes/index.php">Profissionais</a></li>
            </ul>
          </li>
          <li><a data-toggle="modal" data-target="#modalSobre">Sobre</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="modal fade" id="modalSobre">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SADA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>SADA é a sigla de Sistema de Apoio ao Diagnóstico de Autismo, desenvolvido no LIMS.</p>
        <p>Desenvolvido por: Guilherme, Emanuel, Iara, Luana, Lucas Rodrigues e Fernando Santana (Professor Responsável)</p>
      </div>
    </div>
  </div>
</div>

  <main class="container">