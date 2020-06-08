<div class="container d-flex flex-row">
  <div class="navDiv">
    <img id="logo-login" src="{{ asset('img/logo-e-fisio.svg') }}" alt="Logo e-fisio">
      <ul class="nav flex-column">
        <li class="nav-item indexBtn">
          <a class="nav-link" href="#">Meus prontuários</a>
        </li>
        <li class="nav-item logoutBtn">
          <a type="button" class="btn" data-toggle="modal" data-target="#modalSair">
            Sair
          </a>
        </li>
      </ul>         
</div>
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
                    <a  href="{{ route('logout-paciente') }}" class="btn btn-danger btn-block" type="button" aria-label="Deletar" id="btnDeleteConfirm" data-id="">
                        Sair
                    </a>
                </div>
            </div>
        </div>
    </div>