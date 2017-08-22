<?php 
  require_once('functions.php');
  initAttr();
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Editar Responsável</h2>
<hr>

<form action="edit.php?id=<?php echo $responsavel['id']; ?>" method="post">
  <div class="row">
    <div class="col s12 m6 l6">
      <div class="input-field">
        <input type="text" id="nome" name="responsavel['nome']" value="<?php echo $responsavel['nome']; ?>" required>
        <label for="nome">Nome</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="cpf" maxlength="14" id="cpf" name="responsavel['cpf']" value="<?php echo $responsavel['cpf']; ?>" required>
        <label for="cpf">CPF</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="telefone" maxlength="14" id="telefone" name="responsavel['telefone']" value="<?php echo $responsavel['telefone']; ?>" required>
        <label for="telefone">Telefone</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="celular" maxlength="15" id="celular" name="responsavel['celular']" value="<?php echo $responsavel['celular']; ?>" required>
        <label for="celular">Celular</label>
      </div>
    </div>
  </div>

  </div>
  
  <fieldset>
    <legend class="grey-text"> Para uso no sistema </legend>
    <div class="row">
      <div class="col s12 m6 l6">
        <div class="input-field">
          <input type="text" id="usuario" name="responsavel['usuario']" value="<?php echo $responsavel['usuario']; ?>" required>
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
      <button type="submit" class="btn green white-text btn-primary">Salvar</button>
      <a href="index.php" class="btn red white-text btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
