<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Paciente: <?php echo $paciente['nome']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Matrícula:</dt>
	<dd><?php echo $paciente['id']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $paciente['cpf']; ?></dd>
	
	<dt>Sexo:</dt>
	<dd>
		<?php
			switch ($paciente['sexo'])
		{
			case "M";
			echo "Masculino";
			break;			
			case "F";
			echo "Feminino";			
			break;			
		}	
	 ?></dd>

	<dt>Data de Nascimento:</dt>
	<dd><?php echo $paciente['nascimento']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $paciente['endereco']; ?></dd>

	<dt>Bairro:</dt>
	<dd><?php echo $paciente['bairro']; ?></dd>

	<dt>CEP:</dt>
	<dd><?php echo $paciente['cep']; ?></dd>

	<dt>Cidade:</dt>
	<dd><?php echo $paciente['cidade']; ?></dd>

        <dt>UF:</dt>
	<dd><?php echo $paciente['estado']; ?></dd>

	
</dl>

<dl class="dl-horizontal">
	
	<dt>Telefone Residencial:</dt>
	<dd><?php echo $paciente['telefone']; ?></dd>

	<dt>Telefone Celular:</dt>
	<dd><?php echo $paciente['celular']; ?></dd>	
</dl>

<dl class="dl-horizontal">
	
	<dt>Responsável:</dt>
	<dd><?php echo $paciente['responsavel']; ?></dd>

	<dt>Tel. Celular Resp.:</dt>
	<dd><?php echo $paciente['celresp']; ?></dd>

</dl>

<dl class="dl-horizontal">
	
	<dt>Data de Cadastro:</dt>
	<dd><?php echo $paciente['criacao']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $paciente['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
