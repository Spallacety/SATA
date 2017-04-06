<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Profissional</h2>

<form action="edit.php?id=<?php echo $profissional['id']; ?>" method="post">
  <div class="row">
    <div class="col s12 m6 l6">
      <div class="input-field">
        <input type="text" id="nome" name="profissional['nome']" value="<?php echo $profissional['nome']; ?>" required>
        <label for="nome">Nome</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="cpf" maxlength="14" id="cpf" name="profissional['cpf']" value="<?php echo $profissional['cpf']; ?>" required>
        <label for="cpf">CPF</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="telefone" maxlength="14" id="telefone" name="profissional['telefone']" value="<?php echo $profissional['telefone']; ?>" required>
        <label for="telefone">Telefone</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="celular" maxlength="15" id="celular" name="profissional['celular']" value="<?php echo $profissional['celular']; ?>" required>
        <label for="celular">Celular</label>
      </div>
    </div>
  </div>

  <div class="row">   
    <div class="input-field col s12 m6 l6">
      <select id="instituicao" name="profissional['id_instituicao']" required>
        <option></option>
        <?php if ($instituicoes) : ?>
        <?php foreach ($instituicoes as $instituicao) : ?>
          <option <?php if ($profissional['id_instituicao'] == $instituicao['id']) echo ' selected '; ?> value="<?php echo $instituicao['id']; ?>"><?php echo $instituicao['descricao']; ?></option>
        <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <label for="instituicao">Instituição</label>
    </div>

    <div class="input-field col s12 m6 l6">
      <select id="profissao" name="profissional['id_profissao']" required>
        <option></option>
        <?php if ($profissoes) : ?>
        <?php foreach ($profissoes as $profissao) : ?>
          <option <?php if ($profissional['id_profissao'] == $profissao['id']) echo ' selected '; ?> value="<?php echo $profissao['id']; ?>"><?php echo $profissao['descricao']; ?></option>
        <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <label for="profissao">Profissão</label>
    </div>    
  </div>
  
  <fieldset>
    <legend class="grey-text"> Para uso no sistema </legend>
    <div class="row">
      <div class="col s12 m6 l6">
        <div class="input-field">
          <input type="text" id="usuario" name="profissional['usuario']" value="<?php echo $profissional['usuario']; ?>" required>
          <label for="usuario">Usuário</label>
        </div>
      </div>

      <div class="col s12 m6 l6">
        <div class="input-field">
          <input type="password" id="senha" name="profissional['senha']" value="<?php echo $profissional['senha']; ?>" required>
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
