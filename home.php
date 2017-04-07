<?php require_once 'config.php'; ?>
<?php require_once('auth.php'); ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>

<div class="row center">
  <h4 class="main-text center">Dashboard</h4>
  <hr>
</div>
<h5 class="center">Usuário logado: <a class="grey-text"><?php echo $_COOKIE['nome']?></a></h5>
<h5 class="center">ID no BD: <a class="grey-text"><?php echo $_COOKIE['id_profissional']?></a></h5>

<div class="row center">
  <br>
  <a href="logout.php" class="btn red white-text btn-default">Logout</a>
</div>

<?php include(FOOTER_TEMPLATE); ?>