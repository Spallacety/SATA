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
        data.addColumn('float', 'Quantidades');
        data.addRows([
          ['23', 1],
          ['24', 1.5],
          ['25', 4],
          ['26', 2.5]
        ]);

        var config = {
          'title': 'Quantidade de alunos por gênero',
          'width': 600,
          'height': 400,
          'legend': { position: "none" }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('area_grafico'));

        chart.draw(data, config);
      }
    </script>

    <div id="area_grafico"></div>

<?php include(FOOTER_TEMPLATE); ?>