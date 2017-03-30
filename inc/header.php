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
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
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
            <li><a href="../sobre.php">Sobre</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container">
