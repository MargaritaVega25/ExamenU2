   <!DOCTYPE html>
<html>
    <head>
        <title>Orden de boletos reservada</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <a href="index.html"> Regresar a inicio</a>
        <br><br>
        <h4>RESERVA REALIZADA</h4>
        <?php
        foreach ($_GET as $llave=>$valor){
            echo $llave." ".$valor."<br>";
        }
        ?>   
    </body>
</html>
