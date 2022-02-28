<?php

include_once "product.php";

class Food extends Product
{
    private string $scadenza;
    private int $peso;

    function __construct(float $prezzo, string $desc, string $marca, string $scadenza, int $peso)
    {

        parent::__construct($prezzo, $desc,$marca);

        $this->setScadenza($scadenza);
        $this->setPeso($peso);

    }

    public function getScadenza(): string
    {
        return $this->scadenza;
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