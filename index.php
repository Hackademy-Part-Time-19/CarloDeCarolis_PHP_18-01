<?php
/*Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la seguente:
Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato getMyCurrentLocation() che stampi a schermo la seguente frase: 
“Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“*/


class Continent
{
    public $nameContinent;

    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }
}

class Country extends Continent
{
    public $nameCountry;

    public function __construct($continent, $country)
    {
        parent::__construct($continent);
        $this->nameCountry = $country;
    }
}

class Region extends Country
{
    public $nameRegion;

    public function __construct($continent, $country, $region)
    {
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }
}

class Province extends Region
{
    public $nameProvince;

    public function __construct($continent, $country, $region, $province)
    {
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }
}

class City extends Province
{
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city)
    {
        parent::__construct($continent, $country, $region, $province);
        $this->nameCity = $city;
    }
}

class Street extends City
{
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street)
    {
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;
    }

    public function getMyCurrentLocation()
    {
        echo "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet";
    }
}

$myLocation = new Street("Europa", "Italia", "Puglia", "Bari", "Ba", "Strada San Giorgio Martire 2D" . "\n");

$myLocation->getMyCurrentLocation();


/*
- crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole:
    - le classi non devono avere attributi;
    - ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;
    - non puoi realizzare metodi definiti public per stampare il risultato;rt
    - l’unico metodo public ammesso e' il costrutture. */


class Vertebrates
{
    public function __construct()
    {
        $this->stampaVertebrato();
    }

    protected function stampaVertebrato()
    {
        echo "Sono un animale Vertebrato\n";
    }
}

class WarmBlooded extends Vertebrates
{
    public function __construct()
    {
        parent::__construct();
        $this->stampaSangueCaldo();
    }
    protected function stampaSangueCaldo()
    {
        echo "Sono un animale a Sangue Caldo\n";
    }
}


class ColdBlooded extends Vertebrates
{
    public function __construct()
    {
        parent::__construct();
        $this->stampaSangueFreddo();
    }
    protected function stampaSangueFreddo()
    {
        echo "Sono un animale a Sangue Freddo\n";
    }
}


class Mammals extends WarmBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->verso();
    }

    protected function verso()
    {
        echo "Argh!\n";
    }
}

class Birds extends WarmBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->verso();
    }

    protected function verso()
    {
        echo "Chip!\n";
    }
}

class Fish extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->verso();
    }

    protected function verso()
    {
        echo "Splash!\n";
    }
}

class Reptiles extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->verso();
    }

    protected function verso()
    {
        echo "Ssssss!\n";
    }
}

class Amphibians extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->verso();
    }

    protected function verso()
    {
        echo "Crick-Crack!\n";
    }
}

$leone = new Mammals();
$uccelli = new Birds();
$magikarp = new Fish();
$serpenti = new Reptiles();
$rane = new Amphibians();
