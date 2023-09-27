
@extends('layouts.auth-master')
@section('content')

    
    <form action="{{route("registrar")}}" method="post">
        @csrf

        <h1>Registro</h1>
        @include('layouts.partials.messages')

        <div class="form-floating mb-3">
            <input type="text" name="username"  placeholder class="form-control" id="username" aria-describedby="username">
          <label for="username" class="form-label" >Nombre de Usuario</label>
       
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email"  placeholder  class="form-control" id="email" aria-describedby="email">
            <label for="email" class="form-label">Email</label>
           
          </div>
        <div class=" form-floating mb-3">
          <input type="password" name="password"   placeholder class="form-control" id="exampleInputPassword1">

          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation"  placeholder class="form-control" id="exampleInputPassword2">
            <label for="exampleInputPassword2" class="form-label">Confirme la Contraseña</label>
           
          </div>
        <div class="mb-3">
        
            <p>¿Ya tiene una cuenta?   <a href="{{route('login')}}">Iniciar Sesión</a><p>

        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </form>

    @endsection
 