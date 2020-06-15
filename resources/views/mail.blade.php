<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <style>
        * {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Seja bem-vindo {{ $nome }}</h1>
    <h3>Dados:</h3>
    <p>
        <strong>
            Nome:
        </strong>
        {{ $nome }}
    </p>
    <p>
        <strong>
            Data do cadastro
        </strong>
        {{ date('d/m/Y', strtotime($data_cadastro)) }}
    </p>
    <h3>Clique aqui para cadastrar sua senha:</h3>
    <a>{{ $route }}</a>
</body>
</html>