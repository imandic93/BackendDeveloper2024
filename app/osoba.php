<?php

class Osoba
{
    protected $ime = 'Marko';

    protected $prezime = 'Horvat';

    public function setIme(string $ime)
    {
        $this->ime = ucfirst($ime);
    }

    public function setPrezime(string $prezime)
    {
        $this->prezime = ucfirst($prezime);
    }
}