/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-paciente').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('paciente');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Paciente #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

$('#delete-modal-profissional').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('profissional');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Profissional #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

$('#delete-modal-instituicao').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('instituicao');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Instituição #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})


$('#delete-modal-profissao').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('profissao');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Profissão #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
