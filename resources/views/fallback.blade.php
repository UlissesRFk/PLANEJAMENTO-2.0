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
        width:650px;
        max-width: 100%;
        height: auto;
     }
     .img-footer{
        height:80px;
     }
     footer{
        background: #55A24D;
        width: 100%;
        height: 50px;
        position: absolute;
     }
     .botão{
      color: #FFF;
      background-color: #FFC727;
      border: none;
      line-height: 20px;
      text-transform: uppercase;
      font-weight: bold;
      cursor: pointer;
      padding: 20 0 20 0px;
      height: 50px;
      width: 250px;
      border-radius: 30px;
           
     }
</style>
</head>
<body>



<div class="fallback">
    <img class="img-erro" src="{{asset('img/404 Error.png')}}">
        <div class="botão_div">
     <button class="botão" onclick="window.location.href='{{ route('login') }}'">Voltar para o Login</button>
    </div>
</div>
<footer>
    <img class="img-footer" src="{{asset('img/planejamneto_footer.png')}}">
</footer>

</body>

</html>