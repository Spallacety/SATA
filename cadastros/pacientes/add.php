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

function nascimento(v){
    v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
    v=v.replace(/(\d{2})(\d)/,"$1-$2")    //Coloca um hífen depois do bloco de quatro dígitos
    v=v.replace(/(\d{2})(\d)/,"$1-$2")    //Coloca um hífen depois do bloco de quatro dígitos
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

function cep(v){
    v=v.replace(/D/g,"")                //Remove tudo o que não é dígito
    v=v.replace(/^(\d{5})(\d)/,"$1-$2") //Esse é tão fácil que não merece explicações
    return v
}

</script>



<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Paciente</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" placeholder="Nome do Paciente" class="form-control" name="paciente['nome']" required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" onkeypress="mascara(this,cpf)"placeholder="000.000.000-00" maxlength="14" class="form-control" name="paciente['cpf']" required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Sexo</label>
      <br/>
            <select class="form-control" name="paciente['sexo']" >
				<option value="M">Masculino</option>
				<option value="F">Feminino</option>
			</select>
      
    </div>
  </div>
  
  <div class="row">
	  <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" onkeypress="mascara(this,nascimento)" maxlength="10" placeholder="DD-MM-AAAA" class="form-control" name="paciente['nascimento']" required>
    </div>
	  
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" placeholder="Endereço do Paciente" class="form-control" name="paciente['endereco']" required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" placeholder="Nome do Bairro" class="form-control" name="paciente['bairro']" required>
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" onkeypress="mascara(this,cep)" maxlength="9" placeholder="00000-000" class="form-control" name="paciente['cep']" required>
    </div>
       
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Município</label>
      <input type="text" placeholder="Município do Paciente" class="form-control" name="paciente['cidade']" required>
    </div>
    
    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" placeholder="UF" class="form-control" name="paciente['estado']" required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Tel. Residencial</label>
      <input type="text" onkeypress="mascara(this,telefone)" maxlength="14" placeholder="(00)0000-0000" class="form-control" name="paciente['telefone']">
    </div>
    
    <div class="form-group col-md-3">
      <label for="campo3">Tel. Celular</label>
      <input type="text" onkeypress="mascara(this,celular)" maxlength="15" placeholder="(00)00000-0000" class="form-control" name="paciente['celular']">
    </div>       
  </div>
    
<div class="row">

    <div class="form-group col-md-7">
      <label for="campo3">Responsável</label>
      <input type="text" placeholder="Responsável pelo Paciente" class="form-control" name="paciente['responsavel']" required>
    </div>
    
    <div class="form-group col-md-3">
      <label for="campo3">Tel. Celular Resp.</label>
      <input type="text" onkeypress="mascara(this,celular)" maxlength="15" placeholder="(00)00000-0000" class="form-control" name="paciente['celresp']" required>
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
