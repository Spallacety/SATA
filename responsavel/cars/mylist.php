<?php
  require_once('functions.php');
  myList();
?>

<?php include(HEADER_TEMPLATE); ?>

<div class="row valign-wrapper">
  <div class="col s12 m6 valign left-align">
    <h4 class="main-text">Minhas avaliações</h4>
  </div>
  <div class="col s12 m6 valign right-align">
    <div class="row right">
      <br>
      <a href="add.php" class="btn-floating white-text blue waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Nova avaliação"><i class="material-icons">add</i></a>
    </div>
  </div>
</div>
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
        <?php echo date("d/m/Y", strtotime($avaliacao['modificacao'])); ?>
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

<div class="row center">
  <br>
  <a href="/responsavel/cars/" class="btn main-color white-text btn-default">Voltar</a>
</div>

<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>