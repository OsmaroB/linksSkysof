<div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega la red social</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="cmbRedSocial">Escoge una red social</label>
            <select class="form-control" id="cmbRedSocial">
            </select>
          </div>
          <div class="form-group">
            <label for="txtLinkSocial" class="col-form-label">Enlace</label>
            <input type="text" class="form-control" id="txtLinkSocial">
          </div>
          <div class="form-group">
            <div class="input-group mb-2 mr-sm-2">
                
                <div class="input-group-prepend">
                <div class="input-group-text bg-dark" onclick="ColorRed(0)"></div>
                <div class="input-group-text bg-light" onclick="ColorRed(1)"></div>
                </div>
                <input type="text" class="form-control" id="txtColorRed" placeholder="Escoge tono del icono" disabled>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="insertRed()">Agregar</button>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="modalSocialEdit" tabindex="-1" role="dialog" aria-labelledby="modalSocialEditLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSocialEditlLabel">Editar red social</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="cmbRedSocial">Escoge una red social</label>
            <select class="form-control" id="cmbRedSocialEdit">
            </select>
          </div>
          <div class="form-group">
            <label for="txtLinkSocial" class="col-form-label">Enlace</label>
            <input type="text" class="form-control" id="txtLinkSocialEdit">
          </div>
          <div class="form-group">
            <div class="input-group mb-2 mr-sm-2">
                
                <div class="input-group-prepend">
                <div class="input-group-text bg-dark" onclick="ColorRedEdit(0)"></div>
                <div class="input-group-text bg-light" onclick="ColorRedEdit(1)"></div>
                </div>
                <input type="text" class="form-control" id="txtColorRedLink" placeholder="Escoge tono del icono" disabled>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="editRed()">Editar</button>
      </div>
    </div>
  </div>
</div>