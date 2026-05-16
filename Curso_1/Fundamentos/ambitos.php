<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Variables Ámbito</title>
    </head>
    <body>
        <?php 
            // $num = 22; <-- Variable GLOBAL fuera de la función, no se puede utilizar 
            $valor1 = 10;
            $valor2 = 5;
            function prueba(){
                global $valor1, $valor2; //Utilizar variables locales para la función
                $valor3 = $valor1 + $valor2; //Definir una variable local que suma las dos globales
                echo $valor3;
            }
            prueba();

            
        ?>      
    </body>
</html>