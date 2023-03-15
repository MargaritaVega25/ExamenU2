   <!DOCTYPE html>
<html>
    <head>
        <title>Orden de boletos reservada</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <a href="reserva.html"> Regresar a la reserva de boletos</a>
         <br>
         <h4>Datos transmitidos ($_REQUEST)</h4>
        <?php
            echo"<br>";
            foreach ($_REQUEST as $llave=>$valor){
                echo $llave." ".$valor."<br>";
            }
        ?>
        <br><br>
        <h4>Datos con caso GET</h4>
        <?php
        foreach ($_GET as $llave=>$valor){
            echo $llave." ".$valor."<br>";
        }
        ?>
        <br><br>
        <h4>Datos con caso POST</h4>
        <?php
        foreach ($_POST as $llave=>$valor){
            echo $llave." ".$valor."<br>";
        }
        ?>     
    </body>
</html>
