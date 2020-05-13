@extends('layout._layout')

@section('page', 'Inicio')

@section('style')
    <style>
        body {
            background: url("{{ asset('img/bkg-e-fisio.svg') }}") no-repeat center fixed;
            background-size: cover;
        }
        #logo-login {
            width: 100%;
        }
        .card-paciente {
            margin-top: 2%;
            margin-left: 5%;
            width: 80%;
        }
        .collapse-header {
            background-color: #5b5b5b;
        }
        .collapse-header > h2 > .btn {
            color: #fff;
        }
        .navDiv {
            width: 20%;
        }
        .nav-item > a {
            text-align: left;
            font-size: 10pt;
            color: #000;
            font-weight: bold;
        }
        .nav-item > a:hover {
            margin-left: 10px;
        }
        .logoutBtn {
            background-color: #D86A6A;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .indexBtn {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            background-color: #fff; 
        }
        ul {
            border-radius: 4px;
        }
        th, td {
            text-align: center;
        }
    </style>
@endsection
@section('paciente')
        <div class="card card-paciente">
            <div class="card-body">
                <h2 class="card-title">Bem-vindo Erick</h2>
                <hr>
                <h3>Aqui estão seus prontuários</h3>
                <hr>
                <table class="table table-hover table-sm table-bordered">
                    <thead>
                        <th>
                            #
                        </th>
                        <th>
                            Data
                        </th>
                        <th>
                            Fisio
                        </th>
                        <th>
                            Exibir
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                20/04/2020
                            </td>
                            <td>
                                Fernando Neves
                            </td>
                            <td>                                
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalProntuario">
                                    Exibir
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                20/04/2020
                            </td>
                            <td>
                                Fernando Neves
                            </td>
                            <td>                   
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalProntuario">
                                    Exibir
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade modalProntuario" tabindex="-1" role="dialog" aria-labelledby="prontuario" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"> Prontuário - Data 20/04/2020</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="accordion" id="accordionProntuario">
                    <div class="card">
                      <div class="card-header collapse-header" id="avaliacao">
                        <h2 class="mb-0">
                          <button class="btn" type="button" data-toggle="collapse" data-target="#avaliacaoDados" aria-expanded="true" aria-controls="avalicaoDados">
                            Avaliação
                          </button>
                        </h2>
                      </div>
                  
                      <div id="avaliacaoDados" class="collapse show" aria-labelledby="avalicaoDados" data-parent="#accordionProntuario">
                        <div class="card-body">
                            <h4>Diagnóstico Clínico:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae autem itaque</p>
                            <h4>História Clínica:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem doloremque laborum aspernatur, voluptas tempora modi corrupti maiores beatae maxime nemo</p>
                            <h4>Queixa Principal do Paciente:</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur aut enim nostrum similique animi suscipit corrupti optio dolorem officiis maxime voluptatem consequuntur</p>
                            <h4>Hábitos de Vida:</h4>
                            <p>Não informado</p>
                            <h4>HMA:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit alias repellendus cum suscipit eaque eos repudiandae necessitatibus voluptatem molestiae laudantium possimus libero quos ratione totam dolores provident magnam, sunt rem.</p>
                            <h4>HMP:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum libero nesciunt natus, dolor possimus eos placeat provident reprehenderit tempora, et veritatis fugiat explicabo, fuga consequuntur? Necessitatibus iste culpa quia earum?</p>
                            <h4>Antecedentes Pessoais:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius laudantium est, ipsam, nam quaerat ad veniam assumenda itaque earum voluptatibus corrupti a numquam vitae quibusdam atque sit? Ut, quisquam excepturi.</p>
                            <h4>Antecedentes Familiares:</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati consequatur nulla a voluptatem dignissimos aliquam labore explicabo at, ab inventore fuga necessitatibus ipsum ipsa nesciunt minima id nam! Laudantium, quidem.</p>
                            <h4>Tratamentos Realizados:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, adipisci, sint laboriosam odio in, nesciunt excepturi tempora animi veniam rerum cupiditate? Doloremque veritatis molestiae recusandae repellendus amet. Consequuntur, totam velit!</p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header collapse-header" id="exame">
                        <h2 class="mb-0">
                          <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#exameDados" aria-expanded="false" aria-controls="exameDados">
                            Exame Clínico/Físico
                          </button>
                        </h2>
                      </div>
                      <div id="exameDados" class="collapse" aria-labelledby="exameDados" data-parent="#accordionProntuario">
                        <div class="card-body">
                            <h4>Apresentação do paciente:</h4>
                            <p>Não informado</p>
                            <h4>Exames Complementares:</h4>
                            <p></p>
                            <h4>Usa Medicamentos:</h4>
                            <p></p>
                            <h4>Realizou cirurgia:</h4>
                            <p></p>
                            <h4>Inspeção:</h4>
                            <p></p>
                            <h4>Semiologia:</h4>
                            <p></p>
                            <h4>Testes Especificos:</h4>
                            <p></p>
                            <h4>Intensidade da Dor:</h4>
                            <p></p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header collapse-header" id="planoTerapeutico">
                        <h2 class="mb-0">
                          <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#planoDados" aria-expanded="false" aria-controls="planoDados">
                            Plano Terapêutico
                          </button>
                        </h2>
                      </div>
                      <div id="planoDados" class="collapse" aria-labelledby="planoTerapeutico" data-parent="#accordionProntuario">
                        <div class="card-body">
                            <h4>Objetivo de Tratamento:</h4>
                            <p></p>
                            <h4>Recursos Terapêuticos:</h4>
                            <p></p>
                            <h4>Plano Terapêutico:</h4>
                            <p></p>
                            <h4>Diagnóstico Fisioterapeutico:</h4>
                            <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger">
                    Gerar PDF
                </button>
            </div>
        </div>
    </div>
    </div>
@endsection