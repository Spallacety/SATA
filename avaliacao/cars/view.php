<?php 
	require_once('functions.php');
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Questão');
    dados.addColumn('number', 'Média');
    dados.addColumn({type: 'string', role: 'tooltip'});
    dados.addRows(['Questão', '1', 'ao vivo']);

    var config = {
        title:'Média geral das avaliações',
        width:700,
        height:300,
        legend: "none",
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_geral'));

    chart.draw(dados, config);
  }
</script>

<h4 class="main-text center">Relatórios de <?php echo $paciente['nome'] ?></h2>
<hr>

<div class="row">
  <div class="col s12 m4 l4">
    <div class="input-field">
      <input disabled type="text" class="black-text" id="nome" value="<?php $paciente = find('pacientes', $resultado['id_paciente']); echo $paciente['nome']; ?>" required>
      <label for="nome" class="main-text">Paciente</label>
    </div>
  </div>

  <div class="col s12 m4 l4">
    <div class="input-field">
      <input disabled type="text" class="black-text" id="nome" value="<?php $profissional = find('profissionais', $resultado['id_profissional']); echo $profissional['nome']; ?>" required>
      <label for="nome" class="main-text">Profissional</label>
    </div>
  </div>

  <div class="col s12 m4 l4">
    <div class="input-field">
      <input disabled type="text" class="black-text" id="nome" value="<?php echo $resultado['modificacao']; ?>" required>
      <label for="nome" class="main-text">Data</label>
    </div>
  </div>

  <div class="row center" id="grafico_geral"></div>

</div>

<div class="container">
  <div class="row center">
    <br>
    <a href="index.php" class="btn blue white-text btn-default">Voltar</a>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
