<?php

class DiscordBot implements Member
{
    public function displayJoinedMessage(): string
    {
        return 'I am a DiscordBot!';
    }
}