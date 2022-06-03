@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if($errors->any())
                @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('register.action') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Nombre <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label>Usuario <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                </div>
                <div class="mb-3">
                    <label>Contraseña <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label>Confirmar contraseña <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password_confirm">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Registrar</button>
                    <a class="btn btn-danger" href="{{ route('home') }}">Regresar</a>
                </div>
            </form>
        </div>
    </div>
@endsection