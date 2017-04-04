<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

	<div class="row vallign">
		<div class="col s12 m6 left-align">
			<h4 class="main-text">Instituições</h4>
		</div>
		<div class="col s12 m6 right-align">
	    <div class="row right">
	    	<br>
				<a href="add.php" class="btn white-text blue waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Nova instituição"><i class="material-icons">add</i></a>
				<a href="index.php" class="btn white-text blue waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Atualizar"><i class="material-icons">refresh</i></a>
				<div class="col s12 center-align"><br><br>
			    <a href="someFooPage.html" class="btn blue buttonDelete" id="" data-id="87" data-firstname="Elizabeth" data-lastname='Hudgen'>delete 87</a>
			  </div>
	  	</div>
  	</div>
	</div>
<hr>

<table class="highlight">
<thead>
	<tr>
		<th width="10%">Matrícula</th>
		<th width="63%">Descrição</th>
		<th width="27%" class"right-align"></th>
	</tr>
</thead>
<tbody>
<?php if ($instituicoes) : ?>
<?php foreach ($instituicoes as $instituicao) : ?>
	<tr>
		<td><?php echo $instituicao['id']; ?></td>
		<td><?php echo $instituicao['descricao']; ?></td>		
		<td class="row vallign right-align">
			<a href="view.php?id=<?php echo $instituicao['id']; ?>" class="btn-flat green-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Visualizar"><i class="material-icons">visibility</i></a>
			<a href="edit.php?id=<?php echo $instituicao['id']; ?>" class="btn-flat amber-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons">mode_edit</i></a>
			<a href="#modal-apagar-instituicao<?php echo $instituicao['id']; ?>" class="btn-flat red-text tooltipped deleteButton" data-position="bottom" data-delay="50" data-tooltip="Apagar"><i class="material-icons">delete</i></a>
			<div id="modal-apagar-instituicao<?php echo $instituicao['id']; ?>" class="modal">
			  <div class="modal-content">
			    <h4>Excluir</h4>
			    <p> Deseja mesmo apagar <?php echo $instituicao['descricao']; ?>?</p>
			  </div>
			  <div class="modal-footer">
			    <a href="#!" class="modal-action modal-close btn-flat">Não</a>
			    <a href="delete.php?id=<?php echo $instituicao['id']; ?>" class="modal-action modal-close btn-flat">Sim</a>
			  </div>
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
