<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('img/logo.png') }}"/>
    @vite('resources/sass/app.scss', 'resources/js/app.js')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/teste.css') }}"/>
    <script src="{{ asset('js/teste.js') }}"></script>
    <title>CADASTRO | Planejamento 2.0</title>
</head>
<body>
    <div class="container">  
        <div class="cadastro">
            <img class="logo" src="{{ asset('img/logo.png') }}">
            <div><h1>CADASTRO</h1></div>
            <form action="{{ route('salvarCadastro') }}" method="post" id="pizza-form">
                @csrf
                <p><label for="nome">Nome <br></label>
                <input class="input-icon-nome" type="text" id="old{{ 'nome' }}" name="nome" placeholder="Escreva seu nome completo" required></p>
                <p><label for="email">E-mail <br></label>
                <input class="input-icon-email" type="text" id="old{{ 'email' }}" name="email" placeholder="Escreva seu email" required></p>
                <p><label for="senha">Senha <br></label>
                <input class="input-icon-senha" type="password" id="old{{ 'senha' }}" name="senha" placeholder="Crie uma senha" required></i></p>
                <label for="select">Selecione:</label>
                <select name="tipo" id="select">
                    <option class="professor" value="1"><strong>Professor</strong></option>
                    <option class="aluno" value="0">Aluno</option>
                </select>
                <div>
                    <button type="submit">CADASTRAR</button>
                </div>
                <div>
                    <img class="jorge" src="{{ asset('img/jorge.png') }}">
                </div>  
               
            </form>
</div>    
</div>
  
    @if(session('mensagemCerto'))
        <div id="successModal" class="modal" style="display:block;">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('successModal').style.display='none'">&times;</span>
                <h1 class="ca"> {{ session('mensagemCerto') }}</h1>
            </div>
        </div>
        @elseif(session('mensagemErro'))
        <div id="errorModal" class="modal" style="display:block;">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('errorModal').style.display='none'">&times;</span>
                <h1 class="ca"><i class='bx bx-error-circle'></i> {{ session('mensagemErro') }}</h1>
            </div>
        </div>
    @endif
</body>
</html>
