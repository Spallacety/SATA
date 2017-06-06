<?php
    require_once('functions.php');
    include("fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<br>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<?php $result = findLast(2); ?>

<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});
  google.setOnLoadCallback(function(){
  
    var json_text = $.ajax({url: "lastResults.json", dataType:"json", async: false}).responseText;
    var json = eval("(" + json_text + ")");
    var dados = new google.visualization.DataTable(json.dados);

    var chart = new google.visualization.ColumnChart(document.getElementById('area_grafico'));
    chart.draw(dados, json.config);
  }
</script>

<div id="area_grafico"></div>

<?php include(FOOTER_TEMPLATE); ?>