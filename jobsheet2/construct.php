<?php
//membuat class
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    //method untuk menampilkan nama
    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika";
        echo "<br>";
    }
    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }
    function tampil_nama()
    {
        return "Nama saya adalah Arif </br>";
    }

    //method untuk menampilkan alamat
    function tampil_alamat()
    {
        return "Alamat saya ada di jalan Rau Saliwangi </br>";
    }
    function tampil_mahasiswa()
    {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
    }
}

//method objek nama mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();

//method objek alamat mahasiswa
// $alamat_mahasiswa = new mahasiswa();

//menampilkan objek  ke layar
// echo $alamat_mahasiswa->tampil_alamat(); 
?>
