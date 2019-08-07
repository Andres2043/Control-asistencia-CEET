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
					<h2 style="font-family: 'Courier New">Registro Usuario</h2>
					<br>
				<div class="input-fied">
					<select name="TipoDocumento">
						<option value="" disabled selected>Seleccione su documento</option>
						@foreach($tipodocumento as $tipodoc)
				      	<option value="{{ $tipodoc->id_documento}}">{{ $tipodoc->tp_documento }}</option>
				      	@endforeach
					</select>
					<label>Tipo de documento</label>
				</div>
				<br>
				<br>
				<div class="input-fied">
					<select name="TipoUsuario">
						<option value="" disabled selected>Seleccione al usuario</option>
						@foreach($tipousuario as $tipouser)
				      	<option value="{{ $tipodoc->id_documento}}">{{ $tipodoc->tp_documento }}</option>
				      	@endforeach
					</select>
					<label>Tipo de usuario</label>
				</div>
				<br>
				<div class="input-field ">
					<input 
						id="" 
						name="PrimerNombre" 
						type="text"
						value="{{ old('PrimerNombre')}}">
		          	<label for="">Primer Nombre</label>
		          	
				</div>
				<br>
				<div class="input-field ">
					<input 
						id="" 
						name="SegundoNombre" 
						type="text"
						value="{{ old('SegundoNombre')}}">
		          	<label for="">Segundo Nombre</label>
		          	
				</div>
				<br>
				<div class="input-field ">
					<input 
						id="" 
						name="PrimerApellido" 
						type="text"
						value="{{ old('PrimerApellido')}}">
		          	<label for="">Primer Apellido</label>
		          	
				</div>
				<br>
				<div class="input-field ">
					<input 
						id="" 
						name="SegundoApellido" 
						type="text"
						value="{{ old('SegundoApellido')}}">
		          	<label for="last_name">Segundo Apellido</label>
		          	
				</div>
				<br>
				<div class="input-field ">
					<input 
						id="" 
						name="correo" 
						type="text"
						value="{{ old('correo')}}">
		          	<label for="">Correo</label>
		          	
				</div>
				<br> 
				 <input type="submit" value="Registrar"> 
        	</form>
		</div>
	</div>
	<div class="col s2"></div>
</div>

@endsection