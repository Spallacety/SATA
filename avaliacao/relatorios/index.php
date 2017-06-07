<?php
    require_once('functions.php');
    include("../../fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<br>

<script src="js/fusioncharts.js"></script>
  
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

      /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

      $jsonEncodedData = json_encode($arrData);

/*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

      $columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-1", "json", $jsonEncodedData);

      // Render the chart
      $columnChart->render();

      // Close the database connection
      close_database($database);
  }

?>

<div id="chart-1"></div>

<?php include(FOOTER_TEMPLATE); ?>