<!-- Modal de Delete-->
<div class="modal" id="delete-modal-paciente">
  <div class="modal-content">
    <div class="modal-header">
      <h4>Excluir</h4>
    </div>
    <p> Deseja mesmo apagar <?php echo $paciente['nome']; ?>?</p>
    <div class="modal-footer">
      <a id="cancel" class="btn-flat modal-close" href="#!">Não</a>
      <a id="confirm" class="btn-flat" href="#!">Sim</a>
    </div>
  </div>
</div> <!-- /.modal -->
