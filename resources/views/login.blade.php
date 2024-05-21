<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('img/logo.png')}}"/>
    
    <title>LOGIN | Planejamneto 2.0</title>
</head>
<body>
<main class="container-login">
    <div class="left-form">
        <img class="logo" src="{{asset('img/logo.png')}}">
        <div class="form-login">
            <h1>LOGIN</h1>
            <form action="{{ route('login')}}" method="post" id="pizza-form">
             @csrf
                <label for="email">E-mail</label>
                <input class="input-email" value="{{old('email')}}" type="text" id="email" name="email" placeholder="Insira seu email" required>
                <label for="senha">Senha</label>
                <input class="input-senha" value="{{old('senha')}}" type="password" id="senha" name="senha" placeholder="Insira sua senha" required>
                <div class="button_entrar">
                    <button>ENTRAR</button>
                </div>
            </form>
        </div>
    </div>

@if($errors->has('mensagemErro'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ $errors->first('mensagemErro') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="{{route('login')}}"> &times;</button>
</div>
@endif

    <div class="img-form">
        <img class="jorge" src="{{asset('img/jorge.png')}}"> 
        <div class="img"></div>
    </div>
</main>
</div>
</div>
</body>
</html>    
