<ul id="dropdown1" class="dropdown-content">
  <li><a href="#"><i class="material-icons">account_circle</i> Perfil</a></li>
  <li class="divider"></li>
  <li><a href="{{ route('Login.Index')}}"><i class="material-icons">exit_to_app</i> Salir</a></li>
</ul>
<nav>
  <div class="nav-wrapper" style="background-color: #4caf50">
    <a href="{{ route('Inicio.Index')}}" class="brand-logo"><img style="width: 50px; height: 50px; position: relative; left: 50%" src="{{ asset('IMG/Sena2.png')}}" alt=""></a>
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