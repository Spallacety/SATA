<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Instituição: <?php echo $instituicao['descricao']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	
	<dt>Matrícula:</dt>
	<dd><?php echo $instituicao['id']; ?></dd>
	
	<dt>CNPJ:</dt>
	<dd><?php echo $instituicao['cnpj']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $instituicao['telefone']; ?></dd>
	
	<dt>Responsável:</dt>
	<dd><?php echo $instituicao['responsavel']; ?></dd>
	
</dl>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $instituicao['endereco']; ?></dd>

	<dt>Bairro:</dt>
	<dd><?php echo $instituicao['bairro']; ?></dd>
	
	<dt>Cep:</dt>
	<dd><?php echo $instituicao['cep']; ?></dd>
	
	<dt>Município:</dt>
	<dd><?php echo $instituicao['cidade']; ?></dd>
	
	<dt>Estado:</dt>
	<dd><?php echo $instituicao['estado']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $instituicao['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
