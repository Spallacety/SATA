<?php
    require_once('functions.php');
    include("fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<br>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<?php $result = findLast(2); ?>

<div id="area_grafico"></div>

<?php include(FOOTER_TEMPLATE); ?>