<?php

class Dispenser
{

    protected $volume;
    protected $priceOneGlass;
    private $volumeGlass = 250;
    public $nameDrink;


    public function total($vol)
    {
        $this->volume = $vol;
    }

    public function priceOneGlass($price)
    {
        $this->priceOneGlass = $price;
    }

    public function nameDrinking($name)
    {
        $this->nameDrink = $name;
    }

    public function beli()
    {
        $this->volume -= $this->volumeGlass;

        if ($this->volume >= 0) {
            echo "Selamat Pembelian minuman <b>" . $this->nameDrink . "</b> Berhasil <br>";
        } else {
            echo "Maaf, Stok Minuman" . $this->nameDrink . "Habis <br>";
        }
    }
}

$minuman = new Dispenser();
$minuman->total(1000);
$minuman->priceOneGlass(5000);
$minuman->nameDrinking("Es Teh");

$minuman->beli();
$minuman->beli();
$minuman->beli();
$minuman->beli();
$minuman->beli();
