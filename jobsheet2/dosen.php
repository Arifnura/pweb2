<?php
//membuat class
class dosen
{
    //menuliskan property
    var $nidn;
    var $nama;
    var $prodi;


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