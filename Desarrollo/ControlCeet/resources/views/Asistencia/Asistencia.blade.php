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
          	<th>Aprendices</th>

          </tr>
        </thead>

	     <tbody>
         <tr>
        		<td>Numero 1</td>
        		<td>Nombre 1</td> 
        		<td>Nocturna/Diurna/Fines de semana</td>
        		<td><button data-target="modal1" class="btn modal-trigger">Ver</button></td>
        	</tr>
        	<tr>
        	
        


        </tbody>
      </table>
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Listado Ficha</h4>
      <p>Aprendiz numero 1</p>
    </div>
    <div class="modal-footer">
       <a href="{{ route('ListadoAprendiz.Listado')}}" class="modal-close waves-effect waves-green btn-flat">Hacer listado</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
	</div>
	<div class="col s2"></div>
</div>

@endsection