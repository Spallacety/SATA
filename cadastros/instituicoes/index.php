<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

	<div class="row valign-wrapper">
		<div class="col s12 m6 valign left-align">
			<h4 class="main-text">Instituições</h4>
		</div>
		<div class="col s12 m6 valign right-align">
	    <div class="row right">
	    	<br>
				<a href="add.php" class="btn-floating white-text blue waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Nova instituição"><i class="material-icons">add</i></a>
				<a href="index.php" class="btn-floating white-text blue waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Atualizar"><i class="material-icons">refresh</i></a>
	  	</div>
  	</div>
	</div>
<hr>

<table class="highlight">
<thead>
	<tr>
		<th width="5%">Matrícula</th>
		<th width="45%">Descrição</th>
		<th width="50%" class"right-align"></th>
	</tr>
</thead>
<tbody>
<?php if ($instituicoes) : ?>
<?php foreach ($instituicoes as $instituicao) : ?>
	<tr>
		<td><?php echo $instituicao['id']; ?></td>
		<td><?php echo $instituicao['descricao']; ?></td>		
		<td class="row vallign right-align">
			<a href="view.php?id=<?php echo $instituicao['id']; ?>" class="btn-floating green-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Visualizar"><i class="material-icons">visibility</i></a>
			<a href="edit.php?id=<?php echo $instituicao['id']; ?>" class="btn-floating amber-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons">mode_edit</i></a>
			<a href="#!" onClick="abrirModalApagarInstituicao(<?php echo $instituicao['id']; ?>, '<?php echo $instituicao['descricao']; ?>');" class="btn-floating red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Apagar"><i class="material-icons">delete</i></a>
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
