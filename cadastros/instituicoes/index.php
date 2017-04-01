<?php
    require_once('functions.php');
    index();
?>

<?php include('modal.php'); ?>


<?php include(HEADER_TEMPLATE); ?>

	<div class="row">
		<div class="col s12 m6">
			<h4 class="main-text">Instituições</h4>
		</div>
		<div class="col s12 m6">
	    <div class="row">    
				<a href="add.php" class="btn white-text blue waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Nova instituição"><i class="material-icons">add</i></a>
				<a href="index.php" class="btn white-text blue waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Atualizar"><i class="material-icons">refresh</i></a>
	  	</div>
  	</div>
	</div>

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
		<th width="5%">Matrícula</th>
		<th width="65%">Descrição</th>				
		<th width="30%">Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($instituicoes) : ?>
<?php foreach ($instituicoes as $instituicao) : ?>
	<tr>
		<td><?php echo $instituicao['id']; ?></td>
		<td><?php echo $instituicao['descricao']; ?></td>		
		<td class="row">
			<a href="view.php?id=<?php echo $instituicao['id']; ?>" class="btn-flat green-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Visualizar"><i class="material-icons">visibility</i></a>
			<a href="edit.php?id=<?php echo $instituicao['id']; ?>" class="btn-flat amber-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons">mode_edit</i></a>
			<a href="#!" class="btn-flat red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Apagar" data-toggle="modal" data-target="#delete-modal-instituicao" data-instituicao="<?php echo $instituicao['id']; ?>"><i class="material-icons">delete</i></a>
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
