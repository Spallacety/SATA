<?php 
  require_once('functions.php'); 
  edit();
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

<h2>Atualizar Profissional</h2>

<form action="edit.php?id=<?php echo $profissional['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-6">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="profissional['nome']" value="<?php echo $profissional['nome']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">CPF</label>
      <input type="text" onkeypress="mascara(this,cpf)" maxlength="14" class="form-control" name="profissional['cpf']" value="<?php echo $profissional['cpf']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Tel. Residencial</label>
      <input type="text" onkeypress="mascara(this,telefone)" maxlength="14" class="form-control" name="profissional['telefone']" value="<?php echo $profissional['telefone']; ?>">
    </div>

   <div class="form-group col-md-2">
      <label for="campo2">Tel. Celular</label>
      <input type="text" onkeypress="mascara(this,celular)" maxlength="15" class="form-control" name="profissional['celular']" value="<?php echo $profissional['celular']; ?>">
    </div>
    
  </div>
  <div class="row">

<div class="form-group col-md-6">
      <label for="campo3">Profissão</label>
      <input type="text" class="form-control" name="profissional['profissao']" value="<?php echo $profissional['profissao']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="campo1">Instituição</label>
      <input type="text" class="form-control" name="profissional['instituicao']" value="<?php echo $profissional['instituicao']; ?>">
    </div>    
  </div>
  

  <div class="row">

<div class="form-group col-md-4">
      <label for="campo3">Usuário no Sada</label>
      <input type="text" class="form-control" name="profissional['usuario']" value="<?php echo $profissional['usuario']; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="campo1">Senha</label>
      <input type="password" class="form-control" name="profissional['senha']" value="<?php echo $profissional['senha']; ?>">
    </div>    
  </div>

  
  <div class="row">
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
