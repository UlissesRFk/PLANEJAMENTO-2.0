<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/sass/app.scss', 'resources/js/app.js')
    <link rel="shortcut icon" type="image/jpg" href="{{asset('img/logo.png')}}"/>
    <title>FERIADOS | Planejamento 2.0</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Lista de Feriados</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                    <th scope="col">Mês</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feriados as $feriado)
                    <tr>
                        <td>{{ $feriado->nome }}</td>
                        <td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $feriado->data)->format('d/m/Y') }}</td>
                        <td>{{ $feriado->nome_mes }}</td>
                        <td>
                            <form action="{{ route('DeletarFeriado', $feriado->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja deletar este feriado?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
