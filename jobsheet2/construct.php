<?php
//membuat class
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    //method untuk menampilkan di paling awal
    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika";
        echo "<br>";
    }

    //method untuk menampilkan di paling akhir
    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }
    function tampil_nama()
    {
        return "Nama saya adalah Arif </br>";
    }

    //method untuk menampilkan mahasiswa
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

//Fungsi adalah sebuah blok kode yang dapat digunakan kembali dan dapat dipanggil dari bagian lain program.
//Class penampung sekumpulan elemen data (property) dan kode program (method) yang digunakan oleh pengolahan datanya. 
//enkapsulasi adalah suatu cara untuk menyembunyikan implementasi detail dari suatu class
//method objek alamat mahasiswa
// $alamat_mahasiswa = new mahasiswa();

//menampilkan objek  ke layar
// echo $alamat_mahasiswa->tampil_alamat(); 
?>
