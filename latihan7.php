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
        <h1>Array</h1>
        <?php

$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";
echo "Saya suka " . $namaBuah[1] . ".<br>";
echo "Saya suka " . $namaBuah[2] . ".<br>";
echo "Saya suka " . $namaBuah[3] . ".<br>";
echo "Saya suka " . $namaBuah[4] . ".<br>";

// Array dengan spesifik index
$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"40 Tahun");
$umur['Ahmad'] = "50 Tahun";
echo "Umur Andi adalah " . $umur['Andi'] . ".<br>";

// Tampilkan semua umur
foreach ($umur as $nama => $usia) {
    echo "<br>Umur $nama adalah $usia.<br>";
}
?>

    </body>
</html>