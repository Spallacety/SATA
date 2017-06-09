<?php
    require_once('functions.php');
    include("../../fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
  
google.charts.setOnLoadCallback(drawChart);
  
function drawChart() {
  
  <?php

  $grafico = array(
      'dados' => array(
          'cols' => array(
              array('type' => 'string', 'label' => 'Data'),
              array('type' => 'number', 'label' => 'Resultado')
          ),  
          'rows' => array()
      ),
      'config' => array(
          'title' => 'Ultimos 10 resultados do paciente',
          'width' => 400,
          'height' => 300
      )
  );

  if ($relatorios) :
    foreach ($relatorios as $relatorio) :
      $grafico['dados']['rows'][] = array('c' => array(
          array('v' => $relatorio['modificacao']),
          array('v' => (float)$relatorio['resultado'])
      ));
    endforeach;
  endif;
  ?>

  var jsonData = eval("(" + <?php echo json_encode($grafico) ?> + ")");
      
  var data = new google.visualization.DataTable(jsonData);

  var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

  chart.draw(data, {width: 400, height: 240});

  function desenharGrafico() {
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
}

</script>

<div id="chart_div"></div>

<div id="area_grafico"></div>

<br>

<table class="highlight">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php if ($relatorios) : ?>
    <?php foreach ($relatorios as $relatorio) : ?>
      <tr>
        <td><?php echo json_encode($relatorio); ?></td>
        <td><?php echo $relatorio['resultado']; ?></td>   
        <td><?php echo $relatorio['modificacao']; ?></td>
      </tr>
    <?php endforeach; ?>
    <?php else : ?>
    <tr>
      <td colspan="6">Nenhum registro encontrado.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>

<?php include(FOOTER_TEMPLATE); ?>