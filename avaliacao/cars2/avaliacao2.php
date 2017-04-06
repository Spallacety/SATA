<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>


		<form action = "cars.php" method = "post">
			<fieldset>
			<h2><p align = "center"><b>CARS</b> -  (Escala de Classificação de Autismo na Infância)</p></h2> 
			<h3> Paciente: PACIENTE AVALIADO 01</h3>
			<h3> Profissional Responsável: PROFISSIONAL AVALIADOR 03  </h3>	
			<h3> Data da Avaliaçãp: DD/MM/AAAA </h3>	
			<br />		
			<h3><label for = "p1"><b><u>Pergunta 01 - Relacionamento interpessoal</u></b></h3> 
			<br />
			<input type = "radio" name = "p1" value = "1" required/> O comportamento da criança é apropriado para a idade. Alguma timidez, inquietação ou prejuízo pode ser observado, mas não a um nível diferente (atípico) quando comparado com outra de mesma idade. 
			<br />
			<input type = "radio" name = "p1" value = "1.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p1" value = "2" /> A criança evita olhar o adulto nos olhos; evita o adulto; demonstra dificuldade quando é forçada a tal; é extremamente tímida; não é tão sociável com um adulto quanto uma criança normal de mesma idade; fica agarrada aos familiares de forma mais intensa que outras de mesma idade. 
			<br />
			<input type = "radio" name = "p1" value = "2.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p1" value = "3" /> A criança às vezes demonstra isolamento. Há necessidade de esforço persistente para obter sua atenção. Há um contato mínimo por iniciativa da criança (o contato pode ser impessoal). 
			<br />
			<input type = "radio" name = "p1" value = "3.5" />
			 Intermediário 
			<br />
			<input type = "radio" name = "p1" value = "4" /> A criança é isolada realmente, não se dando conta do que o adulto está fazendo; nunca responde as iniciativas do adulto ou inicia contato. Somente as tentativas muito intensas para obter sua atenção tem algum efeito positivo. 
			
			<br />
			<br />
			<button type="submit" class="btn btn-primary">Próximo Item</button>			
						
			</fieldset>
		</form>
	

<?php include(FOOTER_TEMPLATE); ?>
