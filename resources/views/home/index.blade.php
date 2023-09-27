
@extends('layouts.app-master')




@section('content')

    <h1>Home</h1>


    @auth
        <p>Bienvenido {{auth()->user()->name ?? Auth::user()->username}}, estás autenticado a la página</p>

        <p>
            <a href="{{route("logout")}}" >cerrar sesión</a>
        </p>
    @endauth

    @guest
        <p>para ver el contenido <a href="{{route("login")}}">Inicia Sesión</a> </p>
    @endguest

    @endsection