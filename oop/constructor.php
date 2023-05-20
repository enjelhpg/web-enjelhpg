<?php

// method yang otomatis dieksekusi / dijalankan keeetika membuat sebuah kelas
// __construc

use Produk as GlobalProduk;

    class Produk {
        public $judul, $penulis, $penerbit, $harga;

        public function __construct($judul="Sherlock Holmes",$penulis="Arthur Conan Doyle",$penerbit="Gramedia",$harga=0)
        {
            // echo "sumimasen";
            // echo "<br>";
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;

        }

        public function getLabel(){
            return "$this->judul , $this->penulis , $this->penerbit, $this->harga";
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
// var_dump($produk1);
// var_dump($produk2);

?>