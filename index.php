<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1>Sistema de Acompanhamento ao Diagnóstico de Autismo</h1>
<hr/>
<div id = "form" >
  <form action = "home.php" method = "post">
    <div class="row" >        
    <div class="col-md-4">
    <label for = "usuario">Usuário:</label>
    <input class="form-control" type = "text" name = "usuario" required />
    </div>
    </div>
    </br>
    <div class="row">        
    <div class="col-md-4">
    <label for = "senha">Senha:</label>
    <input class="form-control" type = "password" name = "senha" required />
    </div>
    </div>
    </br>
    <input type = "submit" class="btn btn-primary" name = "submit_button" value = "Acessar" />
    </div>
  </form>
</div>
<?php include(FOOTER_TEMPLATE); ?>
