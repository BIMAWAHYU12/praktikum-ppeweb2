<?php
 
class hewan {
    private $nama;
    public $spesies;
    public $habitat;
    public $jumlah_kaki;
    public $makanan;
}

class mamalia extends hewan {
    public $melahirkan;
    public $berbulu;
}

class reptil extends hewan{
    public $bertelur;
    public $berdarahdingin;
}

$kucing = new mamalia();
$kucing->nama = "Kucing";
echo $kucing->nama . "<br/>";

$komodo = new reptil();
$komodo->nama = "Komodo";
echo $komodo ->nama . "\n";
?>

