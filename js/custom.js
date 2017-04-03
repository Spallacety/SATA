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
  $(".button-collapse").sideNav();
});

function abrirModalSobre(){
  $('#modal-sobre').modal('open');
}

function abrirModalApagarInstituicao(){
  var idItem = $(this).data('id');
  $("#itemApagar").value(idItem);
  $('#modal-apagar-instituicao').modal('open');
}

function apagar(id){
  <?php 
    require_once('functions.php'); 
    if (isset(id)){
      delete(id);
    } else {
      die("ERRO: ID não definido.");
    }
  ?>
}