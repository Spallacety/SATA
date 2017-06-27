<?php 
	require_once('functions.php');
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Questao');
    dados.addColumn('number', 'Media');
    dados.addColumn({type: 'string', role: 'tooltip'});
    dados.addRows([
      <?php
        $geral = null;
        $counter = 0;
        if ($allcars) :
          foreach ($allcars as $avaliacao) :
            $geral['q1'] += (float) $avaliacao['q1'];
            $geral['q2'] += (float) $avaliacao['q2'];
            $geral['q3'] += (float) $avaliacao['q3'];
            $geral['q4'] += (float) $avaliacao['q4'];
            $geral['q5'] += (float) $avaliacao['q5'];
            $geral['q6'] += (float) $avaliacao['q6'];
            $geral['q7'] += (float) $avaliacao['q7'];
            $geral['q8'] += (float) $avaliacao['q8'];
            $geral['q9'] += (float) $avaliacao['q9'];
            $geral['q10'] += (float) $avaliacao['q10'];
            $geral['q11'] += (float) $avaliacao['q11'];
            $geral['q12'] += (float) $avaliacao['q12'];
            $geral['q13'] += (float) $avaliacao['q13'];
            $geral['q14'] += (float) $avaliacao['q14'];
            $geral['q15'] += (float) $avaliacao['q15'];
            $counter += 1;
          endforeach;
        endif;
        echo "['1', " . round(($geral['q1']/$counter)*2)/2 . ", '" . findAnswer(1, round(($geral['q1']/$counter)*2)/2)['significado'] . "'],";
        echo "['2', " . round(($geral['q2']/$counter)*2)/2 . ", '" . findAnswer(2, round(($geral['q2']/$counter)*2)/2)['significado'] . "'],";
        echo "['3', " . round(($geral['q3']/$counter)*2)/2 . ", '" . findAnswer(3, round(($geral['q3']/$counter)*2)/2)['significado'] . "'],";
        echo "['4', " . round(($geral['q4']/$counter)*2)/2 . ", '" . findAnswer(4, round(($geral['q4']/$counter)*2)/2)['significado'] . "'],";
        echo "['5', " . round(($geral['q5']/$counter)*2)/2 . ", '" . findAnswer(5, round(($geral['q5']/$counter)*2)/2)['significado'] . "'],";
        echo "['6', " . round(($geral['q6']/$counter)*2)/2 . ", '" . findAnswer(6, round(($geral['q6']/$counter)*2)/2)['significado'] . "'],";
        echo "['7', " . round(($geral['q7']/$counter)*2)/2 . ", '" . findAnswer(7, round(($geral['q7']/$counter)*2)/2)['significado'] . "'],";
        echo "['8', " . round(($geral['q8']/$counter)*2)/2 . ", '" . findAnswer(8, round(($geral['q8']/$counter)*2)/2)['significado'] . "'],";
        echo "['9', " . round(($geral['q9']/$counter)*2)/2 . ", '" . findAnswer(9, round(($geral['q9']/$counter)*2)/2)['significado'] . "'],";
        echo "['10', " . round(($geral['q10']/$counter)*2)/2 . ", '" . findAnswer(10, round(($geral['q10']/$counter)*2)/2)['significado'] . "'],";
        echo "['11', " . round(($geral['q11']/$counter)*2)/2 . ", '" . findAnswer(11, round(($geral['q11']/$counter)*2)/2)['significado'] . "'],";
        echo "['12', " . round(($geral['q12']/$counter)*2)/2 . ", '" . findAnswer(12, round(($geral['q12']/$counter)*2)/2)['significado'] . "'],";
        echo "['13', " . round(($geral['q13']/$counter)*2)/2 . ", '" . findAnswer(13, round(($geral['q13']/$counter)*2)/2)['significado'] . "'],";
        echo "['14', " . round(($geral['q14']/$counter)*2)/2 . ", '" . findAnswer(14, round(($geral['q14']/$counter)*2)/2)['significado'] . "'],";
        echo "['15', " . round(($geral['q15']/$counter)*2)/2 . ", '" . findAnswer(15, round(($geral['q15']/$counter)*2)/2)['significado'] . "'],";
      ?>
    ]);

    var config = {
        title:'Média geral das avaliações',   
        height:300,
        legend: "none",
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_geral'));

    chart.draw(dados, config);

  }
</script>

<h4 class="main-text center">Relatórios de <?php echo $paciente['nome'] ?></h2>
<hr>

<div class="row center">
  <a href="mylist.php?id=<?php echo $_GET['id']; ?>" class="btn-flat main-text btn-default">Minhas avaliações</a>
</div>
<div class="row center">
  <a href="otherlist.php?id=<?php echo $_GET['id']; ?>" class="btn-flat main-text btn-default">Avaliações de outros profissionais</a>
</div>
<div class="row center">
  <a href="#!" class="btn-flat main-text btn-default">Relatórios</a>
</div>

<div class="chart" id="grafico_geral"></div>

<div class="row center">
  <br>
  <a href="index.php" class="btn main-color white-text btn-default">Voltar</a>
</div>

<?php include(FOOTER_TEMPLATE); ?>
