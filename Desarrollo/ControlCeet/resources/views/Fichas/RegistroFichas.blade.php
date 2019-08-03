@extends('Layout/HomeLayout')

@section('RegistroFicha')
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
			<form action="{{ route('FichaLogin.login')}}" method="POST">
				@csrf
					<h2 style="font-family: 'Courier New';">Registro Ficha</h2>
					<br>
				<div class="input-field ">
					<input 
					id="" 
					name="NombreFicha" 
					type="text"
					value="{{ old('NombreFicha')}}">
		          	<label for="last_name">Nombre Ficha</label>
		          	{!! $errors->first('NombreFicha', '<span class="help-block">:message</span>')!!}
				</div>
				<br>
				<div class="input-field ">
					<input 
					id="" 
					name="NumFicha" 
					type="number" 
					value="{{ old('NumFicha')}}">
		          	<label for="last_name">Numero Ficha</label>
		          	{!! $errors->first('NumFicha', '<span class="help-block">:message</span>')!!}
				</div>
				<br>
				 <div class="input-field">
			    <select name="Jornada">
			      <option value="" disabled selected>Seleccione la jornada</option>
			      <option value="">Option 1</option>
			    </select>
			    <label>Jornada</label>
			    {!! $errors->first('Jornada', '<span class="help-block">:message</span>')!!}
			  </div>
				  
				 <input type="submit" value="Registrar"> 
        	</form>
		</div>
	</div>
	<div class="col s2"></div>
</div>
@endsection