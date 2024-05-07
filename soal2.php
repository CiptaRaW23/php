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
    <h1>Uang Pecahan Ani</h1>
    <?php
        $uangTabungan = 1387500;

        $uangPecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];
        $jumlahUangPecahan = [];

        foreach ($uangPecahan as $value) {
            $jumlahUangPecahan[] = intval($uangTabungan / $value);
            $uangTabungan = $uangTabungan % $value;
        }

        echo "Uang Rp. 100.000,-: " . $jumlahUangPecahan[0] . " lembar<br>";
        echo "Uang Rp. 50.000,-: " . $jumlahUangPecahan[1] . " lembar<br>";
        echo "Uang Rp. 20.000,-: " . $jumlahUangPecahan[2] . " lembar<br>";
        echo "Uang Rp. 10.000,-: " . $jumlahUangPecahan[3] . " lembar<br>";
        echo "Uang Rp. 5.000,-: " . $jumlahUangPecahan[4] . " lembar<br>";
        echo "Uang Rp. 2.000,-: " . $jumlahUangPecahan[5] . " lembar<br>";
        echo "Uang Rp. 500,-: " . $jumlahUangPecahan[6] . " lembar<br>";
    ?>
</body>
</html>