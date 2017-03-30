<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1>Sistema de Apoio ao Diagnóstico de Autismo</h1>
<hr />

<?php if ($db) : ?>

<div class="row">

Sistema de Apoio ao Diagnósticos de Autismo desenvolvido no LIMS
</br></br>
Desenvolvido por:
</br></br>
Fernando Castelo Branco Gonçalves Santana (Professor Responsável)</br>
Guilherme</br>
Emanuel</br>
Iara</br>
Luana</br>

</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>
