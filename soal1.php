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
    <h1>Gaji Bersih Obi</h1>
    <?php
        $gajiPokok = 3250000;
        $tunjanganJabatan = 1200000;
        $pajak = 0.1;

        $gajiKotor = $gajiPokok + $tunjanganJabatan;
        $gajiBersih = $gajiKotor - ($gajiKotor * $pajak);

        echo "Gaji Pokok: Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
        echo "Tunjangan Jabatan: Rp. " . number_format($tunjanganJabatan, 0, ',', '.') . "<br>";
        echo "Pajak Penghasilan: Rp. " . number_format($gajiKotor * $pajak, 0, ',', '.') . "<br>";
        echo "Gaji Bersih: Rp. " . number_format($gajiBersih, 0, ',', '.') . "<br>";
    ?>
</body>
</html>