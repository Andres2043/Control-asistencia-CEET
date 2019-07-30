@extends('Layout/HomeLayout')

@section('Inicio')

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
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
  
    
    
    <a style="color: red;" href="#"  data-target="slide-out" class="sidenav-trigger ">HOLA</a>
    
@endsection