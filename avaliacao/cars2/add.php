<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Nova Profissão</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-8">
      <label for="name">Profissão</label>
      <input type="text" placeholder="Profissão" class="form-control" name="profissao['descricao']" required>
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div> 
</form>

<?php include(FOOTER_TEMPLATE); ?>
