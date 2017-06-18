<?php 
	require_once('functions.php');
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Relatórios de <?php echo $paciente['nome'] ?></h2>
<hr>

<div class="row">
  <div class="col s12 m4 l4">
    <div class="input-field">
      <input disabled type="text" class="black-text" id="nome" value="<?php $paciente = find('pacientes', $resultado['id_paciente']); echo $paciente['nome']; ?>" required>
      <label for="nome" class="main-text">Paciente</label>
    </div>
  </div>

  <div class="col s12 m4 l4">
    <div class="input-field">
      <input disabled type="text" class="black-text" id="nome" value="<?php $profissional = find('profissionais', $resultado['id_profissional']); echo $profissional['nome']; ?>" required>
      <label for="nome" class="main-text">Profissional</label>
    </div>
  </div>

  <div class="col s12 m4 l4">
    <div class="input-field">
      <input disabled type="text" class="black-text" id="nome" value="<?php echo $resultado['modificacao']; ?>" required>
      <label for="nome" class="main-text">Data</label>
    </div>
  </div>

  <div class="col s12">
    <div class="input-field">
      <input disabled type="text" class="black-text" id="nome" value="<?php echo $resultado['resultado']; ?>" required>
      <label for="nome" class="main-text">Resultado</label>
    </div>
  </div>
</div>

<div class="container">
  <div class="row center">
    <br>
    <a href="index.php" class="btn blue white-text btn-default">Voltar</a>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
