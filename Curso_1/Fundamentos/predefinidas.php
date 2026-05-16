<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Variables predefinidas</title>
    </head>
    <body>
        <?php 
            //Predefinidas
            $numero = 33; // <--definir una nueva variable
            echo "Nombre del servidor: " . $_SERVER['SERVER_NAME']; //<-- Variable que sirve para ver el nombre del servidor
            echo "<br>"; // <-- Salto de línea
            echo "Software del servidor: " . $_SERVER['SERVER_SOFTWARE']; // <-- Variable que sirve para ver el software del servidor
            echo "<br>"; // <-- Salto de línea
            echo "Puerto del servidor: " . $_SERVER['SERVER_PORT']; // <-- Variable que sirve para ver el puerto que usa el servidor
            echo "<br>"; // <-- Salto de línea




        ?>      
    </body>
</html>