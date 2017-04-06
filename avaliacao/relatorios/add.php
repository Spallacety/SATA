<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Nova Avaliação Descritiva</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-12">
      <label for="name">Paciente</label>
      <input type="text" placeholder="Paciente" class="form-control" name="relatorio['paciente']" required>
    </div>
    
      <div class="form-group col-md-12">
      <label for="name">Profissional</label>
      <input type="text" placeholder="Profissional" class="form-control" name="relatorio['profissional']" required>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-12">
      <label for="name">Relatos do Responsável</label>
      <textarea name="message" placeholder="Digite aqui os relatos do responsável durante a consulta" rows="6" class="form-control" name="relatorio['relatados']"></textarea>
    </div>
    
    <div class="form-group col-md-12">
      <label for="name">Observações do Profissional</label>
      <textarea name="message" placeholder="Digite aqui o que foi observado sobre o paciente em consultório" rows="6" class="form-control" name="relatorio['observados']"></textarea>
    </div>
    
    <div class="form-group col-md-12">
      <label for="name">Conclusões do Profissional</label>
      <textarea name="message" placeholder="Digite aqui as conclusões sobre a avaliação" rows="6" class="form-control" name="relatorio['observacoes']"></textarea>
    </div>
    
    <div class="form-group col-md-3">
    <label for="campo3">Tipo de Autismo</label>
      <br/>
            <select class="form-control" name="relatorio['tipoautismo']" >
				<option value="1">Sem Autismo</option>
				<option value="2">Autismo Leve</option>
				<option value="3">Autismo Moderado/Severo</option>
			</select>
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
