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
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Total');
    dados.addColumn({type: 'string', role: 'tooltip'});
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(1, $relatorio['q1']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q1'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Relacionamento interpessoal (Questão 1/15)',
        width:700,
        height:300,
        legend: "none",
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q1'));

    chart.draw(dados, config);
  }
</script>

<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addColumn({type: 'string', role: 'tooltip'});
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            $string = findAnswer(2, $relatorio['q2']);
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q2'] . ", '" . $string['significado'] . "'],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Imitação (Questão 2/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q2'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q3'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Resposta emocional (Questão 3/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q3'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q4'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Expressão corporal (Questão 4/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q4'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q5'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Uso do objeto (Questão 5/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q5'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q6'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Adaptação a mudanças (Questão 6/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q6'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q7'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Uso do olhar (Questão 7/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q7'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q8'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Uso da audição (Questão 8/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q8'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q9'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Uso do paladar, olfato e do tato (Questão 9/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q9'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q10'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Medo e nervosismo (Questão 10/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q10'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q11'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Comunicação verbal (Questão 11/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q11'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q12'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Comunicação não-verbal (Questão 12/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q12'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q13'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Atividade (Questão 13/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q13'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q14'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Grau e consistência das respostas da inteligência (Questão 14/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q14'));

    chart.draw(dados, config);
  }
</script>
<script type="text/javascript">

  google.load('visualization', '1.0', {'packages':['corechart']});

  google.setOnLoadCallback(desenharGrafico);

  function desenharGrafico() {
    var dados = new google.visualization.DataTable();
    dados.addColumn('string', 'Data');
    dados.addColumn('number', 'Resposta');
    dados.addRows([
      <?php
        if ($relatorios) :
          foreach ($relatorios as $relatorio) :
            echo "['" . $relatorio['modificacao'] . "', " . $relatorio['q15'] . "],";
          endforeach;
        endif;
      ?>
    ]);

    var config = {
        title:'Impressão geral (Questão 15/15)',
        width:700,
        height:300,
        legend: { position: "none" },
        tooltip: {isHtml: true},
        colors: ['#1a237e'],
        vAxis: {
          minValue: 0, 
          ticks: [0, 1, 2, 3, 4]
        },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('grafico_q15'));

    chart.draw(dados, config);
  }
</script>

<div class="row center" id="grafico_q1"></div>
<div class="row center" id="grafico_q2"></div>
<div class="row center" id="grafico_q3"></div>
<div class="row center" id="grafico_q4"></div>
<div class="row center" id="grafico_q5"></div>
<div class="row center" id="grafico_q6"></div>
<div class="row center" id="grafico_q7"></div>
<div class="row center" id="grafico_q8"></div>
<div class="row center" id="grafico_q9"></div>
<div class="row center" id="grafico_q10"></div>
<div class="row center" id="grafico_q11"></div>
<div class="row center" id="grafico_q12"></div>
<div class="row center" id="grafico_q13"></div>
<div class="row center" id="grafico_q14"></div>
<div class="row center" id="grafico_q15"></div>

<?php include(FOOTER_TEMPLATE); ?>