<div id="delete-modal-instituicao" class="modal">
  <div class="modal-content">
    <h4>Excluir</h4>
    <p> Deseja mesmo apagar <?php echo $instituicao['descricao']; ?>?</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close btn-flat">Não</a>
    <a href="delete.php?id=<?php echo $instituicao['id']; ?>" class="modal-action modal-close btn-flat">Sim</a>
  </div>
</div>