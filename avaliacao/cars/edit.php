<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Profissão</h2>

<form action="edit.php?id=<?php echo $profissao['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-6">
      <label for="name">Profissão</label>
      <input type="text" class="form-control" name="profissao['descricao']" value="<?php echo $profissao['descricao']; ?>">
    </div>
    
  </div>

  
  <div class="row">
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
