<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<div class="row row-center">
  <h4 class="main-text-color">Sistema de Acompanhamento ao Diagnóstico de Autismo</h4>
  <hr/>
</div>
<div id="form">
  <form action="home.php" method="post">
    <div class="row center">
      <div class="col s6 col-center">
        <div class="input-field">
          <input id="usuario" type="text">
          <label for="usuario">Usuário</label>
        </div>
        <br>
        <div class="input-field">
          <input id="senha" type="password">
          <label for="senha">Matrícula</label>
        </div>
      </div>
    </div>
    </br>
    <div class="row center">
      <input id="login-button" class="btn waves-effect waves-light main-color" type="submit" value="Acessar"></input>
    </div>
  </form>
</div>

<?php include(FOOTER_TEMPLATE); ?>
