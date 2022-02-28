<?php

class Product {
    protected float $prezzo;
    protected string $desc;
    protected string $marca;

    function  __construct(float $prezzo, string $desc, string $marca) {

        $this->setPrezzo($prezzo);
        $this->setDesc($desc);
        $this->setMarca($marca);

    }

    public function getPrezzo(): float
    {
        return $this->prezzo;
    }

    public function setPrezzo($prezzo): Product
    {
        $this->prezzo = $prezzo;
        return $this;
    }

    public function getDesc(): string
    {
        return $this->desc;
    }
    public function setDesc($desc): Product
    {
        $this->desc = $desc;
        return $this;
    }
    public function getMarca(): string
    {
        return $this->marca;
    }
    public function setMarca($marca): Product
    {
        $this->marca = $marca;
        return $this;
    }
}