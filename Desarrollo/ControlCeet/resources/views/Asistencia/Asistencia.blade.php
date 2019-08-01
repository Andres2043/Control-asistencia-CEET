@extends('Layout/HomeLayout')

@section('Asistencia')

<div class="row">
	<div class="col s2"></div>

	<div class="col s8">
		<h2 style="font-family: 'Courier New'">Listado asistencia</h2>
		<br><br>
		 <table class="">
        <thead>
          <tr>
          	<th>Numero ficha</th>
          	<th>Nombre ficha</th>
          	<th>Jornada</th>
          	<th>Show</th>

          </tr>
        </thead>

	     <tbody>
         <tr>
        		<td>name1</td>
        		<td>name2</td>
        		<td>name3</td>
        		<td><button>boton1</button></td>
        	</tr>
        	<tr>
        		<td>ficha1</td>
        		<td>ficha2</td>
        		<td>ficha3</td>
        		<td><button>boton1</button></td>
        	</tr>
        	<tr>
        		<td>Jornada1</td>
        		<td>Jornada2</td>
        		<td>Jornada3</td>
        		<td><button>boton1</button></td>
        	</tr>
        


        </tbody>
      </table>
	</div>
	<div class="col s2"></div>
</div>

@endsection