<?php 
  require_once('functions.php');
  initAttr();
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Novo Responsável</h2>
<hr>

<form action="add.php" method="post">
  <div class="row">
    <div class="col s12 m6 l6">
      <div class="input-field">
        <input type="text" id="nome" name="responsavel['nome']" required>
        <label for="nome">Nome</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="cpf" maxlength="14" id="cpf" name="responsavel['cpf']" required>
        <label for="cpf">CPF</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="telefone" maxlength="14" id="telefone" name="responsavel['telefone']" required>
        <label for="telefone">Telefone</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="celular" maxlength="15" id="celular" name="responsavel['celular']" required>
        <label for="celular">Celular</label>
      </div>
    </div>
  </div>

  <div class="row">   
    <div class="input-field col s12">
      <select class="select2" id="id_paciente" name="relacao['id_paciente']" required>
        <option></option>
        <?php if ($pacientes) : ?>
        <?php foreach ($pacientes as $paciente) : ?>
          <option value="<?php echo $paciente['id']; ?>"><?php echo $paciente['nome']; ?></option>
        <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <label for="id_paciente">Paciente</label>
    </div>
  </div>

  <fieldset>
    <legend class="grey-text"> Para uso no sistema </legend>
    <div class="row">
      <div class="col s12 m6 l6">
        <div class="input-field">
          <input type="text" id="usuario" name="responsavel['usuario']" required>
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
