<?php

namespace App;

use App\Interface\Member;

abstract class Person implements Member
{
    public function __construct(protected string $name, protected string $surname)
    {}
    
    abstract protected function getRole(): string;

    public function getFullName()
    {
        return $this->name . ' ' . $this->surname;
    }

    public function sayHello(): string
    {
        $greeting = 'Pozdrav! Moje ime je ' . $this->getFullName();
        $greeting .= '. Ja sam ' . $this->getRole();

        return $greeting;
    }

    public function displayJoinedMessage(): string
    {
        return ucfirst("{$this->getRole()} {$this->getFullName()} se spojio u sobu!");
    }
}