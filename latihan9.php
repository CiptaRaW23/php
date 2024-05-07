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
        <h1>Function</h1>
    <?php
    //contoh fungsi
    function writeMsg($nama) {
        echo"selamat datang" . $nama ."<br>";
    }
    writeMsg("Cipta");

    function tambah(int $angka1, int $angka2) {
        $a= $angka1+$angka2;
        return $a;
    }
    $hasil=tambah(5, 5);
    echo ($hasil);
    ?>
    </body>
</html>