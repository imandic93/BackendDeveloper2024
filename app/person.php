<?php

class Person
{
    public function __construct(protected string $name, protected string $surname)
    {}

    public function __destruct()
    {
        echo "Unistavam osobu!", "\n";
    }

    public function getFullName()
    {
        return $this->name . ' ' . $this->surname;
    }
}