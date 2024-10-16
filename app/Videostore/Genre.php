<?php

namespace App\Videostore;

class Genre
{
    private int $ID;

    private string $naziv;

    public function getName()
    {
        return $this->naziv;
    }
}