<?php
    require_once('functions.php');
    include("fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript">

      // Carregar a API de visualizacao e os pacotes necessarios.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Especificar um callback para ser executado quando a API for carregada.
      google.setOnLoadCallback(drawLastResults);

      /**
       * Funcao que preenche os dados do grafico
       */
      function drawLastResults() {
        // Montar os dados usados pelo grafico
        var dados = new google.visualization.DataTable();
        dados.addColumn('string', 'Gênero');
        dados.addColumn('number', 'Quantidades');
        dados.addRows([
          ['Masculino', 14],
          ['Feminino', 20]
        ]);

        // Configuracoes do grafico
        var config = {
            'title':'Quantidade de alunos por gênero',
            'width':400,
            'height':300
        };

        // Instanciar o objeto de geracao de graficos de pizza,
        // informando o elemento HTML onde o grafico sera desenhado.
        var chart = new google.visualization.PieChart(document.getElementById('area_grafico'));

        // Desenhar o grafico (usando os dados e as configuracoes criadas)
        chart.draw(dados, config);
      }
    </script>

    <div id="area_grafico"></div>

<?php include(FOOTER_TEMPLATE); ?>