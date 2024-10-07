<?php

use People\Group;

require './app/member.php';
require './app/person.php';
require './app/student.php';
require './app/teacher.php';
require './app/group.php';
require './app/guest.php';
require './app/bot.php';
require './app/People/group.php';

$teacher = new Teacher('Ivan', 'Mandic');
$student = new Student('Marko', 'Maric');
$student2 = new Student('Ana', 'Anic');
$student3 = new Student('Iva', 'Ivic');
$guest = new Guest('gost', 'gost');
$discordBot = new DiscordBot();

$group = new \App\Group();
$group->addMember($teacher);
$group->addMember($student);
$group->addMember($student2);
$group->addMember($student3);
$group->addMember($guest);
$group->addMember($discordBot);
$group->displayInfo();

$groupOfPeople = new Group([$teacher, $student, $student]);
echo "Broj ljudi u grupi je: {$groupOfPeople->getPeopleCount()} \n";