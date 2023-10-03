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

    echo "</br>Perulangan DO WHILE bilangan prima dari kurang dari 20: </br>";
    //inisialisasi variabel $a
    $a = 2; // Inisialisasi variabel $a dengan nilai awal 2
    do {
        $prima = true; // Inisialisasi variabel $prima dengan nilai true, asumsi awal $a adalah bilangan prima
        // Perulangan for untuk memeriksa apakah $a adalah bilangan prima
        for ($b = 2; $b < $a; $b++) {
            // Jika $a habis dibagi oleh $b, maka $a bukan bilangan prima
            if ($a % $b == 0) {
                $prima = false; // Set $prima menjadi false karena $a bukan bilangan prima
                break; // Keluar dari perulangan for karena sudah diketahui $a bukan prima
            }
        }
        // Jika $prima masih true, maka $a adalah bilangan prima, maka tampilkan $a
        if ($prima) {
            echo $a . " ";
        }
        $a++; // Increment nilai $a untuk melanjutkan ke angka berikutnya
    } while ($a < 20); // Perulangan akan terus berjalan sampai nilai $a kurang dari 20
    ?>    
</body>
</html>
