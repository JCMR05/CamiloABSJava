<div class="modal fade" id="modal-toggle-{{$registro -> id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content {{ $registro -> activo ? 'bg-success' : 'bg-warning' }}">
            <form action="{{route('usuario.toggle', $registro -> id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="modal-header">
                    <h4 class="modal-title">{{ $registro -> activo ? 'Desactivar' : 'Activar' }} registro</h4>
                </div>
                <div class="modal-body">
                    ¿Usted desea {{ $registro -> activo ? 'desactivar' : 'activar' }} el registro {{$registro -> name}} ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-outline-light">{{ $registro -> activo ? 'Desactivar' : 'Activar' }}</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>