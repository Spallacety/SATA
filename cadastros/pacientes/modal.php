<!-- Modal de Delete-->
<div class="modal" id="delete-modal-paciente">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <p> Deseja mesmo apagar <?php echo $paciente['id']; ?>?</p>
      <div class="modal-footer">
        <a id="cancel" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
        <a id="confirm" class="btn btn-primary" href="#">Sim</a>
      </div>
    </div>
  </div>
</div> <!-- /.modal -->
