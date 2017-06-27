<?php
  require_once('functions.php');
  otherList($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h4 class="main-text">Avaliações de outros profissionais</h4>
<hr>

<table class="highlight">
	<thead>
		<tr>
			<th>Data</th>
      <th>Profissional</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($outrasavaliacoes) : ?>
		<?php foreach ($outrasavaliacoes as $avaliacao) : ?>
		<tr>
			<td>
        <?php echo date("d/m/Y", strtotime($avaliacao['modificacao'])); ?>
   		</td>
      <td>
        <?php echo find('profissionais', $avaliacao['id_profissional'])['nome']; ?>
      </td>
      <td class="row vallign right-align">
        <div class="btn-group-h">
          <a href="details.php?id=<?php echo $avaliacao['id']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ver informações"><i class="material-icons green-text">visibility</i></a>
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