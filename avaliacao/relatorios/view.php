<?php
    require_once('functions.php');
    view($_GET['id'], $_GET['limit']);
?>

<?php include(HEADER_TEMPLATE); ?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<br>

<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    
    var config = {
      height:300,
      legend: "none",
      tooltip: {isHtml: true},
      colors: ['#1a237e'],
      vAxis: {
        minValue: 0, 
        ticks: [0, 1, 2, 3, 4]
      },
    };

    var dados1 = new google.visualization.DataTable();
    dados1.addColumn('string', 'Data');
    dados1.addColumn('number', 'Resposta');
    dados1.addColumn({type: 'string', role: 'tooltip'});
    dados1.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(1, $relatorio['q1']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q1'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados2 = new google.visualization.DataTable();
    dados2.addColumn('string', 'Data');
    dados2.addColumn('number', 'Resposta');
    dados2.addColumn({type: 'string', role: 'tooltip'});
    dados2.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(2, $relatorio['q2']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q2'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados3 = new google.visualization.DataTable();
    dados3.addColumn('string', 'Data');
    dados3.addColumn('number', 'Resposta');
    dados3.addColumn({type: 'string', role: 'tooltip'});
    dados3.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(3, $relatorio['q3']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q3'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados4 = new google.visualization.DataTable();
    dados4.addColumn('string', 'Data');
    dados4.addColumn('number', 'Resposta');
    dados4.addColumn({type: 'string', role: 'tooltip'});
    dados4.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(4, $relatorio['q4']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q4'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados5 = new google.visualization.DataTable();
    dados5.addColumn('string', 'Data');
    dados5.addColumn('number', 'Resposta');
    dados5.addColumn({type: 'string', role: 'tooltip'});
    dados5.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(5, $relatorio['q5']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q5'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados6 = new google.visualization.DataTable();
    dados6.addColumn('string', 'Data');
    dados6.addColumn('number', 'Resposta');
    dados6.addColumn({type: 'string', role: 'tooltip'});
    dados6.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(6, $relatorio['q6']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q6'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados7 = new google.visualization.DataTable();
    dados7.addColumn('string', 'Data');
    dados7.addColumn('number', 'Resposta');
    dados7.addColumn({type: 'string', role: 'tooltip'});
    dados7.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(7, $relatorio['q7']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q7'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados8 = new google.visualization.DataTable();
    dados8.addColumn('string', 'Data');
    dados8.addColumn('number', 'Resposta');
    dados8.addColumn({type: 'string', role: 'tooltip'});
    dados8.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(8, $relatorio['q8']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q8'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados9 = new google.visualization.DataTable();
    dados9.addColumn('string', 'Data');
    dados9.addColumn('number', 'Resposta');
    dados9.addColumn({type: 'string', role: 'tooltip'});
    dados9.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(9, $relatorio['q9']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q9'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados10 = new google.visualization.DataTable();
    dados10.addColumn('string', 'Data');
    dados10.addColumn('number', 'Resposta');
    dados10.addColumn({type: 'string', role: 'tooltip'});
    dados10.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(10, $relatorio['q10']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q10'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados11 = new google.visualization.DataTable();
    dados11.addColumn('string', 'Data');
    dados11.addColumn('number', 'Resposta');
    dados11.addColumn({type: 'string', role: 'tooltip'});
    dados11.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(11, $relatorio['q11']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q11'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados12 = new google.visualization.DataTable();
    dados12.addColumn('string', 'Data');
    dados12.addColumn('number', 'Resposta');
    dados12.addColumn({type: 'string', role: 'tooltip'});
    dados12.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(12, $relatorio['q12']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q12'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados13 = new google.visualization.DataTable();
    dados13.addColumn('string', 'Data');
    dados13.addColumn('number', 'Resposta');
    dados13.addColumn({type: 'string', role: 'tooltip'});
    dados13.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(13, $relatorio['q13']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q13'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados14 = new google.visualization.DataTable();
    dados14.addColumn('string', 'Data');
    dados14.addColumn('number', 'Resposta');
    dados14.addColumn({type: 'string', role: 'tooltip'});
    dados14.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(14, $relatorio['q14']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q14'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var dados15 = new google.visualization.DataTable();
    dados15.addColumn('string', 'Data');
    dados15.addColumn('number', 'Resposta');
    dados15.addColumn({type: 'string', role: 'tooltip'});
    dados15.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(15, $relatorio['q15']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q15'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    config['title'] = 'Relacionamento interpessoal (Questão 1/15)';
    var chart1 = new google.visualization.ColumnChart(document.getElementById('grafico_q1'));
    chart1.draw(dados1, config);

    config['title'] = 'Imitação (Questão 2/15)';
    var chart2 = new google.visualization.ColumnChart(document.getElementById('grafico_q2'));
    chart2.draw(dados2, config);

    config['title'] = 'Resposta emocional (Questão 3/15)';
    var chart3 = new google.visualization.ColumnChart(document.getElementById('grafico_q3'));
    chart3.draw(dados3, config);

    config['title'] = 'Expressão corporal (Questão 4/15)';
    var chart4 = new google.visualization.ColumnChart(document.getElementById('grafico_q4'));
    chart4.draw(dados4, config);

    config['title'] = 'Uso do objeto (Questão 5/15)';
    var chart5 = new google.visualization.ColumnChart(document.getElementById('grafico_q5'));
    chart5.draw(dados5, config);

    config['title'] = 'Adaptação a mudanças (Questão 6/15)';
    var chart6 = new google.visualization.ColumnChart(document.getElementById('grafico_q6'));
    chart6.draw(dados6, config);

    config['title'] = 'Uso do olhar (Questão 7/15)';
    var chart7 = new google.visualization.ColumnChart(document.getElementById('grafico_q7'));
    chart7.draw(dados7, config);

    config['title'] = 'Uso da audição (Questão 8/15)';
    var chart8 = new google.visualization.ColumnChart(document.getElementById('grafico_q8'));
    chart8.draw(dados8, config);

    config['title'] = 'Uso do paladar, olfato e do tato (Questão 9/15)';
    var chart9 = new google.visualization.ColumnChart(document.getElementById('grafico_q9'));
    chart9.draw(dados9, config);

    config['title'] = 'Medo e nervosismo (Questão 10/15)';
    var chart10 = new google.visualization.ColumnChart(document.getElementById('grafico_q10'));
    chart10.draw(dados10, config);

    config['title'] = 'Comunicação verbal (Questão 11/15)';
    var chart11 = new google.visualization.ColumnChart(document.getElementById('grafico_q11'));
    chart11.draw(dados11, config);

    config['title'] = 'Comunicação não-verbal (Questão 12/15)';
    var chart12 = new google.visualization.ColumnChart(document.getElementById('grafico_q12'));
    chart12.draw(dados12, config);

    config['title'] = 'Atividade (Questão 13/15)';
    var chart13 = new google.visualization.ColumnChart(document.getElementById('grafico_q13'));
    chart13.draw(dados13, config);

    config['title'] = 'Grau e consistência das respostas da inteligência (Questão 14/15)';
    var chart14 = new google.visualization.ColumnChart(document.getElementById('grafico_q14'));
    chart14.draw(dados14, config);

    config['title'] = 'Impressão geral (Questão 15/15)';
    var chart15 = new google.visualization.ColumnChart(document.getElementById('grafico_q15'));
    chart15.draw(dados15, config);
  }
</script>

<?php
  $geral = null;
  $primeiras = null;

  $counter = 0;
  $counter2 = 0;
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
    $geral['q1'] = round(($geral['q1']/$counter)*2)/2;
    $geral['q2'] = round(($geral['q2']/$counter)*2)/2;
    $geral['q3'] = round(($geral['q3']/$counter)*2)/2;
    $geral['q4'] = round(($geral['q4']/$counter)*2)/2;
    $geral['q5'] = round(($geral['q5']/$counter)*2)/2;
    $geral['q6'] = round(($geral['q6']/$counter)*2)/2;
    $geral['q7'] = round(($geral['q7']/$counter)*2)/2;
    $geral['q8'] = round(($geral['q8']/$counter)*2)/2;
    $geral['q9'] = round(($geral['q9']/$counter)*2)/2;
    $geral['q10'] = round(($geral['q10']/$counter)*2)/2;
    $geral['q11'] = round(($geral['q11']/$counter)*2)/2;
    $geral['q12'] = round(($geral['q12']/$counter)*2)/2;
    $geral['q13'] = round(($geral['q13']/$counter)*2)/2;
    $geral['q14'] = round(($geral['q14']/$counter)*2)/2;
    $geral['q15'] = round(($geral['q15']/$counter)*2)/2;
  endif;

  if ($firstcars) :
    foreach ($firstcars as $avaliacao) :
      $primeiras['q1'] += (float) $avaliacao['q1'];
      $primeiras['q2'] += (float) $avaliacao['q2'];
      $primeiras['q3'] += (float) $avaliacao['q3'];
      $primeiras['q4'] += (float) $avaliacao['q4'];
      $primeiras['q5'] += (float) $avaliacao['q5'];
      $primeiras['q6'] += (float) $avaliacao['q6'];
      $primeiras['q7'] += (float) $avaliacao['q7'];
      $primeiras['q8'] += (float) $avaliacao['q8'];
      $primeiras['q9'] += (float) $avaliacao['q9'];
      $primeiras['q10'] += (float) $avaliacao['q10'];
      $primeiras['q11'] += (float) $avaliacao['q11'];
      $primeiras['q12'] += (float) $avaliacao['q12'];
      $primeiras['q13'] += (float) $avaliacao['q13'];
      $primeiras['q14'] += (float) $avaliacao['q14'];
      $primeiras['q15'] += (float) $avaliacao['q15'];
      $counter2 += 1;
    endforeach;
    $primeiras['q1'] = round(($primeiras['q1']/$counter2)*2)/2;
    $primeiras['q2'] = round(($primeiras['q2']/$counter2)*2)/2;
    $primeiras['q3'] = round(($primeiras['q3']/$counter2)*2)/2;
    $primeiras['q4'] = round(($primeiras['q4']/$counter2)*2)/2;
    $primeiras['q5'] = round(($primeiras['q5']/$counter2)*2)/2;
    $primeiras['q6'] = round(($primeiras['q6']/$counter2)*2)/2;
    $primeiras['q7'] = round(($primeiras['q7']/$counter2)*2)/2;
    $primeiras['q8'] = round(($primeiras['q8']/$counter2)*2)/2;
    $primeiras['q9'] = round(($primeiras['q9']/$counter2)*2)/2;
    $primeiras['q10'] = round(($primeiras['q10']/$counter2)*2)/2;
    $primeiras['q11'] = round(($primeiras['q11']/$counter2)*2)/2;
    $primeiras['q12'] = round(($primeiras['q12']/$counter2)*2)/2;
    $primeiras['q13'] = round(($primeiras['q13']/$counter2)*2)/2;
    $primeiras['q14'] = round(($primeiras['q14']/$counter2)*2)/2;
    $primeiras['q15'] = round(($primeiras['q15']/$counter2)*2)/2;
  endif;

  $melhores = array();
  $piores = array();
  $mesmos = array();

  if ($geral['q1'] > $primeiras['q1']):
    array_push($piores, 'Relacionamento interpessoal (Questão 1/15)');
  elseif ($geral['q1'] < $primeiras['q1']):
    array_push($melhores, 'Relacionamento interpessoal (Questão 1/15)');
  else:
    array_push($mesmos, 'Relacionamento interpessoal (Questão 1/15)');
  endif;

  if ($geral['q2'] > $primeiras['q2']):
    array_push($piores, 'Imitação (Questão 2/15)');
  elseif ($geral['q2'] < $primeiras['q2']):
    array_push($melhores, 'Imitação (Questão 2/15)');
  else:
    array_push($mesmos, 'Imitação (Questão 2/15)');
  endif;

  if ($geral['q3'] > $primeiras['q3']):
    array_push($piores, 'Resposta emocional (Questão 3/15)');
  elseif ($geral['q3'] < $primeiras['q3']):
    array_push($melhores, 'Resposta emocional (Questão 3/15)');
  else:
    array_push($mesmos, 'Resposta emocional (Questão 3/15)');
  endif;

  if ($geral['q4'] > $primeiras['q4']):
    array_push($piores, 'Expressão corporal (Questão 4/15)');
  elseif ($geral['q4'] < $primeiras['q4']):
    array_push($melhores, 'Expressão corporal (Questão 4/15)');
  else:
    array_push($mesmos, 'Expressão corporal (Questão 4/15)');
  endif;

  if ($geral['q5'] > $primeiras['q5']):
    array_push($piores, 'Uso do objeto (Questão 5/15)');
  elseif ($geral['q5'] < $primeiras['q5']):
    array_push($melhores, 'Uso do objeto (Questão 5/15)');
  else:
    array_push($mesmos, 'Uso do objeto (Questão 5/15)');
  endif;

  if ($geral['q6'] > $primeiras['q6']):
    array_push($piores, 'Adaptação a mudanças (Questão 6/15)');
  elseif ($geral['q6'] < $primeiras['q6']):
    array_push($melhores, 'Adaptação a mudanças (Questão 6/15)');
  else:
    array_push($mesmos, 'Adaptação a mudanças (Questão 6/15)');
  endif;

  if ($geral['q7'] > $primeiras['q7']):
    array_push($piores, 'Uso do olhar (Questão 7/15)');
  elseif ($geral['q7'] < $primeiras['q7']):
    array_push($melhores, 'Uso do olhar (Questão 7/15)');
  else:
    array_push($mesmos, 'Uso do olhar (Questão 7/15)');
  endif;

  if ($geral['q8'] > $primeiras['q8']):
    array_push($piores, 'Uso da audição (Questão 8/15)');
  elseif ($geral['q8'] < $primeiras['q8']):
    array_push($melhores, 'Uso da audição (Questão 8/15)');
  else:
    array_push($mesmos, 'Uso da audição (Questão 8/15)');
  endif;

  if ($geral['q9'] > $primeiras['q9']):
    array_push($piores, 'Uso do paladar, olfato e do tato (Questão 9/15)');
  elseif ($geral['q9'] < $primeiras['q9']):
    array_push($melhores, 'Uso do paladar, olfato e do tato (Questão 9/15)');
  else:
    array_push($mesmos, 'Uso do paladar, olfato e do tato (Questão 9/15)');
  endif;

  if ($geral['q10'] > $primeiras['q10']):
    array_push($piores, 'Medo e nervosismo (Questão 10/15)');
  elseif ($geral['q10'] < $primeiras['q10']):
    array_push($melhores, 'Medo e nervosismo (Questão 10/15)');
  else:
    array_push($mesmos, 'Medo e nervosismo (Questão 10/15)');
  endif;

  if ($geral['q11'] > $primeiras['q11']):
    array_push($piores, 'Comunicação verbal (Questão 11/15)');
  elseif ($geral['q11'] < $primeiras['q11']):
    array_push($melhores, 'Comunicação verbal (Questão 11/15)');
  else:
    array_push($mesmos, 'Comunicação verbal (Questão 11/15)');
  endif;

  if ($geral['q12'] > $primeiras['q12']):
    array_push($piores, 'Comunicação não-verbal (Questão 12/15)');
  elseif ($geral['q12'] < $primeiras['q12']):
    array_push($melhores, 'Comunicação não-verbal (Questão 12/15)');
  else:
    array_push($mesmos, 'Comunicação não-verbal (Questão 12/15)');
  endif;

  if ($geral['q13'] > $primeiras['q13']):
    array_push($piores, 'Atividade (Questão 13/15)');
  elseif ($geral['q13'] < $primeiras['q13']):
    array_push($melhores, 'Atividade (Questão 13/15)');
  else:
    array_push($mesmos, 'Atividade (Questão 13/15)');
  endif;

  if ($geral['q14'] > $primeiras['q14']):
    array_push($piores, 'Grau e consistência das respostas da inteligência (Questão 14/15)');
  elseif ($geral['q14'] < $primeiras['q14']):
    array_push($melhores, 'Grau e consistência das respostas da inteligência (Questão 14/15)');
  else:
    array_push($mesmos, 'Grau e consistência das respostas da inteligência (Questão 14/15)');
  endif;

  if ($geral['q15'] > $primeiras['q15']):
    array_push($piores, 'Impressão geral (Questão 15/15)');
  elseif ($geral['q15'] < $primeiras['q15']):
    array_push($melhores, 'Impressão geral (Questão 15/15)');
  else:
    array_push($mesmos, 'Impressão geral (Questão 15/15)');
  endif;
?>

<div class="row center">
  <div class="col s12 m6 l6">
    <div class="card-panel green lighten-3">
      Pontos melhorados:
      <ul>
      <?php
        foreach ($melhores as $melhor):
          echo "<li>" . $melhor . "</li>";
        endforeach;
      ?>
      </ul>
    </div>
    <div class="card-panel grey lighten-3">
      Pontos que permaneceram:
      <ul>
      <?php
        foreach ($mesmos as $mesmo):
          echo "<li>" . $mesmo . "</li>";
        endforeach;
      ?>
      </ul>
    </div>
    <div class="card-panel red lighten-3">
      Pontos que pioraram:
      <ul>
      <?php
        foreach ($piores as $pior):
          echo "<li>" . $pior . "</li>";
        endforeach;
      ?>
      </ul>
    </div>
  </div>
  <div class="col s12 m6 l6">
    <div id="grafico_q1"></div>
    <div id="grafico_q2"></div>
    <div id="grafico_q3"></div>
    <div id="grafico_q4"></div>
    <div id="grafico_q5"></div>
    <div id="grafico_q6"></div>
    <div id="grafico_q7"></div>
    <div id="grafico_q8"></div>
    <div id="grafico_q9"></div>
    <div id="grafico_q10"></div>
    <div id="grafico_q11"></div>
    <div id="grafico_q12"></div>
    <div id="grafico_q13"></div>
    <div id="grafico_q14"></div>
    <div id="grafico_q15"></div>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>