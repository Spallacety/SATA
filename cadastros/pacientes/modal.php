<!-- Modal de Delete-->
<div class="modal" id="delete-modal-paciente">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
    </div>
    <p> Deseja mesmo apagar <?php echo $paciente['id']; ?>?</p>
    <div class="modal-footer">
      <a id="cancel" class="btn-flat" href="#!">Não</a>
      <a id="confirm" class="btn-flat" href="#!">Sim</a>
    </div>
  </div>
</div> <!-- /.modal -->
