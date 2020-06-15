@extends('layout._layout')

@section('page', 'Inicio')

@section('style')
    <style>
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
                @if (count($prontuarios) > 0)
                    @foreach ($prontuarios as $prontuario)
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
                                    PDF
                                </th>
                            </thead>
                                <tbody>
                                    <td>
                                        {{ $prontuario['idProntuario'] }}
                                    </td>
                                    <td>
                                        {{ date('d/m/Y', strtotime($prontuario['data'])) }}
                                    </td>
                                    <td>
                                        {{ $prontuario['fisio'] }}
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-sm" href="{{ route('pdf-prontuario', $prontuario['idProntuario']) }}">
                                            <i class="fas fa-file-download"></i>
                                            PDF
                                        </a>
                                    </td>
                                </tbody>
                        </table>
                    @endforeach
                @else
                    <div class="alert alert-danger" role="alert">
                        Não existem prontuários cadastrados.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection