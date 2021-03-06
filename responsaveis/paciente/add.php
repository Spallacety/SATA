<?php 
  require_once('functions.php');
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Vincular profissional</h2>
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
      <button type="submit" class="btn waves-effect waves-light green white-text btn-primary">Salvar</button>
      <a href="list_professionals.php" class="btn waves-effect waves-light red white-text btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
