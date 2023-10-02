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
echo "<p>" . $nama_mahasiswa->tampil_nama() ."</p>";

//method objek alamat mahasiswa
$alamat_mahasiswa = new mahasiswa();

//menampilkan objek  ke layar
echo "<p>" . $alamat_mahasiswa->tampil_alamat() . "</p>"; 
?>

<?php
//membuat class
class dosen
{
    //menuliskan property
    var $nidn;
    var $nama;
    var $prodi;

    function __construct()
    {
        echo "Saya Dosen Teknik Informatika";
        echo "<br>";
    }
    //method untuk menampilkan nidn
    function tampil_nidn()
    {
      return "NIDN saya adalah 220202002 </br>";
    }
    //method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama saya adalah Arif </br>";
    }
    //method untuk menampilkan profi
    function tampil_prodi()
    {
        return "Saya adalah Dosen Prodi Teknik Informatika </br>";
    }
}

//method objek nidn 
$nidn = new dosen();

//menampilkan objek  ke layar
echo $nidn->tampil_nidn(); 

//method objek nama dosen
$nama_dosen = new dosen();

//menampilkan objek ke layar
echo $nama_dosen->tampil_nama();

//menampilkan prodi dosen
$prodi = new dosen();

//menampilkan objek ke layar
echo $prodi->tampil_prodi();
?>