<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    * {
        padding: 0;
        margin: 0;
    }
     .fallback{
        background-color: #55A24D;
     }
     .img-erro{
        width:1000px;
        max-width: 100%;
        height: auto;
     }
     .img-footer{
        height:80px;
     }
     footer{
        background: white;
        width: 100%;
        height: 50px;
        position: absolute;
     }
     .botão{
        width: 250px;
     }
</style>
</head>
<body>

<div class="fallback">
    <div class="botão">
     <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='{{ route('login') }}'">Voltar para o Login</button>
    </div>
    <img class="img-erro" src="{{asset('img/404 Error.png')}}">
</div>

<footer>
    <img class="img-footer" src="{{asset('img/planejamneto_footer.png')}}">
</footer>

</body>

</html>