<?php require_once 'config.php'; ?>
<?php require_once('auth.php'); ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>

<div class="row center">
  <h4 class="main-text center">Dashboard</h4>
  <hr>
</div>
<p class="center">Usuário logado: <?php echo $login_cookie = $_COOKIE['nome']?>
	ID no BD: <?php echo $login_cookie = $_COOKIE['id_profissional']?></p>

<?php include(FOOTER_TEMPLATE); ?>