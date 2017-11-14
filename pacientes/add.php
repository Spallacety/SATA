<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Novo Paciente</h2>
<hr>

<form action="add.php" method="post">
  <div class="row">
    <div class="col s12 m7 l7">
      <div class="input-field">
        <input type="text" id="nome" name="paciente['nome']" required>
        <label for="nome">Nome</label>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="input-field">
        <input type="text" class="cpf" maxlength="14" id="cpf" name="paciente['cpf']" required>
        <label for="cpf">CPF</label>
      </div>
    </div>

    <div class="input-field col s12 m2 l2">
      <select id="sexo" class="black-text" name="paciente['sexo']">
        <option disabled selected></option>
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
      </select>
      <label for="sexo">Sexo</label>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="data" maxlength="10" id="dtNasc" name="paciente['nascimento']" required>
        <label for="dtNasc">Nascimento</label>
      </div>
    </div>

    <div class="col s12 m5 l5">
      <div class="input-field">
        <input type="text" id="endereco" name="paciente['endereco']" required>
        <label for="endereco">Endereço</label>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="input-field">
        <input type="text" id="bairro" name="paciente['bairro']" required>
        <label for="bairro">Bairro</label>
      </div>
    </div>

    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="cep" maxlength="9" id="cep" name="paciente['cep']" required>
        <label for="cep">CEP</label>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col s12 m5 l5">
      <div class="input-field">
        <input type="text" id="cidade" name="paciente['cidade']" required>
        <label for="cidade">Cidade</label>
      </div>
    </div>

    <div class="col s12 m1 l1">
      <div class="input-field">
        <input type="text" maxlength="2" id="estado" name="paciente['estado']" required>
        <label for="estado">UF</label>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="input-field">
        <input type="text" class="telefone" maxlength="14" id="telefone" name="paciente['telefone']" required>
        <label for="telefone">Tel. Residencial</label>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="input-field">
        <input type="text" class="celular" maxlength="15" id="celular" name="paciente['celular']" required>
        <label for="celular">Tel. Celular</label>
      </div>
    </div>
  </div>

  <h4 class="main-text center">Responsável pelo paciente</h2>

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
      <br>
      <button type="submit" class="btn waves-effect waves-light green white-text btn-primary">Salvar</button>
      <a href="index.php" class="btn waves-effect waves-light red white-text btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>