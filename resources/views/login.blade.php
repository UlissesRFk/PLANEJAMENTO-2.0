<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('img/logo.png')}}"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>LOGIN | Planejamneto 2.0</title>
</head>
<body>
<div class="body">
 <div class="container">  
    <div class="cadastro">
    <img class="logo" src="{{asset('img/logo.png')}}">
    <div><h1>LOGIN</h1></div>
        <form action="{{ route('login')}}" method="post" id="pizza-form">
        @csrf
            <p><label for="email">E-mail <br></label> 
            <input class="input-icon-email" value="{{old('email')}}" type="text" id="email" name="email" placeholder="Escreva seu email" required><p>
            <p><label for="senha">Senha <br></label>
            <input class="input-icon-senha" value="{{old('senha')}}" type="password" id="senha" name="senha" placeholder="Crie uma senha" required></i></p>
            <div class="button_entrar">
                <button>ENTRAR</button>
            </div>
            <div>
                <img class="jorge" src="{{asset('img/jorge.png')}}">
            </div>  
        </form>
    </div>    
 </div>

</div>
@if($errors->has('mensagemErro'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ $errors->first('mensagemErro') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="{{route('login')}}"> &times;</button>
</div>
@endif
</div>
</body>
</html>    
