<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Estilo.css">
    <title>Discusion Resultados 1</title>
</head>
<body>
    <form method="post">

    <div class="Inputs">
        <label>Ingrese un numero</label><br>
        <input type="text" name="NumTabla" class="texto" placeholder="Debe estar entre 1 y 30"><br><br>
    </div>
    <div class="zonaBoton">
        <input type="submit" name="btnMostrarTabla" class="boton" value="Mostrar tabla"><br><br>
    </div>
    </form>



    <div class="Resultados">
        <?php 
            if((isset($_POST["btnMostrarTabla"])) && !empty($_POST["NumTabla"]))
            {
                $tabla = array();
                if(($_POST["NumTabla"] >= 1) && ($_POST["NumTabla"] <=30))
                {
                    for($i= 1; $i < 11; $i++)
                    {
                        $tabla[$i]= $_POST["NumTabla"]. " x " .$i. " = " .($_POST["NumTabla"] * $i). "<br>";
                    }
                    
                    mostrarArreglo($tabla);
                }
                else
                {
                    echo "El numero ingresado es menor a 1 o mayor a 30.";
                }
            }


            function mostrarArreglo($arreglo)
            {
                foreach($arreglo as $actual)
                {
                    echo $actual;
                }

            }
        ?>
    </div>
</body>
</html>

