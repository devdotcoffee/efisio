@extends('layout._layout')

@section('page', 'Inicio')

@section('style')
    <style>
        body {
            background: url("{{ asset('img/bkg-e-fisio.svg') }}") no-repeat center fixed;
            background-size: cover;
        }
        .btn-dark {
            border: 2px solid #5B5B5B !important;
            color: #5B5B5B ;
            background-color: transparent;
            font-weight: 500;
        }
        .btn-dark:hover {
            background-color: #5B5B5B;
            color: #fff !important;
            border: 2px solid #fff !important;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .btn-dark:active {
            background-color: #5B5B5B !important;
            color: #fff !important;
            border: 2px solid #fff !important;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .card-header, .card-footer {
            background-color: transparent;
        }
    </style>
@endsection
@section('fisio')
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-header">
                <h3>Lista de Fisios</h3>
            </div>
            <div class="card-body">
                @if (count($fisios) > 0)
                    <div class="mb-2">
                        <form>
                            <div class="input-group mb-2 w-100">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="inputPesquisa" placeholder="Pesquise...">
                            </div>
                        </form>
                    </div>
                    <table class="table table-hover table-sm" id="tableFisio">
                        <thead>
                            <th>
                                #
                            </th>
                            <th>
                                Fisio
                            </th>
                            <th>
                                CREFITO
                            </th>
                            <th>
                                Ações
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($fisios as $fisio)
                                <tr>
                                    <td>
                                        {{ $fisio['idFisioterapeuta'] }}
                                    </td>
                                    <td>
                                        {{ $fisio['nome'] }}
                                    </td>
                                    <td>
                                        {{ $fisio['crefito'] }}
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('editar-fisio', $fisio['idFisioterapeuta']) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
                @else
                    <div class="alert alert-danger" role="alert">
                        <p class="alert-text text-center">
                            Não existem registros de fisioterapeutas cadastrados.
                        </p>
                    </div>
                    <a type="button" class="btn btn-dark" href="{{ route('cadastro-fisio') }}">
                        + Fisio
                    </a>
                @endif
            </div>
            <div class="card-footer">
                <a type="button" class="btn btn-dark" href="">
                    + Fisio
                </a>
            </div>
        </div>
    </div>
@endsection