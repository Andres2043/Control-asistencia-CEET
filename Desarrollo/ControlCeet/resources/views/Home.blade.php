@extends('Layout/layout')

@section('Login')
<div style="">
    <form action="{{ route('LoginInicio.Login')}}" class="box" method="POST">
		 @csrf
        <h1>Login</h1>
        <input type="text" 
        		placeholder="Correo" 
        		name="email" 
        		value="{{ old('email') }}">
        	{!! $errors->first('email', '<span class="help-block">:message</span>')!!}	
        <input type="password" 
        		placeholder="Contraseña" 
        		name="password" 
        		value="{{ old('password') }}">
        	{!! $errors->first('password', '<span class="help-block">:message</span>')!!}
        <input type="submit" value="Iniciar sesión">



    </form>
</div>
@endsection

