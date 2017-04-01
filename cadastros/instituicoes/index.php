<?php
    require_once('functions.php');
    index();
?>

<?php include('modal.php'); ?>


<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Instituições</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Nova Instituição</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>Matrícula</th>
		<th width="70%">Descrição</th>				
		<th width="22,5%">Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($instituicoes) : ?>
<?php foreach ($instituicoes as $instituicao) : ?>
	<tr>
		<td><?php echo $instituicao['id']; ?></td>
		<td><?php echo $instituicao['descricao']; ?></td>		
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $instituicao['id']; ?>" class="btn-flat green-text"><i class="material-icons right">visibility</i></a>
			<a href="edit.php?id=<?php echo $instituicao['id']; ?>" class="btn-flat amber-text"><i class="material-icons right">mode_edit</i></a>
			<a href="#!" class="btn-flat red-text" data-toggle="modal" data-target="#delete-modal-instituicao" data-instituicao="<?php echo $instituicao['id']; ?>"><i class="material-icons right">delete</i></a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
