<?php
    require_once('functions.php');
    include("../../fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<br>

<script src="/js/fusioncharts.js"></script>
  
<?php

  $database = open_database();
  
  $query = "SELECT * FROM avaliacoes WHERE id_paciente = 2 ORDER BY criacao DESC LIMIT 10";

  $result = $database->query($query) or exit("Error code ({$database->errno}): {$database->error}");

  if ($result) {
      $arrData = array(
          "chart" => array(
              "caption" => "Top 10 Most Populous Countries",
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

      close_database($database);
  }

?>

<div id="chart-1"></div>

<?php include(FOOTER_TEMPLATE); ?>