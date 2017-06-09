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
        'title':'Ultimas 10 avaliações',
        'width':700,
        'height':300,
        'legend': { position: "none" },
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
    dados.addColumn('number', 'Total');
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
        'title':'Ultimas 10 avaliações',
        'width':700,
        'height':300,
        'legend': { position: "none" },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('area_grafico2'));

    chart.draw(dados, config);
  }
</script>

<div id="area_grafico"></div>
<div id="area_grafico2"></div>

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