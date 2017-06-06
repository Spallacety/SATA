<?php
    require_once('functions.php');
    include("fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript">

      google.load('visualization', '1.0', {'packages':['corechart']});

      google.setOnLoadCallback(drawLastResults);

      function drawLastResults() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Gênero');
        data.addColumn('number', 'Quantidades');
        data.addRows([
          ['Masculino', 14],
          ['Feminino', 20]
        ]);

        var config = {
            'title':'Quantidade de alunos por gênero',
            'width':600,
            'height':400
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('area_grafico'));

        chart.draw(data, config);
      }
    </script>

    <div id="area_grafico"></div>

<?php include(FOOTER_TEMPLATE); ?>