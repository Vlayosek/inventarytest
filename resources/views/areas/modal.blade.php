<div class="modal fade" id="modal-area">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Info Area</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                <div class="form-group error">
                  <label for="inputName" class="col-sm-3 control-label">Nombre</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="name" name="name" placeholder="Nombre de Area" value="{{ $area->name }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputDetail" class="col-sm-3 control-label">Estado</label>
                  <div class="col-sm-9">
                      <select id="status" name ="status">
                          <option value="A">Active</option>
                          <option value="I">Inactivo</option>
                      </select>
                  </div>
                </div>
              </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  {{-- MODAL ELIMINAR AREA --}}
  <div class="modal fade" id="delete_area_{{ $area->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('area.destroy', $area->id) }}" id="form_delete_area_{{ $area->id }}" method="POST">
            @csrf
            @method('DELETE');
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Estas seguro que deseas eliminar el area "<b>{{ $area->name }}</b>"?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Si! Eliminar</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- FIN MODAL ELIMINAR AREA --}}

{{-- MODAL ELIMINAR AREA --}}
<div class="modal fade" id="edit_area_{{ $area->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('area.update', $area) }}" id="form_edit_area_{{ $area->id }}" method="POST">
            @csrf
            @method('PUT');
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Area</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="area_id" value="{{ $area->id }}">
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" value="{{ $area->name }}" placeholder="Ingrese Area..." required onfocus="">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-archive"></i></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Si! Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- FIN MODAL ELIMINAR AREA --}}
