<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<div class="row valign-wrapper">
	<div class="col s12 m6 valign left-align">
		<h4 class="main-text">Avaliações CARS</h4>
	</div>
</div>
<hr>

<table class="highlight">
	<thead>
		<tr>
			<th width="40%">Paciente</th>
			<th width="40%">Profissional</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($resultados) : ?>
		<?php foreach ($resultados as $resultado) : ?>
		<tr>
			<td> 
        <?php echo $resultado['nome']; ?>
      </td>
   		<td>
   			<?php $profissional = find('profissionais', $_COOKIE['id_profissional']);?>
   			<?php echo $profissional['nome']; ?>
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