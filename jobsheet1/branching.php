<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <form method="post" action="">
        Masukkan Nilai x: <input type="number" name="nilai_x" pattern="[0-9]+" title="Masukkan hanya angka" required>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai yang dimasukkan
        $x = $_POST["nilai_x"];

        // Validasi untuk memastikan bahwa $x adalah angka
        if (is_numeric($x)) {
            echo "Nilai x = $x </br></br>";
            if ($x > 0) {
                echo "$x adalah Bilangan Positif";
            } elseif ($x < 0) {
                echo "$x adalah Bilangan Negatif";
            } else {
                echo "$x adalah Bilangan Nol";
            }
        } else {
            echo "Masukkan hanya angka.";
        }
    }
    ?>
</body>
</html>
