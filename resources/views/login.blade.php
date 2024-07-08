<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loginModal.css') }}">
    @vite('resources/sass/app.scss', 'resources/js/app.js')
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('img/logo.png') }}"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/login.js')}}"></script>
    <title>LOGIN | Planejamento 2.0</title>
</head>
<body>
<main class="main-login">
    <div class="left-login">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>
        <div class="card-login">
            <h1>LOGIN</h1>
            <form action="{{ route('login') }}" method="post" id="pizza-form">
                @csrf
                <div class="text-field">
                    <label for="email">E-mail</label>
                    <input class="input-email" value="{{ old('email') }}" type="text" id="email" name="email" placeholder="Insira seu email" required>
                </div>
                <div class="text-field">
                    <label for="senha">Senha</label>
                    <input class="input-senha" value="{{ old('senha') }}" type="password" id="senha" name="senha" placeholder="Insira sua senha" required>
                </div>
                <div class="btn-entrar">
                    <button type="submit">ENTRAR</button>
                </div>
            </form>
        </div>
    </div>

    <div class="right-login">
        <img src="{{ asset('img/jorge.png') }}">
    </div>

    <div id="errorModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <hr>
        <i class='bx bx-error-circle'></i> <p id="errorMessage"></p>
    </div>
</div>

@if ($errors->has('mensagemErro'))
    <script>
        window.hasErrors = true;
        window.errorMessage = "{{ $errors->first('mensagemErro') }}";
    </script>
@else
    <script>
        window.hasErrors = false;
    </script>
@endif

</body>
</html>
