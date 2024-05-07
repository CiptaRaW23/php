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
        <h1>Array 2 Dimensi</h1>
        <?php

// data kelas dengan array 2 dimensi

$array = array(
    "1C" => array("udin", "ismail", "andi"), 
    "1D" => array("lukman", "fajri", "mahmud")
);

// menampilkan data array 
print_r($array);

// menampilkan kelas 1C 
print_r($array['1C']);

// menampilkan kelas 1d dengan index 0
echo $array['1D'][0];

// tampilkan fajri
echo $array['1D'][1];

// tampilkan andi
echo $array['1C'][2];

// data kelas bisa ditulis juga dengan 
$array_simple = [
    "1C" => ["udin", "ismail", "andi"], 
    "1D" => ["lukman", "fajri", "mahmud"]
];

?>

    </body>
</html>