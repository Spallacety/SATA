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

function abrirModalApagarInstituicao(idItem, descricaoItem){
  document.getElementById("itemApagar").innerHTML = descricaoItem;
  document.getElementById("deleteBtn").href="delete.php?id="+idItem; 
  $('#modal-apagar-instituicao').modal('open');
}