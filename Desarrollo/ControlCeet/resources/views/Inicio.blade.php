@extends('Layout/HomeLayout')

@section('Inicio')

<!-- Navbar-->


    <!-- <a style="color: red;" href="#"  data-target="slide-out" class="sidenav-trigger ">HOLA</a> -->

    <!-- Inicio -->
    <div class="body">
         <div class="container">
       
        <div class="boxInicio">
            <div class="content">
                <h1>01</h1>
                  <h3>Control asistencia</h3>
                    <p>En este espacio podras generar el listado de asistencias de cada ficha en el ceet, tambien hacer una busqueda de los estudiantes, fichas y docentes registrados en la plataforma.</p>
                    <a href="{{ route('AsistenciaAprendices.Index')}}">Listado</a>
            </div>
        </div>
        <div class="boxInicio">
            <div class="content">
                <h1>02</h1>
                  <h3>Fichas</h3>
                    <p>En este espacio de trabajo vas a poder crear una nueva ficha en el CEET, ten encuenta que esta tendrá datos especificos los cuales son prioritaros para su creación.
                    </p>
                    <a href="{{ route('RegistroFichas.Index')}}">Crear ficha</a>
            </div>
        </div>
        <div class="boxInicio">
            <div class="content">
                <h1>03</h1>
                  <h3>Registro administrador</h3>
                    <p>En este espacio podras registrar los nuevos usuarios de la plataforma, los cuales podran tener permisos especiales en esta para poder registrar fichas, docentes y aprendices.
                    </p>
                    <a href="{{ route('RegistroAdmin.Index')}}">Crear Administrador</a>
            </div>
        </div>
        <div class="boxInicio">
            <div class="content">
                <h1>04</h1>
                  <h3>Registro de usuario</h3>
                    <p>En este espacio podras crear un nuevo usuario en la plataforma, ya sea Docente o aprendiz del CEET con tus privilegios de administrador.
                    </p>
                    <a href="{{ route('RegistroUsuarios.Index')}}">Crear Usuario</a>
            </div>
        </div>
      </div>
    </div>
    
@endsection
