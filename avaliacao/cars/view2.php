<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Paciente: <?php echo $car['paciente']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Número do Relatório:</dt>
	<dd><?php echo $car['id']; ?></dd>
</dl>
<dl class="dl-horizontal">
	<dt>Relações Pessoais:</dt>	
<dd>	
	<?php
switch ($car['q1']) {
    case "1":
        echo "Nenhuma evidência de dificuldade ou anormalidade nas relações pessoais.";
        break;
    case "1.5":
        echo "Intermediário entre: Nenhuma evidência de dificuldade ou anormalidade nas relações pessoais / Relações levemente anormais.";
        break;
    case "2":
        echo "Relações levemente anormais.";
        break;
    case "2.5":
        echo "Intermediário entre: Relações levemente anormais / Relações moderadamente anormais.";
        break;
    case "3":
        echo "Relações moderadamente anormais.";
        break;
    case "3.5":
        echo "Intermediário entre: Relações moderadamente anormais / Relações gravemente anormais.";
        break;
    case "4":
        echo "Relações gravemente anormais.";
        break;                  
}
?>
	</dd>
	
	
</dl>

<dl class="dl-horizontal">
	<dt>Imitação:</dt>
<dd>	
	<?php
switch ($car['q2']) {
    case "1":
        echo "Imitação adequada.";
        break;
    case "1.5":
        echo "Intermediário entre: Imitação adequada / Imitação levemente anormal.";
        break;
    case "2":
        echo "Imitação levemente anormal.";
        break;
    case "2.5":
        echo "Intermediário entre: Imitação levemente anormal / Imitação moderadamente anormal.";
        break;
    case "3":
        echo "Imitação moderadamente anormal.";
        break;
    case "3.5":
        echo "Intermediário entre: Imitação moderadamente anormal / Imitação gravemente anormal.";
        break;
    case "4":
        echo "Imitação gravemente anormal.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Resposta Emocional:</dt>
<dd>	
	<?php
switch ($car['q3']) {
    case "1":
        echo "Resposta emocional adequada à situação e à idade.";
        break;
    case "1.5":
        echo "Intermediário entre: Resposta emocional adequada à situação e à idade / Resposta emocional levemente anormal.";
        break;
    case "2":
        echo "Resposta emocional levemente anormal.";
        break;
    case "2.5":
        echo "Intermediário entre: Resposta emocional levemente anormal / Resposta emocional moderadamente anormal.";
        break;
    case "3":
        echo "Resposta emocional moderadamente anormal.";
        break;
    case "3.5":
        echo "Intermediário entre: Resposta emocional moderadamente anormal / Resposta emocional gravemente anormal.";
        break;
    case "4":
        echo "Resposta emocional gravemente anormal.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Uso Corporal:</dt>
<dd>	
	<?php
switch ($car['q4']) {
    case "1":
        echo "Uso corporal adequado à idade.";
        break;
    case "1.5":
        echo "Intermediário entre: Uso corporal adequado à idade / Uso corporal levemente anormal.";
        break;
    case "2":
        echo "Uso corporal levemente anormal.";
        break;
    case "2.5":
        echo "Intermediário entre: Uso corporal levemente anormal / Uso corporal moderadamente anormal.";
        break;
    case "3":
        echo "Uso corporal moderadamente anormal.";
        break;
    case "3.5":
        echo "Intermediário entre: Uso corporal moderadamente anormal / Uso corporal gravemente anormal.";
        break;
    case "4":
        echo "Uso corporal gravemente anormal.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Uso de Objetos:</dt>
<dd>	
	<?php
switch ($car['q5']) {
    case "1":
        echo "Uso e interesse adequados por brinquedos e outros objetos.";
        break;
    case "1.5":
        echo "Intermediário entre: Uso e interesse adequados por brinquedos e outros objetos / Uso e interesse levemente inadequados por brinquedos e outros objetos.";
        break;
    case "2":
        echo "Uso e interesse levemente inadequados por brinquedos e outros objetos.";
        break;
    case "2.5":
        echo "Intermediário entre: Uso e interesse levemente inadequados por brinquedos e outros objetos / Uso e interesse moderadamente inadequados por brinquedos e outros objetos.";
        break;
    case "3":
        echo "Uso e interesse moderadamente inadequados por brinquedos e outros objetos.";
        break;
    case "3.5":
        echo "Intermediário entre: Uso e interesse moderadamente inadequados por brinquedos e outros objetos / Uso e interesse gravemente inadequados por brinquedos e outros objetos.";
        break;
    case "4":
        echo "Uso e interesse gravemente inadequados por brinquedos e outros objetos.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Resposta a Mudanças:</dt>
<dd>	
	<?php
switch ($car['q6']) {
    case "1":
        echo "Respostas à mudança adequadas a idade.";
        break;
    case "1.5":
        echo "Intermediário entre: Respostas à mudança adequadas a idade / Respostas à mudança adequadas à idade levemente anormal.";
        break;
    case "2":
        echo "Respostas à mudança adequadas à idade levemente anormal.";
        break;
    case "2.5":
        echo "Intermediário entre: Respostas à mudança adequadas à idade levemente anormal / Respostas à mudança adequadas à idade moderadamente anormal.";
        break;
    case "3":
        echo "Respostas à mudança adequadas à idade moderadamente anormal.";
        break;
    case "3.5":
        echo "Intermediário entre: Respostas à mudança adequadas à idade moderadamente anormal / Respostas à mudança adequadas à idade gravemente anormal.";
        break;
    case "4":
        echo "Respostas à mudança adequadas à idade gravemente anormal.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Resposta Visual:</dt>
	<dd>	
	<?php
switch ($car['q7']) {
    case "1":
        echo "Resposta visual adequada.";
        break;
    case "1.5":
        echo "Intermediário entre: Resposta visual adequada / Resposta visual levemente anormal.";
        break;
    case "2":
        echo "Resposta visual levemente anormal.";
        break;
    case "2.5":
        echo "Intermediário entre: Resposta visual levemente anormal / Resposta visual moderadamente anormal.";
        break;
    case "3":
        echo "Resposta visual moderadamente anormal.";
        break;
    case "3.5":
        echo "Intermediário entre: Resposta visual moderadamente anormal / Resposta visual gravemente anormal.";
        break;
    case "4":
        echo "Resposta visual gravemente anormal.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Resposta Auditiva:</dt>
	<dd>	
	<?php
switch ($car['q8']) {
    case "1":
        echo "Respostas auditivas adequadas para a idade.";
        break;
    case "1.5":
        echo "Intermediário entre: Respostas auditivas adequadas para a idade / Respostas auditivas levemente anormal.";
        break;
    case "2":
        echo "Respostas auditivas levemente anormal.";
        break;
    case "2.5":
        echo "Intermediário entre: Respostas auditivas levemente anormal / Respostas auditivas moderadamente anormal.";
        break;
    case "3":
        echo "Respostas auditivas moderadamente anormal.";
        break;
    case "3.5":
        echo "Intermediário entre: Respostas auditivas moderadamente anormal / Respostas auditivas gravemente anormal.";
        break;
    case "4":
        echo "Respostas auditivas gravemente anormal.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Respota e Uso do Paladar, Olfato e Tato:</dt>
	<dd>
	<?php
switch ($car['q9']) {
    case "1":
        echo "Uso e reposta normais do paladar, olfato e tato.";
        break;
    case "1.5":
        echo "Intermediário entre: Uso e reposta normais do paladar, olfato e tato / Uso e reposta levemente anormais do paladar, olfato e tato.";
        break;
    case "2":
        echo "Uso e reposta levemente anormais do paladar, olfato e tato.";
        break;
    case "2.5":
        echo "Intermediário entre: Uso e reposta levemente anormais do paladar, olfato e tato / Uso e resposta moderadamente anormais do paladar, olfato e tato.";
        break;
    case "3":
        echo "Uso e resposta moderadamente anormais do paladar, olfato e tato.";
        break;
    case "3.5":
        echo "Intermediário entre: Uso e resposta moderadamente anormais do paladar, olfato e tato / Uso e resposta gravemente anormais do paladar, olfato e tato.";
        break;
    case "4":
        echo "Uso e resposta gravemente anormais do paladar, olfato e tato.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Medo ou Nervosismo:</dt>
		<dd>
	<?php
switch ($car['q10']) {
    case "1":
        echo "Medo ou nervosismo normais.";
        break;
    case "1.5":
        echo "Intermediário entre: Medo ou nervosismo normais / Medo ou nervosismo levemente anormais.";
        break;
    case "2":
        echo "Medo ou nervosismo levemente anormais.";
        break;
    case "2.5":
        echo "Intermediário entre: Medo ou nervosismo levemente anormais / Medo ou nervosismo moderadamente anormais.";
        break;
    case "3":
        echo "Medo ou nervosismo moderadamente anormais.";
        break;
    case "3.5":
        echo "Intermediário entre: Medo ou nervosismo moderadamente anormais / Medo ou nervosismo gravemente anormais.";
        break;
    case "4":
        echo "Medo ou nervosismo gravemente anormais.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Comunicação Verbal:</dt>
	<dd>
	<?php
switch ($car['q11']) {
    case "1":
        echo "Comunicação verbal normal, adequada a idade e à situação.";
        break;
    case "1.5":
        echo "Intermediário entre: Comunicação verbal normal, adequada a idade e à situação / Comunicação verbal levemente anormal.";
        break;
    case "2":
        echo "Comunicação verbal levemente anormal.";
        break;
    case "2.5":
        echo "Intermediário entre: Comunicação verbal levemente anormal / Comunicação verbal moderadamente anormal.";
        break;
    case "3":
        echo "Comunicação verbal moderadamente anormal.";
        break;
    case "3.5":
        echo "Intermediário entre: Comunicação verbal moderadamente anormal / Comunicação verbal gravemente anormal.";
        break;
    case "4":
        echo "Comunicação verbal gravemente anormal.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Comunicação Não-Verbal:</dt>
	<dd>
	<?php
switch ($car['q12']) {
    case "1":
        echo "Uso normal da comunicação não-verbal adequado à idade e situação.";
        break;
    case "1.5":
        echo "Intermediário entre: Uso normal da comunicação não-verbal adequado à idade e situação / Uso da comunicação não-verbal levemente anormal.";
        break;
    case "2":
        echo "Uso da comunicação não-verbal levemente anormal.";
        break;
    case "2.5":
        echo "Intermediário entre: Uso da comunicação não-verbal levemente anormal / Uso da comunicação não-verbal moderadamente anormal.";
        break;
    case "3":
        echo "Uso da comunicação não-verbal moderadamente anormal.";
        break;
    case "3.5":
        echo "Intermediário entre: Uso da comunicação não-verbal moderadamente anormal / Uso da comunicação não-verbal gravemente anormal.";
        break;
    case "4":
        echo "Uso da comunicação não-verbal gravemente anormal.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Nível de Atividade :</dt>
	<dd>
	<?php
switch ($car['q13']) {
    case "1":
        echo "Nível de atividade normal para idade e circunstâncias.";
        break;
    case "1.5":
        echo "Intermediário entre: Nível de atividade normal para idade e circunstâncias / Nível de atividade levemente anormal.";
        break;
    case "2":
        echo "Nível de atividade levemente anormal.";
        break;
    case "2.5":
        echo "Intermediário entre: Nível de atividade levemente anormal / Nível de atividade moderadamente anormal.";
        break;
    case "3":
        echo "Nível de atividade moderadamente anormal.";
        break;
    case "3.5":
        echo "Intermediário entre: Nível de atividade moderadamente anormal / Nível de atividade gravemente anormal.";
        break;
    case "4":
        echo "Nível de atividade gravemente anormal.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Nível e Consistência da Resposta Intelectual:</dt>
	<dd>
	<?php
switch ($car['q14']) {
    case "1":
        echo "A inteligência é normal e razoavelmente consistente em várias áreas.";
        break;
    case "1.5":
        echo "Intermediário entre: A inteligência é normal e razoavelmente consistente em várias áreas / Funcionamento intelecual levemente anormal.";
        break;
    case "2":
        echo "Funcionamento intelecual levemente anormal.";
        break;
    case "2.5":
        echo "Intermediário entre: Funcionamento intelecual levemente anormal / Funcionamento intelectual moderadamente anormal.";
        break;
    case "3":
        echo "Funcionamento intelectual moderadamente anormal.";
        break;
    case "3.5":
        echo "Intermediário entre: Funcionamento intelectual moderadamente anormal / Funcionamento intelectual gravemente anormal.";
        break;
    case "4":
        echo "Funcionamento intelectual gravemente anormal.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Impressões Gerais:</dt>
	<dd>
	<?php
switch ($car['q15']) {
    case "1":
        echo "Sem autismo.";
        break;
    case "1.5":
        echo "Intermediário entre: Sem autismo / Autismo leve.";
        break;
    case "2":
        echo "Autismo leve.";
        break;
    case "2.5":
        echo "Intermediário entre: Autismo leve / Autismo moderado.";
        break;
    case "3":
        echo "Autismo moderado.";
        break;
    case "3.5":
        echo "Intermediário entre: Autismo moderado / Autismo grave.";
        break;
    case "4":
        echo "Autismo grave.";
        break;                  
}
?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Resultado do CARS:</dt>
	<dd><?php echo $car['resultado']; ?></dd>
</dl>	

<dl class="dl-horizontal">
	<dt>Tipo de Autismo:</dt>
	<dd><?php
if ($car['resultado'] >= 15 and $car['resultado'] <= 29.5) {
    echo "Sem Autismo";
} elseif ($car['resultado'] >= 30 and $car['resultado'] <= 36.5) {
    echo "Autismo Leve";
} else {
    echo "Autismo Moderado/Severo";
}
?></dd>
</dl>



<div id="actions" class="row">
	<div class="col-md-12">		
			<dt>Editar as Respostas:</dt>
	  <a href="edit.php?id=<?php echo $car['id']; ?>" class="btn btn-primary">Editar</a>	  
	</div>
</div>

</br>

<div id="actions" class="row">
	<div class="col-md-12">
		<dt>Ver Todas as Respostas:</dt>
	    <a href="view.php?id=<?php echo $car['id']; ?>" class="btn btn-sm btn-success">Voltar para Página de Resultados</a>
	    <a href="index.php?id=<?php echo $car['id']; ?>" class="btn btn-sm btn-success">Voltar para Página de Avaliações</a>
	  
	</div>
</div>




<?php include(FOOTER_TEMPLATE); ?>
