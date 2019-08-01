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
			<form action="" method="POST">
					<h2 style="font-family: 'Courier New';">Registro Ficha</h2>
					<br>
				<div class="input-field ">
					<input id="last_name" type="text" class="validate">
		          	<label for="last_name">Nombre Ficha</label>
				</div>
				<br>
				<div class="input-field ">
					<input id="" type="number" class="validate">
		          	<label for="last_name">Numero Ficha</label>
				</div>
				<br>
				<div class="input-field ">
					<input id="" type="text" class="validate">
		          	<label for="last_name">Jornada</label>
				</div>
				  
				 <input type="submit" value="Registrar"> 
        	</form>
		</div>
	</div>
	<div class="col s2"></div>
</div>
@endsection