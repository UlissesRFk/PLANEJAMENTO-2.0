<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/cadastro.css')}}">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('img/logo.png')}}"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Planejamento 2.0</title>
</head>
<body>
 <div class="container">  
    <div class="cadastro">
    <img class="logo" src="{{asset('img/logo.png')}}">
    <div><h1>CADASTRO</h1></div>
<form action="index.php" method="get" id="pizza-form">
    <p><label for="nome">Nome <br></label>
    <input class="input-icon-nome" type="text" id="nome" name="nome" placeholder="Escreva seu nome completo" required></p>
    <p><label for="email">E-mail <br></label> 
    <input class="input-icon-email" type="text" id="email" name="email" placeholder="Escreva seu email" required><p>
    <p><label for="senha">Senha <br></label>
    <input class="input-icon-senha" type="password" id="senha" name="senha" placeholder="Crie uma senha" required></i></p>
    <label for="select">Selecione:</label>
    <select id="select">
    <option class="professor" value="professor"><strong>Professor</strong></option>
    <option class="aluno" value="aluno">Aluno</option>
    </select>
    <div>
        <button>CADASTRAR</button>
    </div>
    <div>
        <img class="jorge" src="{{asset('img/jorge.png')}}">
    </div>  
</form>
    </div>    
</div>
</body>
</html>