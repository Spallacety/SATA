<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<div class="row center">
  <h4 class="main-text center">Sistema de Acompanhamento ao Diagnóstico de Autismo</h4>
  <hr>
</div>
<div id="form">
  <form action="home.php" method="post">
    <div class="row center">
      <div class="col s2 m3 l4"></div>
      <div class="col s8 m6 l4">
        <div class="input-field">
          <input id="usuario" name="usuario" type="text">
          <label for="usuario">Usuário</label>
        </div>
        <div class="input-field">
          <input id="senha" name="senha" type="password">
          <label for="senha">Senha</label>
        </div>
      </div>
      <div class="col s2 m3 l4"></div>
    </div>
    <br>
    <div class="row center">
      <input id="login-button" class="btn waves-effect waves-light main-color" type="submit" value="Acessar"></input>
    </div>
    <br>
  </form>
</div>

<?php include(FOOTER_TEMPLATE); ?>
