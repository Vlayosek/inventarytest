{{-- MODAL CREAR ROL --}}
<div class="modal fade" id="create_area" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('area.store') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Area</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Ingrese Area..." required onfocus="">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-archive"></i></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Si! Crear</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- FIN MODAL CREAR ROL --}}

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
                    @if($area->status=='A')
                        Estas seguro que deseas inhabilitar el area "<b>{{ $area->name }}</b>"?
                    @else
                        Estas seguro que deseas habilitar el area "<b>{{ $area->name }}</b>"?
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    @if($area->status=='A')
                        <button type="submit" class="btn btn-danger">Si! Inhabilitar</button>
                    @else
                        <button type="submit" class="btn btn-danger">Si! Habilitar</button>
                    @endif

                </div>
            </div>
        </form>
    </div>
</div>
{{-- FIN MODAL ELIMINAR AREA --}}

{{-- MODAL EDITAR AREA --}}
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
                        <input name="name" type="text" class="form-control" value="{{ $area->name }}" placeholder="Ingrese Area..." required autofocus>
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
{{-- FIN MODAL EDITAR AREA --}}
