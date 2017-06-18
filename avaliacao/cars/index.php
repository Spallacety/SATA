<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text">Avaliações CARS</h4>
<hr>

<table class="highlight">
	<thead>
		<tr>
			<th width="40%">Paciente</th>
			<th width="40%">Profissional</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($oacientes) : ?>
		<?php foreach ($pacientes as $paciente) : ?>
		<tr>
			<td> 
        <?php echo $paciente['nome']; ?>
      </td>
   		<td>
   			<?php $profissional = find('profissionais', $_COOKIE['id_profissional']);?>
   			<?php echo $profissional['nome']; ?>
   		</td>
      <td class="row vallign right-align">
        <div class="btn-group-h">
          <a href="/avaliacao/cars/add.php?id=<?php echo $paciente['id']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Nova Avaliação"><i class="material-icons blue-text">add</i></a>
          <a href="view.php?id=<?php echo $paciente['id']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ver Relatórios"><i class="material-icons green-text">pie_chart</i></a>
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