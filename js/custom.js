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

function abrirModalApagarInstituicao(idItem, descricaoItem){
  document.getElementById("itemApagar").innerHTML = descricaoItem;
  document.getElementById("deleteBtn").href="delete.php?id="+idItem; 
  $('#modal-apagar-instituicao').modal('open');
}

function abrirModalApagarPaciente(idItem, nomeItem){
  document.getElementById("itemApagar").innerHTML = nomeItem;
  document.getElementById("deleteBtn").href="delete.php?id="+idItem; 
  $('#modal-apagar-paciente').modal('open');
}