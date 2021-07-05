<?php


class Animaux
{
    protected int $NbPattes;

    public function getNbPattes(): int
    {
        return $this->NbPattes;
    }

    public function setNbPattes(int $NbPattes)
    {
        $this->NbPattes = $NbPattes;
    }

}