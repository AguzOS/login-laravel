@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            
            @if($errors->any())
                @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('login.action') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Usuario <span class="text-danger">*</span></label>
                    <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                </div>
                <div class="mb-3">
                    <label>Contraseña <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Iniciar</button>
                    <a class="btn btn-danger" href="{{ route('home') }}">Regresar</a>
                </div>
            </form>
        </div>
    </div>
@endsection