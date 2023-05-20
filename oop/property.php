<?php
    class Produk {
        public $judul, $penulis, $penerbit, $harga;

        public function getLabel(){
            return "$this->judul , $this->penulis";
        }
    }

$produk1 = new Produk();
$produk1->judul = "Shinchan";
$produk1->penulis = "Yoshito Usui";

$produk2 = new Produk();
$produk2->judul = "Free Fire";
$produk2->penulis = "Garena";

echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();
// var_dump($produk1);
// var_dump($produk2);

?>