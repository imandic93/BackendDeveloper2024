<?php

class Student extends Person
{
    public function sayHello()
    {
        return 'Pozdrav! Ja sam polaznik ove grupe. Moje ime je ' . $this->name . ' ' . $this->surname;
    }
}
