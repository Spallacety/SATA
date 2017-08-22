<?php 
	require_once('functions.php');
	initAttr();
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Visualizar Informações</h2>
<hr>

<div class="row">
  <div class="col s12 m6 l6">
    <div class="input-field">
      <input disabled type="text" class="black-text" id="nome" name="responsavel['nome']" value="<?php echo $responsavel['nome']; ?>" required>
      <label for="nome" class="main-text">Nome</label>
    </div>
  </div>

  <div class="col s12 m2 l2">
    <div class="input-field">
      <input disabled type="text" class="cpf black-text" maxlength="14" id="cpf" name="responsavel['cpf']" value="<?php echo $responsavel['cpf']; ?>" required>
      <label for="cpf" class="main-text">CPF</label>
    </div>
  </div>

  <div class="col s12 m2 l2">
    <div class="input-field">
      <input disabled type="text" class="telefone black-text" maxlength="14" id="telefone" name="responsavel['telefone']" value="<?php echo $responsavel['telefone']; ?>" required>
      <label for="telefone" class="main-text">Telefone</label>
    </div>
  </div>

  <div class="col s12 m2 l2">
    <div class="input-field">
      <input disabled type="text" class="celular black-text" maxlength="15" id="celular" name="responsavel['celular']" value="<?php echo $responsavel['celular']; ?>" required>
      <label for="celular" class="main-text">Celular</label>
    </div>
  </div>
</div>

<div class="row">
  <div class="col s12 m10 l10">
    <div class="input-field">
      <?php $relacao = find_relacao($_GET['id']); ?>
      <?php $paciente = find('pacientes', $relacao['id_paciente']); ?>
      <input disabled type="text" class="black-text" id="paciente" name="relacao['id_paciente']" value="<?php echo $paciente['nome']; ?>" required>
      <label for="paciente" class="main-text">Telefone</label>
    </div>
  </div>

  <div class="col s12 m2 l2">
    <div class="input-field">
      <input disabled type="text" class="black-text" id="usuario" name="responsavel['usuario']" value="<?php echo $responsavel['usuario']; ?>" required>
      <label for="usuario" class="main-text">Usuário</label>
    </div>
  </div>
</div>

<div class="container">
  <div class="row center">
    <br>
      <a href="edit.php?id=<?php echo $responsavel['id']; ?>" class="btn blue white-text btn-primary">Editar</a>
      <a href="index.php" class="btn blue white-text btn-default">Voltar</a>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
