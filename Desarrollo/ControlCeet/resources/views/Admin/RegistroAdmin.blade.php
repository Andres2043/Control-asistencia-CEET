@extends('Layout/HomeLayout')

@section('RegistroAdmin')

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
			<form action="{{ route('RegistroAdmin.Login')}}" method="POST">
				@csrf
						<h2 style="font-family: 'Courier New';">Registro Usuario</h2>
					<br>
				<div class="input-field ">
			    <select name="TipoDocumento">
			      <option value="" disabled selected>Seleccione su documento</option>
			      @foreach($tipodocumento as $tipodoc)
			      	<option value="{{ $tipodoc->id_documento}}">{{ $tipodoc->tp_documento }}</option>
			      @endforeach
			    </select>
			    <label>Tipo de documento</label>
			    {!! $errors->first('TipoDocumento', '<span class="help-block">:message</span>')!!}
			  </div>
			  <br>
				<div class="input-field ">
					<input 
						id=""
						name="NumeroDocumento" 
						type="number"
						value="{{ old('NumeroDocumento')}}">
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
				<div class="input-field ">
					<input 
						id="" 
						name="Contraseña" 
						type="password"
						value="{{ old('Contraseña')}}">
		          	<label for="">Contraseña</label>
		          	{!! $errors->first('Contraseña', '<span class="help-block">:message</span>')!!}
				</div>
				<br> 
				 <input type="submit" value="Registrar"> 

        	</form>
		</div>
	</div>
	<div class="col s2"></div>
</div>


@endsection