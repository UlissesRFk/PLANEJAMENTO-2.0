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
    <main class="main-cadastro">
        <div class="left-cadastro">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}">
            </div>
            <div class="card-cadastro">
                <h1>CADASTRO</h1>
            <form action="{{ route('salvarCadastro') }}" method="post" id="pizza-form">
                @csrf
                <div class="text-field">
                    <label for="email">Nome:</label>
                    <input type="text" name="nome" id="old{{ 'nome' }}" placeholder="Insira seu nome">
                </div>
                <div class="text-field">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="old{{ 'email' }}" placeholder="Insira seu e-mail">
                </div>
                <div class="text-field">
                    <label for="email">Senha:</label>
                    <input type="password" name="senha" id="old{{ 'senha' }}" placeholder="Insira uma senha">
                </div>
                <div class="text-field">
                    <label for="email">Tipo: </label>
                    <select name="tipo" id="select">
                    <option class="professor" value="1"><strong>Professor</strong></option>
                    <option class="aluno" value="0">Aluno</option>
                </select>
                </div>
                <div class="btn-cadastro">
                    <button type="submit">CADASTRAR</button>
                </div>
                <div class="right-cadastro">
                 <img src="{{ asset('img/jorge.png') }}" alt="">
                 </div>   
            </form>
</div>    
</div>
</main>
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
