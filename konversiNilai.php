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
        <h1>Konversi Nilai</h1>
        <?php
        // Fungsi untuk mengkonversi nilai angka ke huruf
        function convertGrade($score) {
            if ($score >= 90 && $score <= 100) {
                return "A";
            } elseif ($score >= 80 && $score <= 89) {
                return "AB";
            } elseif ($score >= 70 && $score <= 79) {
                return "B";
            } elseif ($score >= 60 && $score <= 69) {
                return "BC";
            } elseif ($score >= 0 && $score <= 59) {
                return "C";
            } else {
                return "Nilai tidak valid";
            }
        }

        // Nilai yang akan dikonversi
        $score = 78;

        // Menampilkan hasil konversi
        echo "<p>Nilai: $score</p>";
        echo "<p>Huruf: <strong>" . convertGrade($score) . "</strong></p>";
    ?>

    </body>
</html>