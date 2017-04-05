<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Instituição: <?php echo $instituicao['descricao']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

  <div class="row">
    <div class="col s12 m8 l8">
      <div class="input-field">
        <input disabled class="black-text" type="text" id="descricao" name="instituicao['descricao']" value="<?php echo $instituicao['descricao']; ?>" required>
        <label for="descricao" class="main-text">Descrição</label>
      </div>
    </div>

    <div class="col s12 m4 l4">
      <div class="input-field">
        <input disabled class="black-text" type="text" class="cnpj" maxlength="18" id="cnpj" name="instituicao['cnpj']" value="<?php echo $instituicao['cnpj']; ?>" required>
        <label for="cnpj" class="main-text">CNPJ</label>
      </div>
    </div>    
  </div>
  
  <div class="row">
    <div class="col s12 m6 l6">
      <div class="input-field">
        <input disabled class="black-text" type="text" id="endereco" name="instituicao['endereco']" value="<?php echo $instituicao['endereco']; ?>" required>
        <label for="endereco" class="main-text">Endereço</label>
      </div>
    </div>

    <div class="col s12 m4 l4">
      <div class="input-field">
        <input disabled class="black-text" type="text" id="bairro" name="instituicao['bairro']" value="<?php echo $instituicao['bairro']; ?>" required>
        <label for="bairro" class="main-text">Bairro</label>
      </div>
    </div>
    
    <div class="col s12 m2 l2">
      <div class="input-field">
        <input disabled class="black-text" type="text" class="cep" maxlength="9" id="cep" name="instituicao['cep']" value="<?php echo $instituicao['cep']; ?>" required>
        <label for="cep" class="main-text">CEP</label>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col s12 m4 l4">
      <div class="input-field">
        <input disabled class="black-text" type="text" id="cidade" name="instituicao['cidade']" value="<?php echo $instituicao['cidade']; ?>" required>
        <label for="cidade" class="main-text">Cidade</label>
      </div>
    </div>
    
    <div class="col s3 m1 l1">
      <div class="input-field">
        <input disabled class="black-text" type="text" id="uf" maxlength="2" name="instituicao['estado']" value="<?php echo $instituicao['estado']; ?>" required>
        <label for="uf" class="main-text">UF</label>
      </div>
    </div>

    <div class="col s9 m3 l3">
      <div class="input-field">
        <input disabled class="black-text" type="text" class="telefone" maxlength="14" id="telefone" name="instituicao['telefone']" value="<?php echo $instituicao['telefone']; ?>" required>
        <label for="telefone" class="main-text">Telefone</label>
      </div>
    </div>
    
     <div class="col s12 m4 l4">
      <div class="input-field">
        <input disabled class="black-text" type="text" id="responsavel" name="instituicao['responsavel']" value="<?php echo $instituicao['responsavel']; ?>" required>
        <label for="responsavel" class="main-text">Responsável</label>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row center">
      <br>
        <a href="edit.php?id=<?php echo $instituicao['id']; ?>" class="btn blue white-text btn-primary">Editar</a>
        <a href="index.php" class="btn blue white-text btn-default">Voltar</a>
    </div>
  </div>

<?php include(FOOTER_TEMPLATE); ?>
