@extends('plantilla.app')
@section('contenido')
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header"><h3 class="card-title">Usuarios</h3></div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div>
                            <form action="" method="get">
                                <div class="input-group">
                                    <input name="texto" type="text" class="form-control" value="" placeholder="Ingrese texto a buscar">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                            Buscar</button>
                                        <a href="{{ route('usuario.create') }}" class="btn btn-primary">Nuevo</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @if (Session::has('mensaje'))
                            <div class="alert alert-info alert-dismissible fade show mt-2">
                                {{ Session::get('mensaje') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 130px">Opciones</th>
                                    <th style="width: 20px">ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Activo</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if (count($registros) <= 0)
                                        <tr>
                                            <td colspan="4">No hay registros que coincidan con la busqueda</td>
                                        </tr>
                                    
                                    @else
                                    @foreach ($registros as $registro )
                                    
                                    <tr class="align-middle">
                                        <td>
                                            <a href="{{ route('usuario.edit', $registro->id)}}" class="btn btn-info btn-sm"> <i class="bi bi-pencil-fill"></i> </a>&nbsp;
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar-{{$registro -> id}}">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                            <button class="btn {{ $registro -> activo ? 'btn-success' : 'btn-warning'}} btn-sm" data-bs-toggle="modal" data-bs-target="#modal-toggle-{{$registro -> id}}">
                                                <i class="fa-solid {{ $registro -> activo ? 'fa-thumbs-up' : 'fa-thumbs-down'}} "></i>
                                            </button>
                                        </td>
                                  

                                        <td>{{$registro->id }}</td>
                                        <td>{{$registro->name}}</td>
                                        <td>{{$registro->email}}</td>
                                        <td>{{$registro->activo}}</td>
                                    </tr>
                                    @include('usuario.delete')
                                    @include('usuario.activate')
                                    
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        {{ $registros->appends([ 'texto' => $texto ]) }}
                        <ul></ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
@endsection
@push('scripts')
    <script>
        document.getElementById('mnuSeguridad').classList.add('menu-open');
        document.getElementById('itemUsuario').classList.add('active');
    </script>
@endpush