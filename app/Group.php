<?php

namespace App;

use App\Exception\TooManyMembersException;
use App\Interface\Member;
use ArrayIterator;
use IteratorAggregate;
use Traversable;

class Group implements IteratorAggregate
{
    private const int MAX_SIZE = 10;

    private array $members = [];

    private int $position = 0;

    public function addMember(Member $member): void
    {
        if ($this->getMemberCount() === self::MAX_SIZE) {
            throw new TooManyMembersException('Dosegnut maksimalan broj clanova!');
        }

        $this->members[] = $member;
    }

    public function displayInfo(): void
    {
        echo "Broj sudionika u sobi je {$this->getMemberCount()}", "\n";
    }

    public function getMemberCount(): int
    {
        return count($this->members);
    }

    // public function current(): mixed
    // {
    //     return $this->members[$this->position];
    // }

    // public function key(): mixed
    // {
    //     return $this->position;
    // }

    // public function next(): void
    // {
    //     $this->position++;
    // }

    // public function rewind(): void
    // {
    //     $this->position = 0;
    // }

    // public function valid(): bool
    // {
    //     return isset($this->members[$this->position]);
    // }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->members);
    }
}