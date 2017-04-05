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
    <div class="col s12 m7 l7">
      <div class="input-field">
        <input disabled type="text" class="black-text" id="nome" name="paciente['nome']" value="<?php echo $paciente['nome']; ?>" required>
        <label for="nome" class="main-text">Nome</label>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="input-field">
        <input disabled type="text" class="cpf black-text" maxlength="14" id="cpf" name="paciente['cpf']" value="<?php echo $paciente['cpf']; ?>" required>
        <label for="cpf" class="main-text">CPF</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input disabled type="text" class="black-text" id="sexo" name="paciente['sexo']" <?php if ($paciente['sexo'] == 'M') echo ' value="Masculino" '; ?> <?php if ($paciente['sexo'] == 'F') echo ' value="Feminino" '; ?> required>
        <label for="sexo" class="main-text">Sexo</label>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m2 l2">
      <div class="input-field">
        <input disabled type="text" class="data black-text" maxlength="10" id="dtNasc" name="paciente['nascimento']" value="<?php echo $paciente['nascimento']; ?>" required>
        <label for="dtNasc" class="main-text">Data de Nascimento</label>
      </div>
    </div>

    <div class="col s12 m5 l5">
      <div class="input-field">
        <input disabled type="text" class="black-text" id="endereco" name="paciente['endereco']" value="<?php echo $paciente['endereco']; ?>" required>
        <label for="endereco" class="main-text">Endereço</label>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="input-field">
        <input disabled type="text" class="black-text" id="bairro" name="paciente['bairro']" value="<?php echo $paciente['bairro']; ?>" required>
        <label for="bairro" class="main-text">Bairro</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input disabled type="text" class="black-text" class="cep" maxlength="9" id="cep" name="paciente['cep']" value="<?php echo $paciente['cep']; ?>" required>
        <label for="cep" class="main-text">CEP</label>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col s12 m5 l5">
      <div class="input-field">
        <input disabled type="text" class="black-text" id="cidade" name="paciente['cidade']" value="<?php echo $paciente['cidade']; ?>" required>
        <label for="cidade" class="main-text">Cidade</label>
      </div>
    </div>

    <div class="col s12 m1 l1">
      <div class="input-field">
        <input disabled type="text" class="black-text" maxlength="2" id="estado" name="paciente['estado']" value="<?php echo $paciente['estado']; ?>" required>
        <label for="estado" class="main-text">UF</label>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="input-field">
        <input disabled type="text" class="telefone black-text" maxlength="14" id="telefone" name="paciente['telefone']" value="<?php echo $paciente['telefone']; ?>" required>
        <label for="telefone" class="main-text">Tel. Residencial</label>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="input-field">
        <input disabled type="text" class="celular black-text" maxlength="15" id="celular" name="paciente['celular']" value="<?php echo $paciente['celular']; ?>" required>
        <label for="celular" class="main-text">Tel. Celular</label>
      </div>
    </div>
  </div>

	<div class="row">
    <div class="col s12 m8 l8">
      <div class="input-field">
        <input disabled type="text" class="black-text" id="responsavel" name="paciente['responsavel']" value="<?php echo $paciente['responsavel']; ?>" required>
        <label for="responsavel" class="main-text">Responsável</label>
      </div>
    </div>

    <div class="col s12 m4 l4">
      <div class="input-field">
        <input disabled type="text" class="celular black-text" maxlength="2" id="celresp" name="paciente['celresp']" value="<?php echo $paciente['celresp']; ?>" required>
        <label for="celresp" class="main-text">Cel. Responsável</label>
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
