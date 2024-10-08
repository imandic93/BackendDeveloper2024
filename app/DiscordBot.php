<?php

namespace App;

use App\Interface\Member;

class DiscordBot implements Member
{
    public function displayJoinedMessage(): string
    {
        return 'I am a DiscordBot!';
    }
}