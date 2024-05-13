<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUNO | Planejamneto 2.0</title>
</head>
<body>
    <h1>INICIO ALUNO</h1>
    <table>
    <thead> 
        <tr>
            <th scope="col">#</th>
            <th scope="col">email</th>
            <th scope="col">senha</th>
            <th scope="col">tipo</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($pessoas as $pessoa)
         <tr>
            <th scope="row"> 1 </th>
            <th> {{$pessoa -> email}}</th>
        </tr>
    @endforeach 
    </tbody>
    <table>
</body>
</html>