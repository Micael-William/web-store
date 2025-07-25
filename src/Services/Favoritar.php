<?php

namespace App\Services;

class Favoritar
{
    private array $favoritos;

    public function getFavoritos(): array
    {
        return $this->favoritos;
    }

    public function setFavoritos($favoritos)
    {
        $this->favoritos = $favoritos;
    }

}