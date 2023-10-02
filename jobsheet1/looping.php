<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga 10: </br>";
    for ($x = 2; $x <= 10; $x += 2)
        echo "$x </br>";
    echo "</br>Perulangan WHILE bilangan ganjil dari 1 hingga 10: </br>";
    $y = 1;
    while ($y <= 10) {
        echo "$y </br>";
        $y += 2;
    }

    echo "</br>Perulangan DO bilangan prima dari kurang dari 20: </br>";
    $i = 2;
    do {
        $prima = true;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $prima = false;
                break;
            }
        }
        if ($prima) {
            echo $i . " ";
        }
        $i++;
    } while ($i < 20);
    ?>

</body>
</html>
