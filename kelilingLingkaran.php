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
        <h1>Jari-jari Lingkaran</h1>
        <?php
        // Jari-jari lingkaran
        $diameter = 15;
        $radius = $diameter / 2;

        // Menghitung keliling lingkaran
        $keliling = 2 * 3.14 * $radius;

        // Menampilkan hasil
        echo "<p>Jari-jari lingkaran: $diameter cm</p>";
        echo "<p>Keliling lingkaran: <strong>$keliling</strong> cm</p>";
    ?>
    </body>
</html>