<?php
    // konsep untuk mengatur akses dari property dan method pada sebuah object
    // public (bebas) | protected (sebuah kelas dan turunanya saja) | private (kelas tertentu saja)
    class Produk {
        
        private    $judul,
                  $author,
                  $penerbit;

        protected $diskon = 0;
                  
        private   $harga;

        public function __construct($judul = "judul", $author="penulis", $penerbit = "penerbit", $harga = 0,)
        {
            $this->judul = $judul;
            $this->author = $author;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            
        }

        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        
        public function getLabel(){
            return "$this->author, $this->penerbit";
        }
    
        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }

        public function setJudul($judul){
            $this->judul = $judul;
        }
        public function getJudul(){
            return $this->judul;
        }
    } 


    class Komik extends Produk {
        
        public $jmlHalaman;

        public function __construct($judul = "judul", $author="penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
        {
            parent::__construct($judul, $author, $penerbit, $harga);

            $this->jmlHalaman = $jmlHalaman;
        }

        public function getInfoProduk()
        {
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
            return $str;
        }

    }

    class Game extends Produk {
        public $waktuMain;

        public function __construct($judul = "judul", $author="penulis", $penerbit = "penerbit", 
        $harga = 0, $waktuMain = 0)
        {
            parent::__construct($judul, $author, $penerbit, $harga);

            $this->waktuMain = $waktuMain;
        }

        
        public function setDiskon($diskon){
            $this->diskon = $diskon;
        }

        public function getInfoProduk()
        {
            $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
            return $str;  
        }
    }

    class CetakInfoProduk {
        public function cetak( Produk $produk ){
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
    }

$produk1->setJudul("dragon ball");
$produk1->judul= "Shinchan";

echo "<hr>";

echo $produk1->getJudul();

?>