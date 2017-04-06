<?php 
	require_once('functions.php');
	initAttr();
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Visualizar Informações</h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<div class="row">
  <div class="col s12 m6 l6">
    <div class="input-field">
      <input disabled type="text" class="black-text" id="nome" name="profissional['nome']" value="<?php echo $profissional['nome']; ?>" required>
      <label for="nome" class="main-text">Nome</label>
    </div>
  </div>

  <div class="col s12 m2 l2">
    <div class="input-field">
      <input disabled type="text" class="cpf black-text" maxlength="14" id="cpf" name="profissional['cpf']" value="<?php echo $profissional['cpf']; ?>" required>
      <label for="cpf" class="main-text">CPF</label>
    </div>
  </div>

  <div class="col s12 m2 l2">
    <div class="input-field">
      <input disabled type="text" class="telefone black-text" maxlength="14" id="telefone" name="profissional['telefone']" value="<?php echo $profissional['telefone']; ?>" required>
      <label for="telefone" class="main-text">Telefone</label>
    </div>
  </div>

  <div class="col s12 m2 l2">
    <div class="input-field">
      <input disabled type="text" class="celular black-text" maxlength="15" id="celular" name="profissional['celular']" value="<?php echo $profissional['celular']; ?>" required>
      <label for="celular" class="main-text">Celular</label>
    </div>
  </div>
</div>

<div class="row">
  <div class="col s12 m5 l5">
    <div class="input-field">
    	<?php if ($profissoes) : ?>
      <?php foreach ($profissoes as $profissao) : ?>
      <?php if ($profissional['id_profissao'] == $profissao['id']) : ?>
	      <input disabled type="text" class="black-text" id="profissao" name="profissional['profissao']" value=<?php echo $profissao['descricao']; ?> required>
	      <label for="profissao" class="main-text">Profissão</label>
      <?php endif; ?>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="col s12 m5 l5">
    <div class="input-field">
      <?php if ($instituicoes) : ?>
      <?php foreach ($instituicoes as $instituicao) : ?>
      <?php if ($profissional['id_instituicao'] == $instituicao['id']) : ?>
	      <input disabled type="text" class="black-text" id="profissao" name="profissional['profissao']" value=<?php echo $instituicao['descricao']; ?> required>
	      <label for="profissao" class="main-text">Instituição</label>
      <?php endif; ?>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="container">
  <div class="row center">
    <br>
      <a href="edit.php?id=<?php echo $profissional['id']; ?>" class="btn blue white-text btn-primary">Editar</a>
      <a href="index.php" class="btn blue white-text btn-default">Voltar</a>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
