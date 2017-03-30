<?php 
  require_once('functions.php'); 
  add();
?>

<script>

function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}

function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}

function leech(v){
    v=v.replace(/o/gi,"0")
    v=v.replace(/i/gi,"1")
    v=v.replace(/z/gi,"2")
    v=v.replace(/e/gi,"3")
    v=v.replace(/a/gi,"4")
    v=v.replace(/s/gi,"5")
    v=v.replace(/t/gi,"7")
    return v
}

function soNumeros(v){
    return v.replace(/\D/g,"")
}

function telefone(v){
    v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
    v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")    //Coloca hífen entre o quarto e o quinto dígitos
    return v
}

function cep(v){
    v=v.replace(/D/g,"")                //Remove tudo o que não é dígito
    v=v.replace(/^(\d{5})(\d)/,"$1-$2") //Esse é tão fácil que não merece explicações
    return v
}

function cnpj(v){
    v=v.replace(/\D/g,"")                           //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/,"$1.$2")             //Coloca ponto entre o segundo e o terceiro dígitos
    v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
    v=v.replace(/\.(\d{3})(\d)/,".$1/$2")           //Coloca uma barra entre o oitavo e o nono dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")              //Coloca um hífen depois do bloco de quatro dígitos
    return v
}

</script>

<?php include(HEADER_TEMPLATE); ?>

<h2>Nova Instituição</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-8">
      <label for="name">Descrição</label>
      <input type="text" placeholder="Descrição da Instituição" class="form-control" name="instituicao['descricao']" required>
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">CNPJ</label>
      <input type="text" onkeypress="mascara(this,cnpj)" maxlength="18" placeholder="00.000.000/0000-00" class="form-control" name="instituicao['cnpj']" required>
    </div>    
  </div>
  
  <div class="row">
    <div class="form-group col-md-6">
      <label for="campo1">Endereço</label>
      <input type="text" placeholder="Endereço da Instituição" class="form-control" name="instituicao['endereco']" required>
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Bairro</label>
      <input type="text" placeholder="Nome da Instituição" class="form-control" name="instituicao['bairro']" required>
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" onkeypress="mascara(this,cep)" maxlength="9" placeholder="00000-000" class="form-control" name="instituicao['cep']" required>
    </div>
       
  </div>
  
  <div class="row">
    <div class="form-group col-md-4">
      <label for="campo1">Município</label>
      <input type="text" placeholder="Município da Instituição" class="form-control" name="instituicao['cidade']" required>
    </div>
    
    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" placeholder="UF" class="form-control" name="instituicao['estado']" required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Telefone</label>
      <input type="text" onkeypress="mascara(this,telefone)" maxlength="14" placeholder="(00)0000-0000" class="form-control" name="instituicao['telefone']" required>
    </div>
    
     <div class="form-group col-md-4">
      <label for="campo3">Responsável</label>
      <input type="text" placeholder="Responsável pela Instituição" class="form-control" name="instituicao['responsavel']" required>
    </div>        
  </div>
    
<div class="row">

   
</div>
    
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
