<nav class="navbar navbar-expand-lg d-flex justify-content-between">
  <a class="" href="{{ route('fisio.home') }}">
    <img id="logo-login" src="{{ asset('img/logo-e-fisio.svg') }}" alt="Logo e-fisio" style="height: 90px;">
  </a>
  <div id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link btn-nav" href="{{ route('lista-pacientes') }}">Pacientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-nav" href="{{ route('lista-fisios') }}">Fisioterapeuta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-nav" href="{{ route('lista-fisios') }}">Prontuários</a>
      </li>
    </ul>
  </div>
  <div>
    <button class="btn btn-danger">Sair</button>
  </div>
</nav>