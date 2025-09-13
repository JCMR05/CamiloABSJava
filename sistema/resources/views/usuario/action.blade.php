@extends('plantilla.app')
@section('contenido')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Usuarios</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @csrf
                            <form action="{{ isset($registro) ? route('usuario.update', $registro -> id) : route('usuario.store') }}" method="POST" id="formRegistroUsuario">
                                @csrf
                                @if (isset($registro))
                                    @method('PUT')
                                @endif
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control @error('name') is-invalid
                                        @enderror" id="name" name="name" value="{{ OLD('name',$registro -> name ?? '') }}" required>
                                        @error('name')
                                            <small class=" text-danger ">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid
                                        @enderror" id="email" name="email" value="{{ OLD('email',$registro -> email ?? '') }}" required>
                                        @error('email')
                                            <small class=" text-danger ">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="text" class="form-control @error('password') is-invalid
                                        @enderror" id="password" name="password" required>
                                        @error('password')
                                            <small class=" text-danger ">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <select class="form-select" name="activo" id="activo" >
                                            <option value="1" {{old('activo',$registro-> activo ?? '1') == '1' ? 'selected' : ''}}>Activo</option>
                                            <option value="0" {{old('activo',$registro-> activo ?? '1') == '0' ? 'selected' : ''}}>Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-secondary me-md-2"
                                            onclick="window.location.href=''">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">

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