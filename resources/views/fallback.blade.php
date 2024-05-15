<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
   body{
    background-color:  black;
   }
   footer{
    background-color: white;
   }
   .h{
    background-color: white;  
    text-align: center;
    padding: 9%; 
    margin: 10%;
   }
</style>
</head>
<body>
    <div class="h">
    
  <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='{{ route('login') }}'">Voltar para o Login</button>
</div>
<footer>
    planejamento
</footer>
</body>
</html>