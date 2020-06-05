<nav class="navbar navbar-expand-lg d-flex justify-content-between">
  <a class="" href="{{ route('fisio.home') }}">
    <img id="logo-login" src="{{ asset('img/logo-e-fisio.svg') }}" alt="Logo e-fisio" style="height: 90px;">
  </a>
  <div id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link btn-nav" href="{{ route('lista-pacientes') }}">Pacientes</a>
      </li>
      @if (Auth::guard('fisio')->check())
        @if (Auth::guard('fisio')->user()->permissao == 'Administrador')
          <li class="nav-item">
            <a class="nav-link btn-nav" href="{{ route('lista-fisios') }}">Fisioterapeuta</a>
          </li>
        @endif
      @endif
      <li class="nav-item">
        <a class="nav-link btn-nav" href="{{ route('lista-prontuarios') }}">Prontuários</a>
      </li>
    </ul>
  </div>
  <div>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalSair">
      Sair
    </button>
  </div> 
</nav>
<div class="modal fade" id="modalSair" tabindex="-1" 
        role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmar:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <p class="modal-text">
                        Tem certeza que deseja sair?
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-block" type="button" data-dismiss="modal" aria-label="Fechar" id="closeModalDelete">
                        Cancelar
                    </button>
                    <a  href="{{ route('tela-login') }}" class="btn btn-danger btn-block" type="button" aria-label="Deletar" id="btnDeleteConfirm" data-id="">
                        Sair
                    </a>
                </div>
            </div>
        </div>
    </div>