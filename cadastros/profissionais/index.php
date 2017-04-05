<?php
    require_once('functions.php');
    index();
?>

<?php include('modal.php'); ?>

<?php include(HEADER_TEMPLATE); ?>

<div class="row valign-wrapper">
	<div class="col s12 m6 valign left-align">
		<h4 class="main-text">Profissionais</h4>
	</div>
	<div class="col s12 m6 valign right-align">
    <div class="row right">
    	<br>
		<a href="add.php" class="btn-floating white-text blue waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Novo profissional"><i class="material-icons">add</i></a>
		<a href="index.php" class="btn-floating white-text blue waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Atualizar"><i class="material-icons">refresh</i></a>
  	</div>
	</div>
</div>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<table class="highlight">
	<thead>
		<tr>
			<th width="5%">ID</th>
			<th width="60%">Profissão</th>
			<th width="40%" class"right-align"></th>
		</tr>
	</thead>
	<tbody>
		<?php if ($profissionais) : ?>
		<?php foreach ($profissionais as $profissional) : ?>
		<tr>
			<td><?php echo $profissional['id']; ?></td>
			<td><?php echo $profissional['nome']; ?></td>		
   		<td><?php echo $profissional['profissao']; ?></td>
			<td class="row vallign right-align">
				<div class="btn-group-h">
					<a href="view.php?id=<?php echo $profissional['id']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Visualizar"><i class="material-icons green-text">visibility</i></a>
					<a href="edit.php?id=<?php echo $profissional['id']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons orange-text">mode_edit</i></a>
					<a href="#!" onClick="abrirModalApagarProfissional(<?php echo $profissional['id']; ?>, '<?php echo $profissional['nome']; ?>');" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Apagar"><i class="material-icons red-text">delete</i></a>
				</div>
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
