<?php

include_once "creditCard.php";

class User
{
    private string $name;
    private string $surname;
    private string $date_of_birth;
    private string $address;
    private string $number;
    private bool $isRegister;


    function __construct(string $name, string $surname, string $date_of_birth, string $address, string $number, bool $isRegister)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setDateOfBirth($date_of_birth);
        $this->setAddress($address);
        $this->setNumber($number);
        $this->setIsRegister($isRegister);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): User
    {
        $this->surname = $surname;
        return $this;
    }

    public function getDateOfBirth(): string
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(string $date_of_birth): User
    {
        $this->date_of_birth = $date_of_birth;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): User
    {
        $this->address = $address;
        return $this;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): User
    {
        $this->number = $number;
        return $this;
    }
    public function getIsRegister(): bool
    {
        return $this->isRegister;
    }

    public function setIsRegister(bool $isRegister): User
    {
        $this->isRegister = $isRegister;
        return $this;
    }
}

