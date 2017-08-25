<?php 
  require_once('functions.php');
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Novo Responsável</h2>
<hr>

<form action="add.php" method="post">
  <div class="row">   
    <div class="input-field col s12">
      <select class="select2" id="id_profissional" name="nova_relacao['id_profissional']" required>
        <option></option>
        <?php if ($profissionais) : ?>
        <?php foreach ($profissionais as $profissional) : ?>
          <option value="<?php echo $profissional['id']; ?>"><?php echo $profissional['nome']; ?></option>
        <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <label for="id_profissional">Profissional</label>
    </div>
  </div>

  <div class="container">
    <div class="row center">
      <br>
      <button type="submit" class="btn green white-text btn-primary">Salvar</button>
      <a href="list_professionals.php" class="btn red white-text btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
