<?php

//membuat class mahasiswa
class mahasiswa
{
    //menuliskan property public (bisa dipanggil dari luar class)
    public $nama;
    private $nim="220202002";

    //public method
    public function tampilkan_nama()
    {
        //nilai kembalian
        return "Nama saya Arif </br>";
    }

    //membuat protected method
    function tampilkan_nim()
    {
        return "NIM Saya" . $this->nim;
    }
}
//instansiasi objek mahasiswa kedalam variabel $mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();
?>