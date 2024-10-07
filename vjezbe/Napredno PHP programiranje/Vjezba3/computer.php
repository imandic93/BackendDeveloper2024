<?php

class Computer implements Machine
{
    public function turnOn(): void
    {
        echo 'Turning on computer', "\n";
    }

    public function turnOff(): void
    {
        echo 'Turning off computer', "\n";
    }
}