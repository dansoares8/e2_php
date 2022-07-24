<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Mega Sena</title>
  </head>
  <body>

<h3 class="text-center">Vai testar a sua sorte na mega-sena? Pegue aqui seus 06 números</h3>
<br><hr>
<div class="text-center">
  <?php
    $a = rand(1,60);
    $b = rand(1,60);
    $c = rand(1,60);
    $d = rand(1,60);
    $e = rand(1,60);
    $f = rand(1,60);

    echo "Números da Sorte: ";
    echo $a ." -";
    echo $b ." -";
    echo $c ." -";
    echo $d ." -";
    echo $e ." -";
    echo $f ."";
?>
</div>
<br>
<hr>
<div class="text-center">
  <a href="jogoMegasena.php" class="text-center btn btn-dark btn-lg">Quero outros números</a>
</div>

<div class="mt-4 fixed-bottom footer bg-dark text-light lead text-center">
  Criado por <a href="https://www.danielsoaresgomes.com/" target="_blank" style="text-decoration: none; color: #33FF00;">Daniel Soares Gomes</a> © Todos os direitos reservados ao autor do projeto.
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
