<?php


class Poule extends Animaux
{
    protected int $NbPattes = 2;

    public function Caquette()
    {
        return 'Cot cot cot !';
    }
}