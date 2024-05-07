<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Div dan Span</title>
        <link rel="icon" type="image/png" href="gamber/icon.png" sizes="16x16" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="233307040">
        <meta name="author" content="CiptaRanggaWijaya">
    </head>
    <body>
        <h1>Operator</h1>
        <?php

$x = 5;
$y = 10;

//Arithmetic operators

echo "Penambahan " . ($x + $y) . "<br>";
echo "Pengurangan " . ($x - $y) . "<br>";
echo "Perkalian " . ($x * $y) . "<br>";
echo "Pembagian " . ($x / $y) . "<br>";
echo "Modulus " . ($x % $y) . "<br>";
echo "Exponensial " . ($x ** $y) . "<br>";
echo "<br>";

//Assignment operators

$x += 2; // $x = $x + 2
$y *= 2; // $y = $y * 2

echo "Penambahan x " . $x . "<br>";
echo "Perkalian y " . $y . "<br>";
echo "<br>";

//Increment/Decrement operators

echo "Isi ++x= " . ++$x . "<br>";
echo "Isi x++ = " . $x++ . "<br>";
echo "Isi x = " . $x . "<br>";
echo "<br>";

echo "Isi --y = " . --$y . "<br>";
echo "Isi y-- " . $y-- . "<br>";
echo "Isi y = " . $y . "<br>";
echo "<br>";

$user = "Cipta Rangga Wijaya";
$status = (empty($user)) ?"Kosong":"Ada isi";
echo $status ."<br>";
echo $color = $color ?? "red";
?>

    </body>
</html>