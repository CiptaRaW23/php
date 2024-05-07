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
        <h1>Variabel</h1>
        <?php

// variabel dalam php

$txt = "Selamat datang !";

$txt2= "Politeknik Negeri Madiun";

$x = 5;

$y = 10.5;

echo "<p>Isi Variable txt adalah: $txt</p>"; 
echo "<p>Isi Variable x adalah: $x</p>"; 
echo "<p>Isi Variable y adalah: $y</p>"; 
echo "Belajar PHP di $txt2 <br>"; 
echo $x + $y;

// PHP konstanta 
define("nama_konstanta", "Cipta Rangga Wijaya"); 
echo "<br>".nama_konstanta;

?>
    </body>
</html>