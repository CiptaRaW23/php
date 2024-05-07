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
        <h1>Latihan Perulangan</h1>
        <?php
        // Menampilkan pola dengan perulangan
        for ($i = 1; $i <= 12; $i++) {
            $stars = "";
            for ($j = 1; $j <= $i; $j++) {
                $stars .= "*";
            }
            echo "<p>$stars</p>";
        }
    ?>
    </body>
</html>