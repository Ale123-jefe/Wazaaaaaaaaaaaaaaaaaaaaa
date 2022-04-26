<<html lang="en">
<head>
</head>
<body>
    <form method="post"> <!--el form es pa los cuadrados donde mustran los resultados-->
        <table><!--relacionado con el php-->
            <tr><!--es para hacer filas-->
                <td><input type="text" name="numero1"></td> <!--es para saltar las filas hacia abajo-->
            </tr>
            <tr>
                <td><input type="text" name="numero2"></td>
            </tr>
            <tr>
                <td><input type="submit" value="sumar"></td>
            </tr>

            <?php
            if($_POST)
            {
                $num1 = $_POST ['numero1'];
                $num2 = $_POST ['numero2'];
                $suma = $num1 +$num2;
                echo "La suma de " .$num1." y " .$num2. " es " .$suma;
            }//el $POST hace que se asigne el numero 1 y 2//
            //la $suma hace que se este sumando//
            //el echo es el que muestra muestra el resultado//
            ?><!--es para que funcione el php-->
            
        </table>

    </form>
</body>
</html> 