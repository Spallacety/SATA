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
	<dt>Profissional:</dt>
	<dd><?php echo $car['profissional']; ?></dd>
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
		<dt>Ver Todas as Respostas:</dt>
	    <a href="view2.php?id=<?php echo $car['id']; ?>" class="btn btn-sm btn-success">Resultados</a>
	  
	</div>
</div>
</br>

<div id="actions" class="row">
	<div class="col-md-12">		
	  <a href="edit.php?id=<?php echo $car['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
