<?php
    require_once('functions.php');
    include("fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<br>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript">

      google.load('visualization', '1.0', {'packages':['corechart']});

      google.setOnLoadCallback(drawLastResults);

      function drawLastResults() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Gênero');
        data.addColumn('number', 'Quantidades');
        data.addRows([
          ['Masculino', 1],
          ['Feminino', 4]
        ]);

        var config = {
          'title':'Quantidade de alunos por gênero',
          'width':600,
          'height':400,
          'legend': { position: "none" }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('area_grafico'));

        chart.draw(data, config);
      }
    </script>

    <div id="area_grafico"></div>

<?php include(FOOTER_TEMPLATE); ?>