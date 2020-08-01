<div class="modal fade" id="modalCreateLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar enlace</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="txtTittle" class="col-form-label">Titulo</label>
            <input type="text" class="form-control" id="txtTittle">
          </div>
          <div class="form-group">
            <label for="txtLink" class="col-form-label">Enlace</label>
            <input type="text" class="form-control" id="txtLink">
          </div>
          <div class="form-group">
            <label for="txtBackgroundText" class="col-fomr-label">Color de texto</label>
            <input type="color" class="form-control" id="txtBackgroundText">
            <p class="text-center">
            <button class="btn btn-sm btn-primary" onclick="DarColor('primary');"></button>
            <button class="btn btn-sm btn-secondary" onclick="DarColor('secondary');"></button>
            <button class="btn btn-sm btn-success" onclick="DarColor('success');"></button>
            <button class="btn btn-sm btn-danger" onclick="DarColor('danger');"></button>
            <button class="btn btn-sm btn-warning" onclick="DarColor('warning');"></button>
            <button class="btn btn-sm btn-info" onclick="DarColor('info');"></button>
            <button class="btn btn-sm btn-light" onclick="DarColor('light');"></button>
            <button class="btn btn-sm btn-dark" onclick="DarColor('dark');"></button>
            </p>
          </div>
          <div class="form-group">
            <label for="txtBackground" class="col-fomr-label">Color del boton</label>
            <input type="color" class="form-control" id="txtBackground">
            <p class="text-center">
            <input class="form-check-input" type="checkbox" value="" id="transparente">
            <label class="form-check-label" for="transparente">
              Transparente
            </label>
            <button class="btn btn-sm btn-primary" onclick="DarColorFondo('primary');"></button>
            <button class="btn btn-sm btn-secondary" onclick="DarColorFondo('secondary');"></button>
            <button class="btn btn-sm btn-success" onclick="DarColorFondo('success');"></button>
            <button class="btn btn-sm btn-danger" onclick="DarColorFondo('danger');"></button>
            <button class="btn btn-sm btn-warning" onclick="DarColorFondo('warning');"></button>
            <button class="btn btn-sm btn-info" onclick="DarColorFondo('info');"></button>
            <button class="btn btn-sm btn-light" onclick="DarColorFondo('light');"></button>
            <button class="btn btn-sm btn-dark" onclick="DarColorFondo('dark');"></button>
            </p>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary"  onclick="InsertLink();">Agregar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEditLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modeloEditar" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditLinkLabel">Editar enlace</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="txtTittle" class="col-form-label">Titulo</label>
            <input type="text" class="form-control" id="txtTittleEdit">
          </div>
          <div class="form-group">
            <label for="txtLink" class="col-form-label">Enlace</label>
            <input type="text" class="form-control" id="txtLinkEdit">
          </div>
          <div class="form-group">
            <label for="txtBackgroundText" class="col-fomr-label">Color de texto</label>
            <input type="color" class="form-control" id="txtBackgroundTextEdit">
            <p class="text-center">
            <button class="btn btn-sm btn-primary" onclick="DarColorEdit('primary');"></button>
            <button class="btn btn-sm btn-secondary" onclick="DarColorEdit('secondary');"></button>
            <button class="btn btn-sm btn-success" onclick="DarColorEdit('success');"></button>
            <button class="btn btn-sm btn-danger" onclick="DarColorEdit('danger');"></button>
            <button class="btn btn-sm btn-warning" onclick="DarColorEdit('warning');"></button>
            <button class="btn btn-sm btn-info" onclick="DarColorEdit('info');"></button>
            <button class="btn btn-sm btn-light" onclick="DarColorEdit('light');"></button>
            <button class="btn btn-sm btn-dark" onclick="DarColorEdit('dark');"></button>
            </p>
          </div>
          <div class="form-group">
            <label for="txtBackground" class="col-fomr-label">Color del boton</label>
            <input type="color" class="form-control" id="txtBackgroundEdit">
            <p class="text-center">
            <input class="form-check-input" type="checkbox" value="" id="transparenteEdit">
            <label class="form-check-label" for="transparente">
              Transparente
            </label>
            <button class="btn btn-sm btn-primary" onclick="DarColorFondoEdit('primary');"></button>
            <button class="btn btn-sm btn-secondary" onclick="DarColorFondoEdit('secondary');"></button>
            <button class="btn btn-sm btn-success" onclick="DarColorFondoEdit('success');"></button>
            <button class="btn btn-sm btn-danger" onclick="DarColorFondoEdit('danger');"></button>
            <button class="btn btn-sm btn-warning" onclick="DarColorFondoEdit('warning');"></button>
            <button class="btn btn-sm btn-info" onclick="DarColorFondoEdit('info');"></button>
            <button class="btn btn-sm btn-light" onclick="DarColorFondoEdit('light');"></button>
            <button class="btn btn-sm btn-dark" onclick="DarColorFondoEdit('dark');"></button>
            </p>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary"  onclick="UpdateLink();">Editar</button>
        
      </div>
    </div>
  </div>
</div>
