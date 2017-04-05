<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Novo Profissional</h2>
<hr>

<form action="add.php" method="post">
  <div class="row">
    <div class="form-group col-md-6">
      <label for="name">Nome</label>
      <input type="text" placeholder="Nome do Profissional" class="form-control" name="profissional['nome']" required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">CPF</label>
      <input type="text" onkeypress="mascara(this,cpf)" maxlength="14" placeholder="000.000.000-00" class="form-control" name="profissional['cpf']" required>
    </div>
	<div class="form-group col-md-2">
      <label for="campo2">Tel. Residencial</label>
      <input type="text" onkeypress="mascara(this,telefone)" maxlength="14" placeholder="(00)0000-0000" class="form-control" name="profissional['telefone']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">Tel. Celular</label>
      <input type="text" onkeypress="mascara(this,celular)" maxlength="15" placeholder="(00)00000-0000" class="form-control" name="profissional['celular']">
    </div>
  </div>
  
  <div class="row">	  
	  
    <div class="form-group col-md-6">
      <label for="campo1">Profissão</label>
      <input type="text" placeholder="Profissão do Profissional" class="form-control" name="profissional['profissao']" required>
    </div>

    <div class="form-group col-md-6">
      <label for="campo2">Instituição</label>
      <input type="text" placeholder="Instituição do Profissional" class="form-control" name="profissional['instituicao']" required>
    </div>       

  </div>
  
  <fieldset>
    <legend>Para uso no sistema</legend>
    <div class="row">
      <div class="col s12 m6 l6">
        <div class="input-field">
          <input type="text" id="usuario" name="profissional['usuario']" required>
          <label for="usuario">Usuário</label>
        </div>
      </div>

      <div class="col s12 m6 l6">
        <div class="input-field">
          <input type="password" id="senha" name="profissional['senha']" required>
          <label for="senha">Senha</label>
        </div>
      </div>
    </div>
  </fieldset>    

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div> 
</form>

<?php include(FOOTER_TEMPLATE); ?>
