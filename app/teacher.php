<?php

class Teacher extends Person
{
    public function sayHello()
    {
        return 'Pozdrav! Ja sam predavac ove grupe. Moje ime je ' . $this->name . ' ' . $this->surname;
    }
}