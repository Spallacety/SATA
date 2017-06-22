<?php 
	require_once('functions.php'); 
	details($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text center">Avaliação</h2>
<hr>

<div class="row">
  <div class="col s12 m8 l8">
    <div class="input-field">
      <input disabled class="black-text" type="text" id="paciente" value="<?php echo find('pacientes', $resultado['id_paciente'])['nome']; ?>" required>
      <label for="paciente" class="main-text">Paciente</label>
    </div>
  </div>

  <div class="col s12 m4 l4">
    <div class="input-field">
      <input disabled class="black-text" type="text" id="data" value="<?php echo $resultado['modificacao']; ?>" required>
      <label for="data" class="main-text">Data</label>
    </div>
  </div>    
</div>

<div class="row">
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q1" value="<?php echo findAnswer(1, $resultado['q1'])['significado'] ?>" required>
      <label for="q1" class="main-text">Relacionamento interpessoa (Questão 1/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q2" value="<?php echo findAnswer(2, $resultado['q2'])['significado'] ?>" required>
      <label for="q2" class="main-text">Imitação (Questão 2/15)</label>
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
