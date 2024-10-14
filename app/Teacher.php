<?php

namespace App;

use SplObserver;

class Teacher extends Person
{
    protected function getRole(): string
    {
        return 'nastavnik';
    }
}