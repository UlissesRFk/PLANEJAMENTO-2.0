<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUNO | Planejamento 2.0</title>
</head>
<body>
    <h1>INÍCIO ALUNO</h1>
    @if ($pessoa)
        <table>
            <thead> 
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>{{ $pessoa->email }}</td>
                    <td>{{ $pessoa->senha }}</td>
                    <td>{{ $pessoa->tipo }}</td>
                </tr>
            </tbody>
        </table>
    @else
        <p>Nenhuma pessoa encontrada.</p>
    @endif
</body>
</html>
