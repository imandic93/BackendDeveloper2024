<?php

namespace App;

class Guest extends Person
{
    public function __construct()
    {
        parent::__construct('Gost', 'gost');
    }

    protected function getRole(): string
    {
        return 'gost';
    }
}