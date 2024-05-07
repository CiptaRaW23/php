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
        $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

        sort($angka);

        foreach ($angka as $value) {
            if ($value % 2 == 0) {
                echo "Angka " . $value . " adalah genap<br>";
            } else {
                echo "Angka " . $value . " adalah ganjil<br>";
            }
        }
    ?>
    </body>
</html>