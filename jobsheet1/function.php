<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Luas Persegi Panjang dan Lingkaran</title>
</head>
<body>
    <?php
    function persegi_panjang($p, $l)
    {
        return $p * $l;
    }

    function lingkaran($r)
    {
        return 3.14 * $r * $r;
    }
    ?>

    <h2>Kalkulator Luas Persegi Panjang & ingkaran</h2>

    <form method="post">
        <table>
            <tr>
                <td>Masukkan Panjang :</td>
                <td><input type="text" name="panjang"></td>
            </tr>
            <tr>
                <td>Masukkan Lebar :</td>
                <td><input type="text" name="lebar"></td>
            </tr>
            <tr>
                <td>Masukkan Jari-jari :</td>
                <td><input type="text" name="jari_jari"></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Cari Luas">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['panjang']) && !empty($_POST['lebar'])) {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            echo "Luas Persegi Panjang = " . persegi_panjang($panjang, $lebar) . "<br>";
        }
        if (!empty($_POST['jari_jari'])) {
            $jari_jari = $_POST['jari_jari'];
            echo "Luas Lingkaran = " . lingkaran($jari_jari) . "<br>";
        }
    }
    ?>
    <!-- //Fungsi adalah sebuah blok kode yang dapat digunakan kembali dan dapat dipanggil dari bagian lain program. -->

</body>
</html>
