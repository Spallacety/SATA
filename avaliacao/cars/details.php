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
      <textarea disabled class="black-text materialize-textarea" type="text" id="q1"><?php echo $resultado['q1'] . ' - ' .findAnswer(1, $resultado['q1'])['significado'] ?></textarea>
      <label for="q1" class="main-text">Relacionamento interpessoa (Questão 1/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q2"><?php echo $resultado['q2'] . ' - ' .findAnswer(2, $resultado['q2'])['significado'] ?></textarea>
      <label for="q2" class="main-text">Imitação (Questão 2/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q3"><?php echo $resultado['q3'] . ' - ' .findAnswer(3, $resultado['q3'])['significado'] ?></textarea>
      <label for="q3" class="main-text"></label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q4"><?php echo $resultado['q4'] . ' - ' .findAnswer(4, $resultado['q4'])['significado'] ?></textarea>
      <label for="q4" class="main-text"></label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q5"><?php echo $resultado['q5'] . ' - ' .findAnswer(5, $resultado['q5'])['significado'] ?></textarea>
      <label for="q5" class="main-text"></label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q6"><?php echo $resultado['q6'] . ' - ' .findAnswer(6, $resultado['q6'])['significado'] ?></textarea>
      <label for="q6" class="main-text"></label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q7"><?php echo $resultado['q7'] . ' - ' .findAnswer(7, $resultado['q7'])['significado'] ?></textarea>
      <label for="q7" class="main-text"></label>
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
