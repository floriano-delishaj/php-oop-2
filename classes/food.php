<?php

require_once "product.php";

class Food extends Product {
    private string $scadenza;
    private int $peso;

    function __construct(array $_infoProduct)
    {
        $requiredKeys = [
            "scadenza",
            "peso",
        ];

        foreach ($requiredKeys as $key) {
            if (!key_exists($key, $_infoProduct)) {
                var_dump("Chiave -  $key - mancante");
            }
        }
        parent::__construct($_infoProduct);

        $this->setScadenza($_infoProduct["scadenza"]);
        $this->setPeso($_infoProduct["peso"]);

    }


    public function setScadenza($scadenza): Food
    {
        $this->scadenza = $scadenza;
        return $this;
    }

    public function getPeso(): int
    {
        return $this->peso;
    }

    public function setPeso($peso): Food
    {
        $this->peso = $peso;
        return $this;
    }
}

$test = new Food([
    "scadenza" => "2022-06-06",
    "peso" => 10,
    "prezzo" => 10,
    "qty" => 20,
    "desc" => "descrizione",
    "marca" => "kinder"
]);
var_dump($test);