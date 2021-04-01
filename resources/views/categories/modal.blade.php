{{-- MODAL CREAR CATEGORIA --}}
<div class="modal fade" id="create_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Ingrese Categoría..." required onfocus="name">
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
{{-- FIN MODAL CREAR CATEGORIA --}}

  {{-- MODAL ELIMINAR category --}}
  <div class="modal fade" id="delete_category_{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('category.destroy', $category->id) }}" id="form_delete_category_{{ $category->id }}" method="POST">
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
                    @if($category->status=='A')
                        Estas seguro que deseas inhabilitar la Categoria "<b>{{ $category->name }}</b>"?
                    @else
                        Estas seguro que deseas habilitar la Categoria "<b>{{ $category->name }}</b>"?
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    @if($category->status=='A')
                        <button type="submit" class="btn btn-danger">Si! Inhabilitar</button>
                    @else
                        <button type="submit" class="btn btn-danger">Si! Habilitar</button>
                    @endif

                </div>
            </div>
        </form>
    </div>
</div>
{{-- FIN MODAL ELIMINAR category --}}

{{-- MODAL EDITAR category --}}
<div class="modal fade" id="edit_category_{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('category.update', $category) }}" id="form_edit_category_{{ $category->id }}" method="POST">
            @csrf
            @method('PUT');
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" value="{{ $category->name }}" placeholder="Ingrese una Categoria..." required autofocus>
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
{{-- FIN MODAL EDITAR category --}}



