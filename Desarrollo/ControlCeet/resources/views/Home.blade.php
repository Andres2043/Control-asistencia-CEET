@extends('Layout/layout')

@section('Login')
<div style="">
    <form action="{{ route('LoginInicio.Index')}}" class="box" method="POST">
		 @csrf
        <h1>Login</h1>
        <input type="email" placeholder="Correo" name="correo" value="{{ old('correo') }}">
        <input type="password" placeholder="Contraseña" name="password" value="{{ old('password') }}">
        <input type="submit" value="Iniciar sesión">


    </form>
</div>
@endsection

