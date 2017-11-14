<?php 
  require_once('functions.php');
  initAttr();
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
        <input type="text" class="celular" maxlength="15" id="celular" name="profissional['celular']" required>
        <label for="celular">Celular</label>
      </div>
    </div>
  </div>

  <div class="row">	  
    <div class="input-field col s12 m6 l6">
      <select class="select2" id="profissao" name="profissional['id_profissao']" required>
        <option></option>
        <?php if ($profissoes) : ?>
        <?php foreach ($profissoes as $profissao) : ?>
        <?php if ($profissao['id'] > 2 ) : ?>
          <option value="<?php echo $profissao['id']; ?>"><?php echo $profissao['descricao']; ?></option>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <label for="profissao">Profissão</label>
    </div>

    <div class="input-field col s12 m6 l6">
      <select class="select2" id="instituicao" name="profissional['id_instituicao']" required>
        <option></option>
        <?php if ($instituicoes) : ?>
        <?php foreach ($instituicoes as $instituicao) : ?>
        <?php if ($instituicao['id'] > 2 ) : ?>
          <option value="<?php echo $instituicao['id']; ?>"><?php echo $instituicao['descricao']; ?></option>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <label for="instituicao">Instituição</label>
    </div>
  </div>
  
  <fieldset>
    <legend class="grey-text"> Para uso no sistema </legend>
    <div class="row">
      <div class="col s12 m6 l6">
        <div class="input-field">
          <input type="text" id="usuario" name="profissional['usuario']" required>
          <label for="usuario">Usuário</label>
        </div>
      </div>

      <div class="col s12 m6 l6">
        <div class="input-field">
          <input type="password" id="senha" name="senhaSemHash" required>
          <label for="senha">Senha</label>
        </div>
      </div>
    </div>
  </fieldset>    

  <div class="container">
    <div class="row center">
      <br>
      <button type="submit" class="btn waves-effect waves-light green white-text btn-primary">Salvar</button>
      <a href="index.php" class="btn waves-effect waves-light red white-text btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
