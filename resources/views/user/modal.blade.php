{{-- MODAL CREAR ROL --}}
<div class="modal fade" id="create_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Ingrese Nombres..." required onfocus="">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-archive"></i></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Ingrese Email..." required onfocus="">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-archive"></i></span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password"
                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                            placeholder="{{ __('adminlte::adminlte.password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                            </div>
                        </div>
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                        @endif
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
{{-- Cerrar modal --}}

{{-- MODAL EDITAR user --}}
<div class="modal fade" id="edit_user_{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('user.update', $user) }}" id="form_edit_user_{{ $user->id }}" method="POST">
            @csrf
            @method('PUT');
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" value="{{ $user->name }}" placeholder="Ingrese Nombres..." required autofocus>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-archive"></i></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" value="{{ $user->email }}">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-archive"></i></span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-outline-info">Si! Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- FIN MODAL EDITAR ROL --}}


{{-- MODAL ELIMINAR ROLES --}}
<div class="modal fade" id="delete_user_{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('user.destroy', $user ) }}" id="form_delete_user_{{ $user->id }}" method="POST">
            @csrf
            @method('DELETE');
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if($user->status=='A')
                        Estas seguro que deseas inhabilitar el area "<b>{{ $user->name }}</b>"?
                    @else
                        Estas seguro que deseas habilitar el area "<b>{{ $user->name }}</b>"?
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    @if($user->status=='A')
                        <button type="submit" class="btn btn-danger">Si! Inhabilitar</button>
                    @else
                        <button type="submit" class="btn btn-outline-success">Si! Habilitar</button>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
{{-- FIN MODAL ELIMINAR ROL --}}
