<?php

    class Produk {
        public $judul, $penulis, $penerbit, $harga;

        public function __construct($judul="Sherlock Holmes",$penulis="Arthur Conan Doyle",$penerbit="Gramedia",$harga=0)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;

        }

        public function getLabel(){
            return "$this->judul , $this->penulis , $this->penerbit, $this->harga";
        }
    }

    class CetakInfoProduk {
        public function cetak(Produk $produk){
            $str = "$produk->judul | $produk->penulis , $produk->penerbit (Rp. $produk->harga)";
            return $str;
        }
    }

$produk1 = new Produk("Shinchan","Yoshito Usui","Gramedia",30000);
$produk2 = new Produk("Free Fire","Garena","bot",5000);
$produk3 = new Produk("Doraemon","Faisalcoding","Erlangga");
$produk4 = new Produk();

echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();
echo "<br>";
echo $produk3->getLabel();
echo "<br>";
echo $produk4->getLabel();
echo "<hr>";

$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);


?>