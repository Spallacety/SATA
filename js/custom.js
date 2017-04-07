$( window ).on( "load", function() {
  $('.tooltipped').tooltip({delay: 50});
  $(".dropdown-button").dropdown({
    inDuration: 300,
    outDuration: 225,
    constrainWidth: false,
    hover: false,
    gutter: 0,
    belowOrigin: true,
    alignment: 'left',
    stopPropagation: false
  });
});

$(document).ready(function() {
  $('.modal').modal({
    dismissible: false
  });
  $('select').material_select();
  $(".button-collapse").sideNav();
  $('.data').mask('00/00/0000');
  $('.cep').mask('00000-000');
  $('.telefone').mask('(00) 0000-0000');
  $('.celular').mask('(00) 00000-0000');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00');
});

function abrirModalSobre(){
  $('#modal-sobre').modal('open');
}

function abrirModalApagarInstituicao(idItem, nomeItem){
  document.getElementById("itemApagar").innerHTML = nomeItem;
  document.getElementById("deleteBtn").href="delete.php?id="+idItem; 
  $('#modal-apagar-instituicao').modal('open');
}

function abrirModalApagarPaciente(idItem, nomeItem){
  document.getElementById("itemApagar").innerHTML = nomeItem;
  document.getElementById("deleteBtn").href="delete.php?id="+idItem; 
  $('#modal-apagar-paciente').modal('open');
}

function abrirModalApagarProfissao(idItem, nomeItem){
  document.getElementById("itemApagar").innerHTML = nomeItem;
  document.getElementById("deleteBtn").href="delete.php?id="+idItem; 
  $('#modal-apagar-profissao').modal('open');
}

function abrirModalApagarProfissional(idItem, nomeItem){
  document.getElementById("itemApagar").innerHTML = nomeItem;
  document.getElementById("deleteBtn").href="delete.php?id="+idItem; 
  $('#modal-apagar-profissional').modal('open');
}

/* Antigo meio de passar dados para o modal do bootstrap

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
 */

function cars1to2(){
  if ($('input[name=q1]:checked').length > 0){
    document.getElementById('q2div').style.display = 'block';
    document.getElementById('q1div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars2to1(){
  document.getElementById('q1div').style.display = 'block';
  document.getElementById('q2div').style.display = 'none';
}