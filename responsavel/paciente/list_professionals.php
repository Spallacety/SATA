<?php
  require_once('functions.php');
  list_professionals();
?>

<?php include(HEADER_TEMPLATE); ?>

<div class="row valign-wrapper">
  <div class="col s12 m6 valign left-align">
    <h4 class="main-text">Profissionais relacionados</h4>
  </div>
  <div class="col s12 m6 valign right-align">
    <div class="row right">
      <br>
      <a href="add.php" class="btn-floating white-text blue waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Adicionar profissional relacionado"><i class="material-icons">add</i></a>
    </div>
  </div>
</div>
<hr>

<table class="highlight">
  <thead>
    <tr>
      <th width="45%">Nome</th>
      <th width="15%">Profissão</th>
      <th width="40%" class="right-align"></th>
    </tr>
  </thead>
	<tbody>
		<?php if ($profissionais) : ?>
		<?php foreach ($profissionais as $profissional) : ?>
    <tr>
      <td><?php echo $profissional['nome']; ?></td>   
      <td><?php echo find('profissoes', $profissional['id_profissao'])['descricao']; ?></td>
      <td class="row vallign right-align">
        <div class="btn-group-h">
          <a href="view_professional.php?id=<?php echo $profissional['id_profissional']; ?>" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Informações do profissional"><i class="material-icons green-text">visibility</i></a>
          <a onClick="abrirModalDesvincularProfissional(<?php echo $profissional['id_profissional']; ?>, '<?php echo $profissional['nome']; ?>');" class="btn-flat img-btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Desvincular"><i class="material-icons red-text">remove</i></a>
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
  <a href="view.php?id=<?php echo $paciente['id']; ?>" class="btn main-color secondary-text white-text btn-default">Voltar</a>
</div>

<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>