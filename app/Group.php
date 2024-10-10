<?php

namespace App;

use App\Exception\TooManyMembersException;
use App\Interface\Member;

class Group
{
    private const int MAX_SIZE = 10;

    private array $members = [];

    public function addMember(Member $member): void
    {
        if ($this->getMemberCount() === self::MAX_SIZE) {
            throw new TooManyMembersException('Dosegnut maksimalan broj clanova!');
        }

        echo $member->displayJoinedMessage(), "\n";

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
}