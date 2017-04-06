<?php
    require_once('functions.php');
    index();
?>

<?php include('modal.php'); ?>


<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Avaliações com CARS</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Nova Avaliação</a>
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
		<th>Número</th>
		<th width="30%">Paciente</th>		
		<th width="25%">Profissional</th>
		<th width="15%">Data da Avaliação</th>
		<th width="22,5%">Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($cars) : ?>
<?php foreach ($cars as $car) : ?>
	<tr>
		<td><?php echo $car['id']; ?></td>
		<td><?php echo $car['paciente']; ?></td>
		<td><?php echo $car['profissional']; ?></td>
		<td><?php echo $car['criacao']; ?></td>	
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $car['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $car['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal-profissao" data-profissao="<?php echo $car['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
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
