<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lucas Kalks</title>
</head>

<body>
  <!-- Utilização do php junto do html com blade.php
  Basta definir o script com @ no início e no fim
-->
  @auth
   <span>Você está autenticado</span>   
  @endauth

  @foreach(range(1,20) as $key)
  <li>{{$key}}</li>
  @endforeach
</body>

</html>