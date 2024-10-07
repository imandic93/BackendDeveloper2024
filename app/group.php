<?php

class Group
{
    private array $members = [];

    public function addMember(Member $member)
    {
        echo $member->displayJoinedMessage(), "\n";

        $this->members[] = $member;
    }

    public function displayInfo()
    {
        $memberCount = count($this->members);

        echo "Broj sudionika u sobi je $memberCount", "\n";
    }
}