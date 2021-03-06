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
			<th>Paciente</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($resultados) : ?>
		<?php foreach ($resultados as $paciente) : ?>
		<tr>
			<td> 
        <?php echo $paciente['nome']; ?>
      </td>
   		</td>
      <td class="row vallign right-align">
        <div class="btn-group-h">
          <a href="/avaliacao/cars/add.php?id=<?php echo $paciente['id']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Nova Avaliação"><i class="material-icons blue-text">add</i></a>
          <a href="view.php?id=<?php echo $paciente['id']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ver Relatórios"><i class="material-icons green-text">show_chart</i></a>
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