<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Editar Instituição</h2>
<hr>

<form action="edit.php?id=<?php echo $instituicao['id']; ?>" method="post">
  <div class="row">
    <div class="col s12 m8 l8">
      <div class="input-field">
        <input type="text" id="descricao" name="instituicao['descricao']" value="<?php echo $instituicao['descricao']; ?>" required>
        <label for="descricao">Descrição</label>
      </div>
    </div>

    <div class="col s12 m4 l4">
      <div class="input-field">
        <input type="text" class="cnpj" maxlength="18" id="cnpj" name="instituicao['cnpj']" value="<?php echo $instituicao['cnpj']; ?>" required>
        <label for="cnpj">CNPJ</label>
      </div>
    </div>    
  </div>
  
  <div class="row">
    <div class="col s12 m6 l6">
      <div class="input-field">
        <input type="text" id="endereco" name="instituicao['endereco']" value="<?php echo $instituicao['endereco']; ?>" required>
        <label for="endereco">Endereço</label>
      </div>
    </div>

    <div class="col s12 m4 l4">
      <div class="input-field">
        <input type="text" id="bairro" name="instituicao['bairro']" value="<?php echo $instituicao['bairro']; ?>" required>
        <label for="bairro">Bairro</label>
      </div>
    </div>
    
    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="cep" maxlength="9" id="cep" name="instituicao['cep']" value="<?php echo $instituicao['cep']; ?>" required>
        <label for="cep">CEP</label>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col s12 m4 l4">
      <div class="input-field">
        <input type="text" id="cidade" name="instituicao['cidade']" value="<?php echo $instituicao['cidade']; ?>" required>
        <label for="cidade">Cidade</label>
      </div>
    </div>
    
    <div class="col s3 m1 l1">
      <div class="input-field">
        <input type="text" id="uf" maxlength="2" name="instituicao['estado']" value="<?php echo $instituicao['estado']; ?>" required>
        <label for="uf">UF</label>
      </div>
    </div>

    <div class="col s9 m3 l3">
      <div class="input-field">
        <input type="text" class="telefone" maxlength="14" id="telefone" name="instituicao['telefone']" value="<?php echo $instituicao['telefone']; ?>" required>
        <label for="telefone">Telefone</label>
      </div>
    </div>
    
     <div class="col s12 m4 l4">
      <div class="input-field">
        <input type="text" id="responsavel" name="instituicao['responsavel']" value="<?php echo $instituicao['responsavel']; ?>" required>
        <label for="responsavel">Responsável</label>
      </div>
    </div>        
  </div>
    
  <div class="container">
    <div class="row center">
      <br>
      <button type="submit" class="btn green white-text btn-primary">Salvar</button>
      <a href="index.php" class="btn red white-text btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
