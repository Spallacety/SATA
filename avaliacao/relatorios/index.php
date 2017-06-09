<?php
    require_once('functions.php');
    include("../../fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<br>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

    drawChartLastResult();
    
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