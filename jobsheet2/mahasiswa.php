<?php
//membuat class
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    //method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama saya adalah Arif";
    }

    //method untuk menampilkan alamat
    function tampil_alamat()
    {
        return "Alamat saya ada di jalan Rau Saliwangi";
    }
}

//method objek nama mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama() . "</br>";

//method objek alamat mahasiswa
$alamat_mahasiswa = new mahasiswa();

//menampilkan objek  ke layar
echo $alamat_mahasiswa->tampil_alamat() ; 
?>