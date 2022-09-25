<?php
class Produk{
    public $name ="CD MUSIC",
           $artist = "Artist = Maroon 5",
           $genre = "Genre = POP",
           $price = "Price + 10% =21000", 
           $discount = "Discount = 5%",
           $total = "All price = 20500";


}

$Produk1 = new Produk();
echo $Produk1->name;
echo "<br>";
echo $Produk1->artist;
echo "<br>";
echo $Produk1->genre;
echo "<br>";
echo $Produk1->price;
echo "<br>";
echo $Produk1->discount;
echo "<br>"; 
echo $Produk1->total;

echo "<br>";
echo "<br>";

$Produk2 = new Produk();
$Produk2->name = "CD RACK";
echo $Produk2->name;
$Produk2->artist;
echo "<br>";
$Produk2->capacity = "capacity = 512MB"; 
echo $Produk2->capacity;
echo "<br>";
$Produk2->model = "Model = New Album";
echo $Produk2->model;
echo "<br>";
$Produk2->price = "Price + 15% = 57500";
echo $Produk2->price;
echo "<br>";
echo $Produk2->discount = "No Discount";
echo "<br>"; 
echo $Produk2->total = "57500";

