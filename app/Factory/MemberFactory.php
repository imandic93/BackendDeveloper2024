<?php

namespace App\Factory;

use App\DiscordBot;
use App\Enum\MemberType;
use App\Guest;
use App\Interface\Member;
use App\Student;
use App\Teacher;

class MemberFactory
{
    public function createMember(?MemberType $memberType = null, ?string $name = null, ?string $surname = null): Member
    {
        if ($memberType === null) {
            return new Guest();
        }

        return match($memberType) {
            MemberType::Teacher =>  new Teacher($name ?? 'Bezimeni', $surname ?? 'Nastavnik'),
            MemberType::Student =>  new Student($name ?? 'Bezimeni', $surname ?? 'Polaznik'),
            MemberType::DiscordBot => new DiscordBot()
        };
    }
}