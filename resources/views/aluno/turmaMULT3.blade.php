<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link rel="stylesheet" href="{{asset('css/aluno.css')}}">
</head>
<body>
    <div class="container">
        <div class="student">
            <img src="{{asset('imgAluno/student.png')}}">
        </div>

        <div class="info">
            <h1>DESENVOLVIMENTO DE SISTEMAS 1</h1>
            <h2>Nome do aluno</h2>

            <div class="button-schedule">
                <button type="button" class="button-horario">
                    H<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-stopwatch" viewBox="0 0 16 16">
                        <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5z"/>
                        <path d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64l.012-.013.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5M8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3"/>
                      </svg>RÁRIOS 
                </button>
                <hr>
            </div>

            <div class="button-holiday">
                <button type="button" class="button-feriados">
                    Feriados
                </button>
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                </svg>
                <hr>
            </div>
            <img src="{{asset('imgAluno/x.png')}}" class="x">
            <div class="img-example">
                <img src="{{asset('imgAluno/triangulo.png')}}" class="triangulo" alt="triangulo verde">
            </div>


        </div>
    </div>
</body>
</html>