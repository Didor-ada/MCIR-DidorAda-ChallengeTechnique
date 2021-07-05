<?php


class Dog extends Animaux
{
    protected int $NbPattes = 4;

    public function __construct(string $sexe)
    {
        $this->sexe = $sexe;
    }

    public function Aboie(): string
    {
        return "Woof woof !";
    }

}