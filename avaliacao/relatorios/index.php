<?php
    require_once('functions.php');
    include("../../fusioncharts.php");
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<br>

  <?php

  $grafico = array(
      'dados' => array(
          'cols' => array(
              array('type' => 'string', 'label' => 'Data'),
              array('type' => 'number', 'label' => 'Resultado')
          ),  
          'rows' => array()
      ),
      'config' => array(
          'title' => 'Ultimos 10 resultados do paciente',
          'width' => 400,
          'height' => 300
      )
  );

  if ($relatorios) :
    foreach ($relatorios as $relatorio) :
      $grafico['dados']['rows'][] = array('c' => array(
          array('v' => $relatorio['modificacao']),
          array('v' => (float)$relatorio['resultado'])
      ));
    endforeach;
  endif;

  echo json_encode($grafico);
  ?>

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
        <td><?php echo json_encode($relatorio); ?></td>
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