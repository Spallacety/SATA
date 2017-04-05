<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Visualizar Informações</h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<div class="row">
  <div class="col s12">
    <div class="input-field">
      <input disabled type="text" class="black-text" id="descricao" name="profissao['descricao']" value="<?php echo $profissao['descricao']; ?>" required>
      <label for="descricao" class="main-text">Profissão</label>
    </div>
  </div>
</div>

<div class="container">
  <div class="row center">
    <br>
      <a href="edit.php?id=<?php echo $paciente['id']; ?>" class="btn blue white-text btn-primary">Editar</a>
      <a href="index.php" class="btn blue white-text btn-default">Voltar</a>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
