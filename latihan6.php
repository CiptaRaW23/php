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
        <h1>Halaman PHP saya</h1>
        <?php

// while loop
$x = 10;

while ($x > 5){
    echo "Nomor: $x <br>"; 
    $x--;
}

// do while
$x = 1;

do {
    echo "<br> Nomor: $x "; 
    $x++;
} while ($x <= 5);

// foreach
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "<br>$value <br>";
}

// for
for ($x = 8; $x <= 10; $x++) { 
    echo "<br> Nomor: $x<br><br>";
}

// for dengan break
for ($x = 0; $x < 10; $x++) { 
    if ($x == 4) { 
        break; 
    } 
    echo " Nomor: $x <br>";
}

?>
    </body>
</html>