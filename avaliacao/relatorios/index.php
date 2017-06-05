<?php
    require_once('functions.php');
    include("fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<?php

  $result = findLast(2);

  if ($result) {
    $arrData = array(
      "chart" => array(
        "caption" => "Teste",
        "showValues" => "0",
        "theme" => "zune"
      )
    );

    $arrData["data"] = array();

    while($row = mysqli_fetch_array($result)) {
      array_push($arrData["data"], array(
          "label" => $row["criacao"],
          "value" => $row["resultado"]
          )
      );
    }

    $jsonEncodedData = json_encode($arrData);
    $columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-1", "json", $jsonEncodedData);
    $columnChart->render();

  }

?>

<div id="chart-1"></div>

<?php include(FOOTER_TEMPLATE); ?>