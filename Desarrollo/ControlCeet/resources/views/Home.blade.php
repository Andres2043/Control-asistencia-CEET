@extends('Layout/layout')

@section('Login')
<div style="">
    <form action="" class="box">
        <h1>Login</h1>
        <input type="email" placeholder="Correo" name="correo" value="{{ old('correo') }}">
        <input type="password" placeholder="Contraseña" name="password" value="{{ old('password') }}">
        <input type="submit" value="Iniciar sesión">


    </form>
</div>
@endsection

