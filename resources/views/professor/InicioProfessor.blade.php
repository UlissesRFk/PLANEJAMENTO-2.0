<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela professor</title>
    <link rel="stylesheet" href="{{asset('css/professor.css')}}">
</head>
<body>
    <div class="container">
        <div class="student">
            <img src="{{asset('imgProfessor/prof.svg')}}" alt="">
        </div>

        <div class="info">
            <h1>Nome do professor</h1>


            <div class="button-schedule">
                <button type="button" class="button-planejamento">
                    Planejamento
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
            <img src="{{asset('imgProfessor/x.png')}}" class="x" alt="">
            <div class="img-example">
                <img src="{{asset('imgProfessor/triangulo.png')}}" class="triangulo" alt="triangulo verde">
            </div>


        </div>
    </div>
</body>
</html>