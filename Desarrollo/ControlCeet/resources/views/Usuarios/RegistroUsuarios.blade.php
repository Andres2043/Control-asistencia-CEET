@extends('Layout/HomeLayout')

@section('RegistroUsuarios')

<div class="row">
	<div class="col s2">
	</div>
	<div class="col s8">
		<div class="Titulo">
			Bienvenido administrador
		</div>
	</div>

	<div class="col s2">
	</div>
</div>
<br>
<br>
<div class="row">
	<div class="col s2"></div>
	<div class="col s8">
		<div class="SpaceLogin">
			<form action="{{ route('RegistroUser.Login')}}" method="POST">
				@csrf
					<h2 style="font-family: 'Courier New';">Registro Usuario</h2>
				<br>
				<div class="input-field">
			    <select name="TipoUsuario">
			      <option value="" disabled selected>Seleccione el usuario</option>
			      <option value="1">Option 1</option>
			    </select>
			    <label>Tipo de Usuario</label>
			    {!! $errors->first('TipoUsuario', '<span class="help-block">:message</span>')!!}
			  </div>
					<br>
				<div class="input-field">
			    <select name="TipoDocumento">
			      <option value="" disabled selected>Seleccione el documento</option>
			      <option value="1">Option 1</option>
			    </select>
			    <label>Tipo de documento</label>
			    {!! $errors->first('TipoDocumento', '<span class="help-block">:message</span>')!!}
			  </div>
			  <br>
				<div class="input-field ">
					<input 
						id="" 
						name="NumeroDocumento" 
						type="number">
		          	<label for="">Numero de documento</label>
		          	{!! $errors->first('NumeroDocumento', '<span class="help-block">:message</span>')!!}
				</div>
				<div class="input-field ">
					<input 
						id="" 
						name="PrimerNombre" 
						type="text"
						value="{{ old('PrimerNombre')}}">
		          	<label for="">Primer Nombre</label>
		          	{!! $errors->first('PrimerNombre', '<span class="help-block">:message</span>')!!}
				</div>
				<br>
				<div class="input-field ">
					<input 
						id=""
						name="SegundoNombre" 
						type="text"
						value="{{ old('SegundoNombre')}}">
		          	<label for="">Segundo Nombre</label>
		          	{!! $errors->first('SegundoNombre', '<span class="help-block">:message</span>')!!}
				</div>
				<br>
				<div class="input-field ">
					<input 
						id=""
						name="PrimerApellido" 
						type="text"
						value="{{ old('PrimerApellido')}}">
		          	<label for="">Primer Apellido</label>
		          	{!! $errors->first('PrimerApellido', '<span class="help-block">:message</span>')!!}
				</div>
				<br>
				<div class="input-field ">
					<input 
						id="" 
						name="SegundoApellido" 
						type="text"
						value="{{ old('SegundoApellido')}}">
		          	<label for="last_name">Segundo Apellido</label>
		          	{!! $errors->first('SegundoApellido', '<span class="help-block">:message</span>')!!}
				</div>
				<br>
				<div class="input-field ">
					<input 
						id="" 
						name="correo" 
						type="text"
						value="{{ old('correo')}}">
		          	<label for="">Correo</label>
		          	{!! $errors->first('correo', '<span class="help-block">:message</span>')!!}
				</div>
				<br>
				 <input type="submit" value="Registrar"> 
        	</form>
		</div>
	</div>
	<div class="col s2"></div>
</div>

@endsection