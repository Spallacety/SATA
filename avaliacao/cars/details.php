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

<?php if ($resultado['id_profissional'] != $_COOKIE['id_profissional']) : ?>
  <div class="row">
    <div class="col s12">
      <div class="input-field">
        <input disabled class="black-text" type="text" id="profissional" value="<?php echo find('profissionais', $resultado['id_profissional'])['nome']; ?>" required>
        <label for="profissional" class="main-text">Profissional</label>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="row">
  <div class="col s12">
    <div class="input-field">
      <input disabled class="black-text" type="text" id="resultado" value="<?php echo $resultado['resultado'] . ' - '; ?>" required>
      <label for="resultado" class="main-text">Resultado</label>
    </div>
  </div>
</div>

<div id="botaodetalhes" class="row center">
  <a href="#!" onClick="showDetails();" class="btn main-color white-text btn-default">Detalhes</a>
</div>

<div id="detalhes" class="row" style="display:none">
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q1"><?php echo $resultado['q1'] . ' - ' .findAnswer(1, $resultado['q1']) ?></textarea>
      <label for="q1" class="main-text">Relacionamento interpessoa (Questão 1/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q2"><?php echo $resultado['q2'] . ' - ' .findAnswer(2, $resultado['q2']) ?></textarea>
      <label for="q2" class="main-text">Imitação (Questão 2/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q3"><?php echo $resultado['q3'] . ' - ' .findAnswer(3, $resultado['q3']) ?></textarea>
      <label for="q3" class="main-text">Resposta emocional (Questão 3/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q4"><?php echo $resultado['q4'] . ' - ' .findAnswer(4, $resultado['q4']) ?></textarea>
      <label for="q4" class="main-text">Expressão corporal (Questão 4/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q5"><?php echo $resultado['q5'] . ' - ' .findAnswer(5, $resultado['q5']) ?></textarea>
      <label for="q5" class="main-text">Uso do objeto (Questão 5/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q6"><?php echo $resultado['q6'] . ' - ' .findAnswer(6, $resultado['q6']) ?></textarea>
      <label for="q6" class="main-text">Adaptação a mudanças (Questão 6/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q7"><?php echo $resultado['q7'] . ' - ' .findAnswer(7, $resultado['q7']) ?></textarea>
      <label for="q7" class="main-text">Uso do olhar (Questão 7/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q8"><?php echo $resultado['q8'] . ' - ' .findAnswer(8, $resultado['q8']) ?></textarea>
      <label for="q8" class="main-text">Uso da audição (Questão 8/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q9"><?php echo $resultado['q9'] . ' - ' .findAnswer(9, $resultado['q9']) ?></textarea>
      <label for="q9" class="main-text">Uso do paladar, olfato e do tato (Questão 9/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q10"><?php echo $resultado['q10'] . ' - ' .findAnswer(10, $resultado['q10']) ?></textarea>
      <label for="q10" class="main-text">Medo e nervosismo (Questão 10/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q11"><?php echo $resultado['q11'] . ' - ' .findAnswer(11, $resultado['q11']) ?></textarea>
      <label for="q11" class="main-text">Comunicação verbal (Questão 11/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q12"><?php echo $resultado['q12'] . ' - ' .findAnswer(12, $resultado['q12']) ?></textarea>
      <label for="q12" class="main-text">Comunicação não-verbal (Questão 12/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q13"><?php echo $resultado['q13'] . ' - ' .findAnswer(13, $resultado['q13']) ?></textarea>
      <label for="q13" class="main-text">Atividade (Questão 13/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q14"><?php echo $resultado['q14'] . ' - ' .findAnswer(14, $resultado['q14']) ?></textarea>
      <label for="q14" class="main-text">Grau e consistência das respostas da inteligência (Questão 14/15)</label>
    </div>
  </div>
  <div class="col s12">
    <div class="input-field">
      <textarea disabled class="black-text materialize-textarea" type="text" id="q15"><?php echo $resultado['q15'] . ' - ' .findAnswer(15, $resultado['q15']) ?></textarea>
      <label for="q15" class="main-text">Impressão geral (Questão 15/15)</label>
    </div>
  </div>
</div>
  
<div class="row center">
  <?php if ($resultado['id_profissional'] != $_COOKIE['id_profissional']) : ?>
    <a href="otherlist.php" class="btn main-color white-text btn-default">Voltar</a>
  <?php else: ?>
    <a href="mylist.php" class="btn main-color white-text btn-default">Voltar</a>
  <?php endif; ?>
</div>

<?php include(FOOTER_TEMPLATE); ?>
