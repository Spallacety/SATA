<?php
  require_once('functions.php');
  myList($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text">Minhas avaliações</h4>
<hr>

<table class="highlight">
	<thead>
		<tr>
			<th>Data</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($minhasavaliacoes) : ?>
		<?php foreach ($minhasavaliacoes as $avaliacao) : ?>
		<tr>
			<td>
        <?php echo $avaliacao['modificacao']; ?>
   		</td>
      <td class="row vallign right-align">
        <div class="btn-group-h">
          <a href="details.php?id=<?php echo $avaliacao['id']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ver informações"><i class="material-icons green-text">visibility</i></a>
          <?php $today = date_create('now', new DateTimeZone('America/Sao_Paulo')); ?>
          <?php if ($avaliacao['modificacao'] == $today->format("Y-m-d") and $avaliacao['id_profissional'] == $_COOKIE['id_profissional']) : ?>
            <a href="edit.php?id=<?php echo $avaliacao['id']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons orange-text">mode_edit</i></a>
            <a href="#!" onClick="abrirModalApagarCARS(<?php echo $avaliacao['id']; ?>);" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Apagar"><i class="material-icons red-text">delete</i></a>
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