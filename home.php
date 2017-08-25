<?php require_once 'config.php'; ?>
<?php require_once('auth.php'); ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>

<div class="row center">
  <h4 class="main-text center">Sistema de Acompanhamento ao Tratamento de Autismo</h4>
  <hr>
</div>
<h5 class="center">Bem vindo, <a class="main-text"><?php echo $_COOKIE['nome']?></a>!</h5>

<div class="row center">
  <br>
  <?php if ($_COOKIE['nivel_acesso'] == '1') echo '<div class="row center"><a href="phpmyadmin/" class="btn orange white-text btn-default">phpMyAdmin</a></div>'; ?>
  <?php 
    $responsavel = find('profissionais', $_COOKIE['id_profissional']);

    if ($responsavel['id_profissao'] == '2') {
      $relacao = find_relacao($responsavel['id']);
      $paciente = find('pacientes', $relacao['id_paciente']);
      echo '<div class="row center"><a href="responsavel/paciente/view.php?id=' . $paciente['id'] . '" class="btn green white-text btn-default">Info de ' . $paciente['nome'] . '</a></div>';
    }
    ?>
  <a href="logout.php" class="btn red white-text btn-default">Logout</a>
</div>

<?php include(FOOTER_TEMPLATE); ?>