<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Nova Profissão</h2>
<hr>

<form action="add.php" method="post">
  <div class="row">
    <div class="col s12">
      <div class="input-field">
        <input type="text" id="descricao" name="profissao['descricao']" required>
        <label for="descricao">Profissão</label>
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
