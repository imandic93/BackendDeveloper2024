<?php

class Predavac extends Osoba
{
    public function sayHello()
    {
        return 'Pozdrav! Ja sam predavac ove grupe. Moje ime je ' . $this->ime . ' ' . $this->prezime;
    }
}