

<html>
    <head>
        <title>Número Primo</title>
        <meta charset="UTF-8">
    </head>
    <body>        
<?php
function somaValores($x, $y) {
    $soma=$x+$y;
    return $soma;
    }
   function imprimeSoma ($resultado) {
       echo "O resulatdo sa soma é igual a:" .$resultado;
   }
   $n1 = 10;
   $n2 = 20;
$resultado = somaValores($n1, $n2);
imprime_resultado($resultado);



 ?>
    </body>
</html>
