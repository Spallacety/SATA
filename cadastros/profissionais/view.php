<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Profissional: <?php echo $profissional['nome']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Matrícula:</dt>
	<dd><?php echo $profissional['id']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $profissional['cpf']; ?></dd>

	<dt>Tel. Residencial:</dt>
	<dd><?php echo $profissional['telefone']; ?></dd>
	
	<dt>Tel. Celular:</dt>
	<dd><?php echo $profissional['celular']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Profissão:</dt>
	<dd><?php echo $profissional['id_profissao']; ?></dd>

	<dt>Instituição:</dt>
	<dd><?php echo $profissional['id_instituicao']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Data de Cadastro:</dt>
	<dd><?php echo $profissional['criacao']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Usuário no Sada:</dt>
	<dd><?php echo $profissional['usuario']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $profissional['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
