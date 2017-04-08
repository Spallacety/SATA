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
  Materialize.updateTextFields();
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
  if ($("input[name=q1]:checked").length > 0){
    document.getElementById('q2div').style.display = 'block';
    document.getElementById('q1div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars2to3(){
  if ($("input[name=q2]:checked").length > 0){
    document.getElementById('q3div').style.display = 'block';
    document.getElementById('q2div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars3to4(){
  if ($("input[name=q3]:checked").length > 0){
    document.getElementById('q4div').style.display = 'block';
    document.getElementById('q3div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars4to5(){
  if ($("input[name=q4]:checked").length > 0){
    document.getElementById('q5div').style.display = 'block';
    document.getElementById('q4div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars5to6(){
  if ($("input[name=q5]:checked").length > 0){
    document.getElementById('q6div').style.display = 'block';
    document.getElementById('q5div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars6to7(){
  if ($("input[name=q6]:checked").length > 0){
    document.getElementById('q7div').style.display = 'block';
    document.getElementById('q6div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars7to8(){
  if ($("input[name=q7]:checked").length > 0){
    document.getElementById('q8div').style.display = 'block';
    document.getElementById('q7div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars8to9(){
  if ($("input[name=q8]:checked").length > 0){
    document.getElementById('q9div').style.display = 'block';
    document.getElementById('q8div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars9to10(){
  if ($("input[name=q9]:checked").length > 0){
    document.getElementById('q10div').style.display = 'block';
    document.getElementById('q9div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars10to11(){
  if ($("input[name=q10]:checked").length > 0){
    document.getElementById('q11div').style.display = 'block';
    document.getElementById('q10div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars11to12(){
  if ($("input[name=q11]:checked").length > 0){
    document.getElementById('q12div').style.display = 'block';
    document.getElementById('q11div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars12to13(){
  if ($("input[name=q12]:checked").length > 0){
    document.getElementById('q13div').style.display = 'block';
    document.getElementById('q12div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars13to14(){
  if ($("input[name=q13]:checked").length > 0){
    document.getElementById('q14div').style.display = 'block';
    document.getElementById('q13div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars14to15(){
  if ($("input[name=q14]:checked").length > 0){
    document.getElementById('q15div').style.display = 'block';
    document.getElementById('q14div').style.display = 'none';
  }
  else{
    $('#modal-cars').modal('open');
  }
}

function cars2to1(){
  document.getElementById('q1div').style.display = 'block';
  document.getElementById('q2div').style.display = 'none';
}

function cars3to2(){
  document.getElementById('q2div').style.display = 'block';
  document.getElementById('q3div').style.display = 'none';
}

function cars4to3(){
  document.getElementById('q3div').style.display = 'block';
  document.getElementById('q4div').style.display = 'none';
}

function cars5to4(){
  document.getElementById('q4div').style.display = 'block';
  document.getElementById('q5div').style.display = 'none';
}

function cars6to5(){
  document.getElementById('q5div').style.display = 'block';
  document.getElementById('q6div').style.display = 'none';
}

function cars7to6(){
  document.getElementById('q6div').style.display = 'block';
  document.getElementById('q7div').style.display = 'none';
}

function cars8to7(){
  document.getElementById('q7div').style.display = 'block';
  document.getElementById('q8div').style.display = 'none';
}

function cars9to8(){
  document.getElementById('q8div').style.display = 'block';
  document.getElementById('q9div').style.display = 'none';
}

function cars10to9(){
  document.getElementById('q9div').style.display = 'block';
  document.getElementById('q10div').style.display = 'none';
}

function cars11to10(){
  document.getElementById('q10div').style.display = 'block';
  document.getElementById('q11div').style.display = 'none';
}

function cars12to11(){
  document.getElementById('q11div').style.display = 'block';
  document.getElementById('q12div').style.display = 'none';
}

function cars13to12(){
  document.getElementById('q12div').style.display = 'block';
  document.getElementById('q13div').style.display = 'none';
}

function cars14to13(){
  document.getElementById('q13div').style.display = 'block';
  document.getElementById('q14div').style.display = 'none';
}

function cars15to14(){
  document.getElementById('q14div').style.display = 'block';
  document.getElementById('q15div').style.display = 'none';
}