<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/feriados.css')}}">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('img/logo.png')}}">
    <title>Cadastrar Feriado</title>
</head>
<body>
    <div class="container">
        <div class="half">
            <div class="image-container">
                <img src="{{asset('img/feriados.png')}}" alt="Imagem" class="image">
                <div class="image-overlay"></div> 
            </div>
        </div>
        <div class="half">
            <h1>Cadastrar Feriado</h1>
            <form action="{{ route('SalvarFeriado') }}" method="POST" id="formulario">
                @csrf
                <div>
                    <label for="nome">Nome do Feriado:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div>
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" required>
                </div>
                <div>
                    <label for="nome_mes">Dia da semana:</label>
                    <input type="text" id="nome_mes" name="nome_mes" required>
                </div>
                <button type="submit">Salvar</button>
            </form>

            <button type="button" onclick="window.location='{{ route('feriadosdeletar') }}'">
                ANALISAR FERIADOS
            </button>
        </div>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="fecharModal()">&times;</span>
            <p>Feriado cadastrado com sucesso!</p>
        </div>
    </div>
    <script>
        function exibirModal() {
            document.getElementById('modal').style.display = 'flex';
        }
        function fecharModal() {
            document.getElementById('modal').style.display = 'none';
        }
        const formulario = document.getElementById('formulario');
        formulario.addEventListener('submit', function(event) {
            event.preventDefault();
            exibirModal();
            setTimeout(function() {
                formulario.submit();
            }, 2000);
        });
    </script>
</body>
</html>
