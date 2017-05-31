<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<div class="row valign-wrapper">
	<div class="col s12 m6 valign left-align">
		<h4 class="main-text">Avaliações CARS</h4>
	</div>
	<div class="col s12 m6 valign right-align">
    <div class="row right">
    	<br>
		<a href="index.php" class="btn-floating white-text blue waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Atualizar"><i class="material-icons">refresh</i></a>
  	</div>
	</div>
</div>
<hr>

<table class="highlight">
	<thead>
		<tr>
			<th width="40%">Paciente</th>
			<th width="40%">Profissional</th>
      <th width="15%">Data</th>
			<th width="5%" class"right-align"></th>
		</tr>
	</thead>
	<tbody>
		<?php if ($resultados) : ?>
		<?php foreach ($resultados as $resultado) : ?>
		<tr>
			<td> 
        <?php $paciente = find('pacientes', $resultado['id_paciente']);?>
        <?php echo $paciente['nome']; ?>
      </td>
   		<td>
   			<?php $profissional = find('profissionais', $resultado['id_profissional']);?>
   			<?php echo $profissional['nome']; ?>
   		</td>
      <td><?php echo $resultado['modificacao']; ?></td>
			<td class="row vallign right-align">
				<div class="btn-group-h">
          <a href="view.php?id=<?php echo $resultado['id']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Visualizar"><i class="material-icons green-text">visibility</i></a>
          <?php $today = date_create('now', new DateTimeZone('America/Sao_Paulo')); ?>
          <?php if ($resultado['modificacao'] == $today->format("Y-m-d")) : ?>
            <a href="edit.php?id=<?php echo $resultado['id']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons orange-text">mode_edit</i></a>
            <a href="#!" onClick="abrirModalApagarCARS(<?php echo $resultado['id']; ?>);" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Apagar"><i class="material-icons red-text">delete</i></a>
          <?php endif; ?>
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