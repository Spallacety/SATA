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
        var dados = new google.visualization.DataTable();
        dados.addColumn('string', 'Gênero');
        dados.addColumn('number', 'Quantidades');
        dados.addRows([
          ['Masculino', 14],
          ['Feminino', 20]
        ]);

        var config = {
            'title':'Quantidade de alunos por gênero',
            'width':400,
            'height':300
        };

        var chart = new google.visualization.BarChart(document.getElementById('area_grafico'));

        chart.draw(dados, config);
      }
    </script>

    <div id="area_grafico"></div>

<?php include(FOOTER_TEMPLATE); ?>