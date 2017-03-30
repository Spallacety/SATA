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

function celular(v){
    v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
    v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d{5})(\d)/,"$1-$2")    //Coloca hífen entre o quarto e o quinto dígitos
    return v
}

function cpf(v){
    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                             //de novo (para o segundo bloco de números)
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
    return v
}

</script>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Profissional</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-6">
      <label for="name">Nome</label>
      <input type="text" placeholder="Nome do Profissional" class="form-control" name="profissional['nome']" required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">CPF</label>
      <input type="text" onkeypress="mascara(this,cpf)" maxlength="14" placeholder="000.000.000-00" class="form-control" name="profissional['cpf']" required>
    </div>
	<div class="form-group col-md-2">
      <label for="campo2">Tel. Residencial</label>
      <input type="text" onkeypress="mascara(this,telefone)" maxlength="14" placeholder="(00)0000-0000" class="form-control" name="profissional['telefone']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">Tel. Celular</label>
      <input type="text" onkeypress="mascara(this,celular)" maxlength="15" placeholder="(00)00000-0000" class="form-control" name="profissional['celular']">
    </div>
  </div>
  
  <div class="row">	  
	  
    <div class="form-group col-md-6">
      <label for="campo1">Profissão</label>
      <input type="text" placeholder="Profissão do Profissional" class="form-control" name="profissional['profissao']" required>
    </div>

    <div class="form-group col-md-6">
      <label for="campo2">Instituição</label>
      <input type="text" placeholder="Instituição do Profissional" class="form-control" name="profissional['instituicao']" required>
    </div>       

  </div>
  
    <div class="row">
    <div class="form-group col-md-4">
      <label for="campo1">Usuário no SADA</label>
      <input type="text" placeholder="Usuário do Profissional no SADA" class="form-control" name="profissional['usuario']" required>
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Senha</label>
      <input type="password" placeholder="Senha do Profissional no SADA" class="form-control" name="profissional['senha']" required>
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
