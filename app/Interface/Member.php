<?php

namespace App\Interface;

use SplObserver;

interface Member extends SplObserver
{
    public function displayJoinedMessage(): string;
}