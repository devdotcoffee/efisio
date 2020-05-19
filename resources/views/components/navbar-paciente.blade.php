<div class="container d-flex flex-row">
  <div class="navDiv">
    <img id="logo-login" src="{{ asset('img/logo-e-fisio.svg') }}" alt="Logo e-fisio">
      <ul class="nav flex-column">
        <li class="nav-item indexBtn">
          <a class="nav-link" href="#">Meus prontuários</a>
        </li>
        <li class="nav-item logoutBtn">
          <a class="nav-link" href="{{ route('tela-login') }}" aria-disabled="true">Sair</a>
        </li>
      </ul>         
</div>