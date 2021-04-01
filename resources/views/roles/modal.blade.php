{{-- MODAL ELIMINAR ROLES --}}
<div class="modal fade" id="delete_rol_{{ $rol->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('rol.destroy', $rol->id ) }}" id="form_delete_rol_{{ $rol->id }}" method="POST">
            @csrf
            @method('DELETE');
            <input type="hidden" name="rol_id" value="{{ $rol->id }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Estas seguro que deseas eliminar el rol "<b>{{ $rol->name }}</b>"?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Si! Eliminar</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- FIN MODAL ELIMINAR ROL --}}

{{-- MODAL EDITAR ROL --}}
<div class="modal fade" id="edit_rol_{{ $rol->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('rol.update', $rol) }}" id="form_edit_rol_{{ $rol->id }}" method="POST">
            @csrf
            @method('PUT');
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar rol</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="rol_id" value="{{ $rol->id }}">
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" value="{{ $rol->name }}" placeholder="Ingrese rol..." required onfocus="">
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
{{-- FIN MODAL EDITAR ROL --}}

{{-- MODAL CREAR ROL --}}
<div class="modal fade" id="create_rol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('rol.store') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear rol</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Ingrese rol..." required onfocus="">
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


