<?php

class Polaznik extends Osoba
{
    public function sayHello()
    {
        return 'Pozdrav! Ja sam polaznik ove grupe. Moje ime je ' . $this->ime . ' ' . $this->prezime;
    }
}
