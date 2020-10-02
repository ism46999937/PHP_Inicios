<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index PHP</title>
    </head>
    <body>
        <h2>
            <?php
            //comentario una linea
            /* comentario
            varias 
            lineas */
            #comentario una linea tambien
            echo 'Hola mundo';
            $nombre = 'Alex'.'Bailon'.'Escobero';
            echo $nombre;
            $preu = 100;
            echo $preu;
            $descompte = 3;
            echo $descompte;
            $preuFinal = $preu - $descompte;
            echo 'I tot amb preu descomptat dona: ';
            echo $preuFinal;
            ?>
        </h2>
    </body>
</html>
