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
  <?php if ($_COOKIE['nivel_acesso'] == '1') echo '<div class="row center"><a href="phpMyAdmin/index.php" class="btn orange white-text btn-default">phpMyAdmin</a></div>'; ?>
  <a href="logout.php" class="btn red white-text btn-default">Logout</a>
</div>

<?php include(FOOTER_TEMPLATE); ?>