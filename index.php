<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h1>Ola Mundo</h1>

      <?php

$nome = "Ester";
$idade = 17;
$altura = 1.53;
$peso = 53;

$imc = $peso / ($altura * $altura);

if($imc < 18.5){
    echo"abaixo do Peso";
}else if($imc >= 18.5 && $imc < 25){
    echo"Peso Normal";
}else if ($imc >= 25 && $imc <29.9){
    echo"Acima do Peso";
}else if ($imc >= 30 && $imc <34.9){
    echo"Obsesidade Grau 1"
}else if($imc >=35 && $imc <39.9){
    echo"Obsesidade Grau 2"
}else if($imc >=40 && $imc <49.9){
    echo"Obesidade Grau 3"
}else if($imc >=50 && $imc <59.9){
    echo"Obesidade Grau 4"
} 
echo "<h1>".intval($imc)."</h1>";
?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

