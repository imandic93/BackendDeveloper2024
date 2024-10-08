<?php

use App\DiscordBot;
use App\Group;
use App\Guest;
use App\Student;
use App\Teacher;

require './vendor/autoload.php';

$teacher = new Teacher('Ivan', 'Mandic');
$student = new Student('Marko', 'Maric');
$student2 = new Student('Ana', 'Anic');
$student3 = new Student('Iva', 'Ivic');
$guest = new Guest('gost', 'gost');
$discordBot = new DiscordBot();

$group = new Group();

try {
    $group->addMember($teacher);
    $group->addMember($student);
    $group->addMember($student2);
    $group->addMember($student3);
    $group->addMember($guest);
    $group->addMember($discordBot);
} catch (Exception) {
    echo "Previse ljudi se pokusalo spojiti!", "\n";
} finally {
    echo "Nastavljam program!", "\n";
}

$group->displayInfo();