<?php
    require_once('functions.php');
    include("../../fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<br>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      google.load('visualization', '1.0', {'packages':['corechart']});

      google.setOnLoadCallback(desenharGrafico);
      function desenharGrafico() {
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

        var chart = new google.visualization.ColumnChart(document.getElementById('area_grafico'));

        chart.draw(dados, config);
      }
    </script>

    <div id="area_grafico"></div>

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
        <td></td>
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