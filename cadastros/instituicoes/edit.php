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

<h4 class="main-text center">Editar Instituição</h2>
<hr>

<form action="edit.php?id=<?php echo $instituicao['id']; ?>" method="post">
  <div class="row">
    <div class="col s12 m8 l8">
      <div class="input-field">
        <input type="text" id="descricao" name="instituicao['descricao']" value="<?php echo $instituicao['descricao']; ?>" required>
        <label for="descricao">Descrição</label>
      </div>
    </div>

    <div class="col s12 m4 l4">
      <div class="input-field">
        <input type="text" class="cnpj" maxlength="18" id="cnpj" name="instituicao['cnpj']" value="<?php echo $instituicao['cnpj']; ?>" required>
        <label for="cnpj">CNPJ</label>
      </div>
    </div>    
  </div>
  
  <div class="row">
    <div class="col s12 m6 l6">
      <div class="input-field">
        <input type="text" id="endereco" name="instituicao['endereco']" value="<?php echo $instituicao['endereco']; ?>" required>
        <label for="endereco">Endereço</label>
      </div>
    </div>

    <div class="col s12 m4 l4">
      <div class="input-field">
        <input type="text" id="bairro" name="instituicao['bairro']" value="<?php echo $instituicao['bairro']; ?>" required>
        <label for="bairro">Bairro</label>
      </div>
    </div>
    
    <div class="col s12 m2 l2">
      <div class="input-field">
        <input type="text" class="cep" maxlength="9" id="cep" name="instituicao['cep']" value="<?php echo $instituicao['cep']; ?>" required>
        <label for="cep">CEP</label>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col s12 m4 l4">
      <div class="input-field">
        <input type="text" id="cidade" name="instituicao['cidade']" value="<?php echo $instituicao['cidade']; ?>" required>
        <label for="cidade">Cidade</label>
      </div>
    </div>
    
    <div class="col s3 m1 l1">
      <div class="input-field">
        <input type="text" id="uf" maxlength="2" name="instituicao['estado']" value="<?php echo $instituicao['estado']; ?>" required>
        <label for="uf">UF</label>
      </div>
    </div>

    <div class="col s9 m3 l3">
      <div class="input-field">
        <input type="text" class="telefone" maxlength="14" id="telefone" name="instituicao['telefone']" value="<?php echo $instituicao['telefone']; ?>" required>
        <label for="telefone">Telefone</label>
      </div>
    </div>
    
     <div class="col s12 m4 l4">
      <div class="input-field">
        <input type="text" id="responsavel" name="instituicao['responsavel']" value="<?php echo $instituicao['responsavel']; ?>" required>
        <label for="responsavel">Responsável</label>
      </div>
    </div>        
  </div>
    
  <div class="container">
    <div class="row center">
      <br>
      <button type="submit" class="btn green white-text btn-primary">Salvar</button>
      <a href="index.php" class="btn red white-text btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
