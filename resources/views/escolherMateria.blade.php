<!-- selecionar-materia.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Matéria</title>
</head>
<body>
    <h1>Selecionar Matéria</h1>
    <p>Olá, {{ $pessoa->nome }}! Selecione suas matérias:</p>
<form action="{{ route('salvarMaterias') }}" method="post">
    @csrf
    <input type="hidden" name="pessoa_id" value="{{ $pessoa->id }}">
    <label for="materia1">
        <input type="radio" id="materia1" name="materia_id" value="1"> DS 1
    </label><br>
    <label for="materia2">
        <input type="radio" id="materia2" name="materia_id" value="2"> DS 2
    </label><br>
     <label for="materia3">
        <input type="radio" id="materia3" name="materia_id" value="3"> DS 3
    </label><br>
     <label for="materia4">
        <input type="radio" id="materia4" name="materia_id" value="4"> CTB 1
    </label><br>
     <label for="materia5">
        <input type="radio" id="materia5" name="materia_id" value="5"> CTB 2
    </label><br>
     <label for="materia6">
        <input type="radio" id="materia6" name="materia_id" value="6"> CTB 3
    </label><br>
     <label for="materia7">
        <input type="radio" id="materia7" name="materia_id" value="7"> MULT 1
    </label><br>
     <label for="materia8">
        <input type="radio" id="materia8" name="materia_id" value="8"> MULT 2
    </label><br>
     <label for="materia9">
        <input type="radio" id="materia9" name="materia_id" value="9"> MULT 3
    </label><br>
     <label for="materia10">
        <input type="radio" id="materia10" name="materia_id" value="10"> RDS
    </label><br>

    <button type="submit">Associar Matéria</button>
</form>

</body>
</html>
