<?php
    require_once('functions.php');
    include("../../fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<br>

<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Total');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['resultado'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Ultimas 10 avaliações',
        width:100%,
        height:300,
        legend: { position: "none" },
        colors: ['#1a237e'],
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('area_grafico'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q1'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Relacionamento interpessoal (Questão 1/15)',
        width:100%,
        height:300,
        legend: { position: "none" },
        colors: ['#1a237e'],
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('area_grafico2'));

    chart.draw(dados, config);
  }
</script>

<div class="row center">
  <div class="col l6 m6 s12" id="area_grafico"></div>
  <div class="col l6 m6 s12" id="area_grafico2"></div>
</div>

<?php include(FOOTER_TEMPLATE); ?>