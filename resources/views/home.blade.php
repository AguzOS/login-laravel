@extends('app')
@section('content')
    @auth
        <p>Hola <b>{{ Auth::user()->name }}</b></p>
        <a class="btn btn-primary" href="">No funciono</a>
    @endauth

    @guest
        <a class="btn btn-primary" href="{{ route('login') }}">Iniciar</a>
        <a class="btn btn-info" href="{{ route('register') }}">Registrar</a>
    @endguest
@endsection