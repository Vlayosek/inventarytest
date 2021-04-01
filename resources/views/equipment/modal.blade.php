 {{-- MODAL ELIMINAR AREA --}}
 <div class="modal fade" id="delete_equipo_{{ $equipo->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('activeequipment.destroy', $equipo->id) }}" id="form_delete_equipo_{{ $equipo->id }}" method="POST">
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
                        Estas seguro que deseas eliminar el Equipo Activo?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Si! Inhabilitar</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- FIN MODAL ELIMINAR AREA --}}
