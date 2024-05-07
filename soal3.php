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
    <h1>Nilai Akhir Kelas Kecil</h1>
    <?php
        $siswa = [
            ["Adi", 75],
            ["Joni", 80],
            ["Jihan", 65],
            ["Aya", 70],
            ["Ita", 85],
            ["Budi", 90],
            ["Tini", 95],
            ["Sari", 65]
        ];

        // a) Tampilkan poin siswa dengan nomor urut 5
        echo "a) Poin siswa dengan nomor urut 5: " . $siswa[4][1] . "<br>";

        // b) Tampilkan semua nama siswa yang memiliki poin 90
        echo "b) Nama siswa dengan poin 90:<br>";
        foreach ($siswa as $value) {
            if ($value[1] == 90) {
                echo $value[0] . "<br>";
            }
        }

        // c) Tampilkan semua nama siswa yang memiliki poin 100
        echo "c) Nama siswa dengan poin 100:<br>";
        foreach ($siswa as $value) {
            if ($value[1] == 100) {
                echo $value[0] . "<br>";
            }
        }
    ?>
</body>
</html>