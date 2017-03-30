<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Paciente: <?php echo $relatorio['paciente']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Número do Relatório:</dt>
	<dd><?php echo $relatorio['id']; ?></dd>
</dl>
<dl class="dl-horizontal">
	<dt>Profissional:</dt>
	<dd><?php echo $relatorio['profissional']; ?></dd>
</dl>
<dl class="dl-horizontal">
	<dt>Relatos do Resp.:</dt>
	<dd><?php echo $relatorio['relatados']; ?></dd>
</dl>	
<dl class="dl-horizontal">
	<dt>Observações:</dt>
	<dd><?php echo $relatorio['observados']; ?></dd>
</dl>
<dl class="dl-horizontal">
	<dt>Conclusões:</dt>
	<dd><?php echo $relatorio['observacoes']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Realização da Aval.:</dt>
	<dd><?php echo $relatorio['criacao']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Tipo de Autismo:</dt>
	<dd>
		<?php 
		switch ($relatorio['tipoautismo'])
		{
			case 1;
			echo "Sem Autismo";
			break;			
			case 2;
			echo "Autismo Leve";			
			break;
			case 3;
			echo "Autismo Moderado/Severo";
			break;			
		}			
		 ?>		
	</dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $paciente['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
