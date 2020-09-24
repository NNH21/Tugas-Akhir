<?php
class RentalMobil{
    private $merk,
            $warna,
            $jumlahPenumpang,
            $kecepatan,
            $harga,
            $durasiSewa;

    public function __construct($merk="merk", $warna="warna", $jumlahPenumpang=0, $kecepatan="kecepatan", $harga=0){
        $this->merk = $merk;
        $this->warna = $warna;
        $this->jumlahPenumpang = $jumlahPenumpang;
        $this->kecepatan = $kecepatan;
        $this->harga = $harga;        
    }

    public function setMerk($merk){
        $this->merk = $merk;
    }
    public function getMerk(){
        return $this->merk;
    }
    public function setWarna($warna){
        $this->warna = $warna;
    }
    public function getWarna(){
        return $this->warna;
    }

    public function setDurasiSewa($durasiSewa){
        $this->durasiSewa = $durasiSewa;
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga = $this->harga * $this->durasiSewa;
    }

    //Mencetak Informasi Rental
    public function cetakInfo(){
        echo "Mobil: {$this->merk}<br>";
        echo "Warna: {$this->warna}<br>";
        echo "Jumlah penumpang: {$this->jumlahPenumpang}<br>";
        echo "Kecepatan maksimal: {$this->kecepatan}<br>";
        echo "Harga sewa per jam : Rp.{$this->harga}<br>";        
    }

    public function getCetak(){
        return "Pilihan mobil: {$this->merk} {$this->warna} | Durasi sewa: {$this->durasiSewa} jam | Dengan harga: Rp.{$this->harga}";
    }
}

class Pelanggan extends RentalMobil{
    public $nama,
            $usia,
            $pekerjaan,
            $notelp,
            $alamat;

    public function __construct($nama="nama", $usia=0, $pekerjaan="pekerjaan", $notelp=0, $alamat="alamat"){
        $this->nama = $nama;
        $this->usia = $usia;
        $this->pekerjaan = $pekerjaan;
        $this->notelp = $notelp;
        $this->alamat = $alamat; 
    }

    //Mencetak Informasi Pelanggan
    public function cetakInfo(){
        echo "Nama: {$this->nama} |  Usia: {$this->usia} | Pekerjaan: {$this->pekerjaan} | Nomor Telepon: {$this->notelp} | Alamat: {$this->alamat} | " . parent::getCetak(). "<br>";
    }
}

echo "<strong>Informasi Rental: </strong><br>";

$mobil1 = new RentalMobil("BMW", "Biru", 2, "350 km/jam", 400000);
echo "<br>== Pilihan Mobil 1 ==<br>";
echo $mobil1->cetakInfo();

$mobil2 = new RentalMobil("Toyota", "Hitam", 6, "200 km/jam", 450000);
echo "<br>== Pilihan Mobil 2 ==<br>";
echo $mobil2->cetakInfo();

echo "<hr>";

echo "<strong>Informasi Pelanggan: </strong><br>";

$pelanggan1 = new Pelanggan("Salim", 25, "Dokter", 6288989787879, "Bogor");
echo "<br>== Pelanggan 1 ==<br>";
$pelanggan1->setDurasiSewa(4);
$pelanggan1->setHarga(400000);
$pelanggan1->getHarga();
$pelanggan1->setMerk("BMW");
$pelanggan1->setWarna("Biru");
echo $pelanggan1->cetakInfo();

$pelanggan2 = new Pelanggan("Ismail", 22, "Guru", 6280008686945, "Bogor");
echo "<br>== Pelanggan 2 ==<br>";
$pelanggan2->setDurasiSewa(8);
$pelanggan2->setHarga(450000);
$pelanggan2->getHarga();
$pelanggan2->setMerk("Toyota");
$pelanggan2->setWarna("Hitam");
echo $pelanggan2->cetakInfo();

echo "<hr>";

?>
