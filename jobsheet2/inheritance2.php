<?php
class Manusia
{
    private $nama;
    private $alamat;

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }
}

// Kelas turunan atau subkelas dari kelas Manusia
class Mahasiswa extends Manusia
{
    private $namaMahasiswa;
    private $alamatMahasiswa;

    public function setNamaMahasiswa($nama)
    {
        $this->namaMahasiswa = $nama;
    }

    public function getNamaMahasiswa()
    {
        return $this->namaMahasiswa;
    }

    public function setAlamatMahasiswa($alamat)
    {
        $this->alamatMahasiswa = $alamat;
    }

    public function getAlamatMahasiswa()
    {
        return $this->alamatMahasiswa;
    }
}

// Instansiasi kelas Mahasiswa
$informatika = new Mahasiswa();

$informatika->setNama("Arif Nur");
$informatika->setNamaMahasiswa("Azhar");
$informatika->setAlamat("Jalan Rau Saliwangi");

// Tampilkan isi dari property
echo "Nama Depan Saya : " . $informatika->getNama() . "</br>";
echo "Nama Belakang Saya : " . $informatika->getNamaMahasiswa() . "</br>";
echo "Alamat Saya : " . $informatika->getAlamat();
?>
