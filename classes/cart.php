<?php

include_once "user.php";
include_once "creditCard.php";
include_once "product.php";
include_once "food.php";

class Cart
{
    private int $qty;

    function __construct(int $qty)
    {
        $this->setQty($qty);
    }

    public function getQty(): int
    {
        return $this->qty;
    }

    public function setQty(int $qty): Cart
    {
        $this->qty = $qty;
        return $this;
    }

    public function getSconto()
    {
        if ($this->getIsRegister()) {
            return $this->getPrezzo() * 0.20;
        }
    }

    public function addItem() {

    }
}


