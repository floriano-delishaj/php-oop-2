<?php

class Product {
    protected float $prezzo;
    protected int $qty;
    protected string $desc;
    protected string $marca;

    function  __construct(array $_infoProduct) {
        $requiredKeys = [
            "prezzo",
            "qty",
            "desc",
            "marca"
        ];

        foreach ($requiredKeys as $key) {
            if (!key_exists($key, $_infoProduct)) {
                var_dump("Chiave -  $key - mancante");
            }
        }

        $this->setPrezzo($_infoProduct["prezzo"]);
        $this->setQty($_infoProduct["qty"]);
        $this->setDesc($_infoProduct["desc"]);
        $this->setMarca($_infoProduct["marca"]);
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

    public function getQty(): int
    {
        return $this->qty;
    }

    public function setQty($qty): Product
    {
        $this->qty = $qty;
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