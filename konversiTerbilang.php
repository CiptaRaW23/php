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
        <h1>Konversi Terbilang</h1>
        <?php
        // Fungsi untuk mengkonversi angka ke huruf
        function convertToWords($number) {
            switch ($number) {
                case 1:
                    return "satu";
                case 2:
                    return "dua";
                case 3:
                    return "tiga";
                case 4:
                    return "empat";
                case 5:
                    return "lima";
                case 6:
                    return "enam";
                case 7:
                    return "tujuh";
                case 8:
                    return "delapan";
                case 9:
                    return "sembilan";
                default:
                    return "Angka tidak valid";
            }
        }

        // Angka yang akan dikonversi
        $number = 6;

        // Menampilkan hasil konversi
        echo "<p>Angka: $number</p>";
        echo "<p>Huruf: <strong>" . convertToWords($number) . "</strong></p>";
    ?>
    </body>
</html>