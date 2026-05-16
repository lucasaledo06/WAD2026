<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Plantilla</title>
    </head>
    <body>
        <?php 
            //=== Definición de variables ===
            $edad = 39; // <-- Variable de tipo integer (valor entero)
            $estatura = 1.67; // <-- Variable de tipo float (decimales)
            $nombre = "Luis Javier"; //<-- Variable tipo string (texto)
            $frase = "Luisja tiene $edad años"; //<-- Concatenar la variable edad con el texto
#            $frase = 'Luisja tiene $edad años' //<-- Con las comillas simples no podemos introducir variables en el texto
            $profesor = true; //<-- Valor booleano (verdadero o falso)
            /*Mostrar datos por pantalla*/
            echo $edad;
            echo "<br>"; // <-- Salto de línea
            echo $estatura;
            echo "<br>";
            echo "Tu nombre es: $nombre "; //<-- Concatenar
            echo json_encode($profesor); // <-- Mostrar true or false
            //$6edad ="hola"; <-- Variable declarada de manera incorrecta
            //$for = 22; <-- No declarar variables con comandos de php 
        ?>      
    </body>
</html>