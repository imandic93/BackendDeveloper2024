<?php

namespace App;

use App\Interface\Member;

abstract class Person implements Member, \SplObserver
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
        return "[{$this->getRole()}] {$this->getFullName()} se spojio u sobu!";
    }

    public function update(\SplSubject $subject): void
    {
        echo "[{$this->getRole()}][{$this->getFullName()}] je procitao obavijest: {$subject->getLastNotification()}", "\n";
    }
}