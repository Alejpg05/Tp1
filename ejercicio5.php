<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <h3>A</h3>
    <?php
        $base=18;
        $altura=12;
        $perimetro=2*($base+$altura);
        $area=$base*$altura;
        echo "El perimetro de un rectangulo con $base cm de base y $altura cm de altura, es $perimetro cm y su area es $area cm cuadrados"
    ?>
    <h3>B</h3>
    <?php
        $radio=30;
        $diametro=$radio*2;
        $perimetrocirculo=$diametro*pi();
        $areacirculo=pi()*($radio*$radio);
        echo "El perimetro de un circulo con $radio cm de radio es $perimetro cm y su area es $areacirculo cm cuadrados"

    ?>
</body>
</html>