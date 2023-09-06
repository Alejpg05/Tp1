<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>Tp 1</h1>
    <?php
    $saludoDePotreroDigital="<p>Hola Mundo </p>\n  ";
    echo $saludoDePotreroDigital;

    $numero1=2;
    $numero2=10;
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $division=$numero1/$numero2;
    $resto=$numero1%$numero2;
    echo "<p>Los numeros son $numero1 y $numero2, el resultado de la suma es $suma, la resta $resta, la división es $division y el resto es $resto.</p>\n";
    $gradosCelsius=20;
    $conversionFarenheit=$gradosCelsius*1.8+32;
    echo "$gradosCelsius grados celsius pasados a grados Farenheit son $conversionFarenheit grados.";
     ?>
</body>
</html>