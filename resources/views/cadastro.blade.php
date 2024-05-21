<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('img/logo.png') }}"/>
    @vite('resources/sass/app.scss', 'resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/teste.css') }}"/>
    <title>CADASTRO | Planejamento 2.0</title>
    <script>
        const salvarCadastroUrl = "{{ route('salvar_cadastro') }}";
    </script>
    <script src="{{ asset('js/teste.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="cadastro">
            <img class="logo" src="{{ asset('img/logo.png') }}">
            <div><h1>CADASTRO</h1></div>
            <form id="pizza-form">
                @csrf
                <p><label for="nome">Nome <br></label>
                <input class="input-icon-nome" type="text" id="nome" name="nome" placeholder="Escreva seu nome completo" required></p>
                <p><label for="email">E-mail <br></label>
                <input class="input-icon-email" type="text" id="email" name="email" placeholder="Escreva seu email" required><p>
                <p><label for="senha">Senha <br></label>
                <input class="input-icon-senha" type="password" id="senha" name="senha" placeholder="Crie uma senha" required></p>
                <label for="select">Selecione:</label>
                <select name="tipo" id="select">
                    <option class="professor" value="1"><strong>Professor</strong></option>
                    <option class="aluno" value="0">Aluno</option>
                </select>
                <button class="buton_cadastrar" type="button" id="openModalBtn">CADASTRAR</button>
            </form>
        </div>
        <div><img class="jorge" src="{{ asset('img/jorge.png') }}"></div>
        <div>
            <!-- Modals -->
            <div id="modalProfessor" class="modal" style="display:none;">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Modal do Professor</h2>
                    <button class="buton_materias" class="btn btn-primary" type="submit">Finalizar</button>
                </div>
            </div>
        </div>
        <div id="modalAluno" class="modal" style="display:none;">
            <div class="modal-content">
                <span class="close">&times;</span>
                <form id="form-turma" action="{{ route('salvar_turma') }}" method="post">
                    @csrf
                    <input type="hidden" name="pessoa_id" id="pessoa_id">
                    <h2>Selecione a Turma</h2>
                    <label for="turma">Selecione a Turma:</label>
                    <select name="turma_id" id="turma">
                        <option value="DS 1">DS 1</option>
                        <option value="DS 2">DS 2</option>
                    </select>
                    <button class="buton_cadastrar" type="submit">CADASTRAR</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
   