<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h4><p align = "center"><b>CARS</b> -  (Escala de Classificação de Autismo na Infância)</p></h4>
<h5> Paciente: ______</h5>
<h5> Profissional Responsável: <?php echo $_COOKIE['nome']?></h5>	
<h5> Data da Avaliação:  <?php $today = date_create('now', new DateTimeZone('America/Sao_Paulo')); echo $today->format("d/m/Y"); ?>;</h5>	

<form action = "cars.php" method = "post">
	<div class="row">
		<h5 class="main-text center">Relacionamento interpessoal (Questão 1/15)</h5> 
		<br>
		<p>
      <input class="with-gap" name="q1" type="radio" id="q1-1" value="1" required/>
      <label for="q1-1">O comportamento da criança é apropriado para a idade. Alguma timidez, inquietação ou prejuízo pode ser observado, mas não a um nível diferente (atípico) quando comparado com outra de mesma idade.</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-i1" value="1.5" />
      <label for="q1-i1">Intermediário</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-2" value="2" />
      <label for="q1-2">A criança evita olhar o adulto nos olhos; evita o adulto; demonstra dificuldade quando é forçada a tal; é extremamente tímida; não é tão sociável com um adulto quanto uma criança normal de mesma idade; fica agarrada aos familiares de forma mais intensa que outras de mesma idade.</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-i2" value="2.5" />
      <label for="q1-i2">Intermediário</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-3" value="3" />
      <label for="q1-3">A criança às vezes demonstra isolamento. Há necessidade de esforço persistente para obter sua atenção. Há um contato mínimo por iniciativa da criança (o contato pode ser impessoal).</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-i3" value="3.5" />
      <label for="q1-i3">Intermediário</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-4" value="4" />
      <label for="q1-4">A criança é isolada realmente, não se dando conta do que o adulto está fazendo; nunca responde as iniciativas do adulto ou inicia contato. Somente as tentativas muito intensas para obter sua atenção tem algum efeito positivo.</label>
    </p>
  </div>
	
	<br />
	<br />
	<button type="submit" class="btn btn-primary">Próximo Item</button>
</form>
	

<?php include(FOOTER_TEMPLATE); ?>
