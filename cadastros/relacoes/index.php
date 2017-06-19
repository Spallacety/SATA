<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text">Relações</h4>
<hr>

<form action="index.php" method="post">
	<div class="row">
    <div class="col s12 m6 l6">
      <div class="input-field">
        <input type="text" id="id_paciente" name="relacao['id_paciente']" required>
        <label for="id_paciente">ID Paciente</label>
      </div>
    </div>

    <div class="col s12 m6 l6">
      <div class="input-field">
        <input type="text" id="id_profissional" name="relacao['id_profissional']" required>
        <label for="id_profissional">ID Profissional</label>
      </div>
    </div>    
  </div>

  <div class="row center">
    <button type="submit" class="btn green white-text btn-primary">Salvar</button>
  </div>
</form>


<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>