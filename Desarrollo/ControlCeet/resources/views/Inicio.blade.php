@extends('Layout/HomeLayout')

@section('Inicio')

<!-- Navbar-->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!"><i class="material-icons">account_circle</i> Perfil</a></li>
  <li class="divider"></li>
  <li><a href="#!"><i class="material-icons">exit_to_app</i> Salir</a></li>
</ul>
<nav>
  <div class="nav-wrapper" style="background-color: #4caf50">
    <a href="#!" class="brand-logo"><img style="width: 50px; height: 50px; position: relative; left: 50%" src="{{ asset('IMG/Sena2.png')}}" alt=""></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#">Por editar</a></li>
      <li><a href="#">Por editar</a></li>
      <!-- Sidebar -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Mi perfil<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

  <ul id="slide-out" class="sidenav">
      <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque reprehenderit ex quaerat amet veniam molestias
          , et nihil unde eos error in expedita aliquam nulla numquam maxime ab? Magni, at labore?</div>
      <li><div class="divider"></div></li>
      <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque reprehenderit ex quaerat amet veniam molestias
          , et nihil unde eos error in expedita aliquam nulla numquam maxime ab? Magni, at labore?</div>    
    </ul>

    <!-- <a style="color: red;" href="#"  data-target="slide-out" class="sidenav-trigger ">HOLA</a> -->

    <!-- Inicio -->
    <div class="body">
         <div class="container">
       

        <div class="boxInicio">
            <div class="content">
                <h1>01</h1>
                  <h3>Servicio 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, 
                    sequi dolores facere distinctio earum illo atque aut reprehenderit consequuntur 
                    assumenda. Quas delectus perspiciatis veniam rerum distinctio ad cum molestiae dignissimos.
                    </p>
                    <a href="#">Leer mas</a>
            </div>
        </div>
        <div class="boxInicio">
            <div class="content">
                <h1>02</h1>
                  <h3>Servicio 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, 
                    sequi dolores facere distinctio earum illo atque aut reprehenderit consequuntur 
                    assumenda. Quas delectus perspiciatis veniam rerum distinctio ad cum molestiae dignissimos.
                    </p>
                    <a href="#">Leer mas</a>
            </div>
        </div>
        <div class="boxInicio">
            <div class="content">
                <h1>03</h1>
                  <h3>Servicio 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, 
                    sequi dolores facere distinctio earum illo atque aut reprehenderit consequuntur 
                    assumenda. Quas delectus perspiciatis veniam rerum distinctio ad cum molestiae dignissimos.
                    </p>
                    <a href="#">Leer mas</a>
            </div>
        </div>
        <div class="boxInicio">
            <div class="content">
                <h1>04</h1>
                  <h3>Servicio 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, 
                    sequi dolores facere distinctio earum illo atque aut reprehenderit consequuntur 
                    assumenda. Quas delectus perspiciatis veniam rerum distinctio ad cum molestiae dignissimos.
                    </p>
                    <a href="#">Leer mas</a>
            </div>
        </div>
      </div>
    </div>
    
@endsection