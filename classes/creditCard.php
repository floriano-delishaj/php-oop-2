<?php

class CreditCard
{
    private string $nameOwner;
    private string $surnameOwner;
    private int $cardNumber;
    private string $expireCard;
    private int $cvv;

    function __construct(string $nameOwner, string $surnameOwner, int $cardNumber, string $expireCard, int $cvv)
    {
        $this->setNameOwner($nameOwner);
        $this->setSurnameOwner($surnameOwner);
        $this->setCardNumber($cardNumber);
        $this->setExpireCard($expireCard);
        $this->setCvv($cvv);
    }

    public function getNameOwner(): string
    {
        return $this->nameOwner;
    }

    public function setNameOwner(string $nameOwner): CreditCard
    {
        $this->nameOwner = $nameOwner;
        return $this;
    }

    public function getSurnameOwner(): string
    {
        return $this->surnameOwner;
    }

    public function setSurnameOwner(string $surnameOwner): CreditCard
    {
        $this->surnameOwner = $surnameOwner;
        return $this;
    }

    public function getCardNumber(): int
    {
        return $this->cardNumber;
    }

    public function setCardNumber(int $cardNumber): CreditCard
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    public function getExpireCard(): string
    {
        return $this->expireCard;
    }

    public function setExpireCard(string $expireCard): CreditCard
    {
        $this->expireCard = $expireCard;
        return $this;
    }

    public function getCvv(): int
    {
        return $this->cvv;
    }

    public function setCvv(int $cvv): CreditCard
    {
        $this->cvv = $cvv;
        return $this;
    }

    public function isExpired() {
        if (data_create($this->getExpireCard()) < date_create()) {
            return false;
        }
    }
}