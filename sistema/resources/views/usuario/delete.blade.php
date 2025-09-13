<div class="modal fade" id="modal-eliminar-{{$registro -> id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <form action="{{route('usuario.destroy', $registro -> id)}}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar registro</h4>
                </div>
                <div class="modal-body">
                    ¿Usted desea eliminar el registro {{$registro -> name}} ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-outline-light">Eliminar</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>