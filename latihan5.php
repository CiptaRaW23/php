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
        <h1>Switch Case</h1>
    <?php
    $warna = "kuning";
    switch ($warna) {
        case "merah":
            echo"warna adalah merah";
            break;
        case "kuning":
            echo"warna adalah kuning";
            break;
        case "hijau":
            echo"warna adalah hijau";
            break; 
        default:
            echo "warna tidak dikenal!" ;
    }
    echo"<br>";
    ?>
    </body>
</html>