{{-- MODAL CREAR SECTOR --}}
<div class="modal fade" id="create_sector" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('sector.store') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Sector</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Ingrese Sector..." required onfocus="">
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
{{-- FIN MODAL CREAR SECTOR --}}


{{-- MODAL EDITAR SECTOR --}}
<div class="modal fade" id="edit_sector_{{ $sector->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('sector.update', $sector) }}" id="form_edit_sector_{{ $sector->id }}" method="POST">
            @csrf
            @method('PUT');
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Sector</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="sector_id" value="{{ $sector->id }}">
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" value="{{ $sector->name }}" placeholder="Ingrese Sector..." required onfocus="">
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
{{-- FIN MODAL EDITAR SECTOR --}}

{{-- MODAL ELIMINAR SECTOR --}}
<div class="modal fade" id="delete_sector_{{ $sector->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('sector.destroy', $sector->id ) }}" id="form_delete_sector_{{ $sector->id }}" method="POST">
            @csrf
            @method('DELETE');
            <input type="hidden" name="sector_id" value="{{ $sector->id }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Estas seguro que deseas eliminar el Sector "<b>{{ $sector->name }}</b>"?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Si! Eliminar</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- FIN MODAL ELIMINAR SECTOR --}}
