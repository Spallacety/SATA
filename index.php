<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h2>Sistema de Acompanhamento ao Diagnóstico de Autismo</h2>
<hr/>
<div id="form">
  <form action="home.php" method="post">
    <div class="row row-center">
      <div class="col-md-4 col-center">
      <label for = "usuario">Usuário:</label>
      <input class="form-control" type = "text" name = "usuario" required />
      </div>
      </br>
      <div class="col-md-4 col-center">
      <label for = "senha">Senha:</label>
      <input class="form-control" type = "password" name = "senha" required />
      </div>
    </div>
    </br>
    <div class="row row-center">
      <input type = "submit" class="btn btn-primary" name = "submit_button" value = "Acessar" />
    </div>
    </div>
  </form>
</div>

<?php include(FOOTER_TEMPLATE); ?>
