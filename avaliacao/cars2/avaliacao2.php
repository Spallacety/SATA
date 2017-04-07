<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h4 class="main-text center">CARS -  Escala de Classificação de Autismo na Infância</p></h4>
<h6> <b>Paciente:</b> ______</h6>
<h6> <b>Profissional Responsável:</b> <?php echo $_COOKIE['nome']?></h6>	
<h6> <b>Data da Avaliação:</b> <?php $today = date_create('now', new DateTimeZone('America/Sao_Paulo')); echo $today->format("d/m/Y"); ?></h6>	

<form action = "cars.php" method = "post">
	<div id="q1div" class="row">
		<h5 class="main-text center">Relacionamento interpessoal (Questão 1/15)</h5> 
		<br>
		<p>
      <input class="with-gap" name="q1" type="radio" id="q1-1" value="1" required/>
      <label for="q1-1" class="black-text">O comportamento da criança é apropriado para a idade. Alguma timidez, inquietação ou prejuízo pode ser observado, mas não a um nível diferente (atípico) quando comparado com outra de mesma idade.</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-i1" value="1.5" />
      <label for="q1-i1" class="black-text">Intermediário</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-2" value="2" />
      <label for="q1-2" class="black-text">A criança evita olhar o adulto nos olhos; evita o adulto; demonstra dificuldade quando é forçada a tal; é extremamente tímida; não é tão sociável com um adulto quanto uma criança normal de mesma idade; fica agarrada aos familiares de forma mais intensa que outras de mesma idade.</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-i2" value="2.5" />
      <label for="q1-i2" class="black-text">Intermediário</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-3" value="3" />
      <label for="q1-3" class="black-text">A criança às vezes demonstra isolamento. Há necessidade de esforço persistente para obter sua atenção. Há um contato mínimo por iniciativa da criança (o contato pode ser impessoal).</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-i3" value="3.5" />
      <label for="q1-i3" class="black-text">Intermediário</label>
    </p>
    <p>
      <input class="with-gap" name="q1" type="radio" id="q1-4" value="4" />
      <label for="q1-4" class="black-text">A criança é isolada realmente, não se dando conta do que o adulto está fazendo; nunca responde as iniciativas do adulto ou inicia contato. Somente as tentativas muito intensas para obter sua atenção tem algum efeito positivo.</label>
    </p>

	  <div class="row center">
	    <br>
	    <a href="#!" onClick="cars1to2();" class="btn green white-text btn-primary">Avançar</a>
	  </div>
  </div>

  <div id="q2div" class="row" style="display:none">
		<h5 class="main-text center">q2 (Questão 2/15)</h5> 
		<br>
		<p>
      <input class="with-gap" name="q2" type="radio" id="q2-1" value="1" required/>
      <label for="q2-1" class="black-text"> asdfasdf.</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-i1" value="1.5" />
      <label for="q2-i1" class="black-text">Intermediário</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-2" value="2" />
      <label for="q2-2" class="black-text">asdfasdf.</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-i2" value="2.5" />
      <label for="q2-i2" class="black-text">Intermediário</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-3" value="3" />
      <label for="q2-3" class="black-text">asdger.</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-i3" value="3.5" />
      <label for="q2-i3" class="black-text">Intermediário</label>
    </p>
    <p>
      <input class="with-gap" name="q2" type="radio" id="q2-4" value="4" />
      <label for="q2-4" class="black-text">sdfqwe.</label>
    </p>

    <div class="row center">
	    <br>
	    <a href="#!" onClick="cars2to1();" class="btn orange white-text btn-primary">Voltar</a>
	    <a href="#!" onClick="cars2to3();" class="btn green white-text btn-primary">Avançar</a>
	  </div>
  </div>
	
</form>
	
<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>