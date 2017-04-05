<?php 
  require_once('functions.php');
  initInstituicoes();
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Novo Profissional</h2>
<hr>

<form action="add.php" method="post">
  <div class="row">
    <div class="col s12 m6 l6">
      <div class="input-field">
        <input type="text" id="nome" name="profissional['nome']" required>
        <label for="nome">Nome</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="cpf" maxlength="14" id="cpf" name="profissional['cpf']" required>
        <label for="cpf">CPF</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="telefone" maxlength="14" id="telefone" name="profissional['telefone']" required>
        <label for="telefone">Telefone</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="celular" maxlength="14" id="celular" name="profissional['celular']" required>
        <label for="celular">Celular</label>
      </div>
    </div>
  </div>

  <div class="row">	  
	  
    <div class="input-field col s12 m6 l6">
      <select id="instituicao" name="profissional['instituicao']">
        <option disabled selected></option>
        <?php if ($instituicoes) : ?>
        <?php foreach ($instituicoes as $instituicao) : ?>
          <option value="<?php echo $instituicao['id']; ?>"><?php echo $instituicao['descricao']; ?></option>
        <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <label for="instituicao">Instituição</label>
    </div>

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
    <legend> Para uso no sistema </legend>
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

  <div class="container">
    <div class="row center">
      <br>
      <button type="submit" class="btn green white-text btn-primary">Salvar</button>
      <a href="index.php" class="btn red white-text btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
