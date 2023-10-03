<?php
class manusia
{
    private $nama_saya;
    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
    function ambil_nama()
    {
        return $this->nama_saya;
    }
}
//class turunan atau sub class dari class manusia
class mahasiswa extends manusia
{
    protected $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
    function ambil_mahasiswa()
    {
        return $this->nama_mahasiswa;
    }
}
//instansiasi class mahasiswa
$informatika = new mahasiswa();

$informatika->panggil_nama("Arif Nur");
$informatika->panggil_mahasiswa("Azhar");

//tampilkan isi dari property
echo "Nama Depan Saya : " . $informatika->ambil_nama() . "</br>";
echo "Nama Belakang Saya : " . $informatika->ambil_mahasiswa();