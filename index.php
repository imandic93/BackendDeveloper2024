<?php

use App\BulletinBoard;
use App\Enum\MemberType;
use App\Factory\MemberFactory;
use App\Group;

require './vendor/autoload.php';

$memberFactory = new MemberFactory();

$teacher = $memberFactory->createMember(MemberType::Teacher, 'Ivan', 'Mandic');
$student = $memberFactory->createMember(MemberType::Student, 'Marko', 'Maric');
$student2 = $memberFactory->createMember(MemberType::Student, 'Ana', 'Anic');
$student3 = $memberFactory->createMember(MemberType::Student, 'Iva', 'Ivic');

$board = BulletinBoard::getInstance();
$board->attach($teacher);
$board->attach($student3);

$board->addNotification('Za grupu ABC je nastava otkazana iduci tjedan');

$board->attach($student);
$board->detach($student3);
$board->addNotification('Grupa 123 pocinje od 17:00 11.10.2024.');

$board->attach($student2);

$group = new Group();

try {
    $group->addMember($teacher);
    $group->addMember($student);
    $group->addMember($student2);
    $group->addMember($student3);
    $group->addMember($memberFactory->createMember());
    $group->addMember($memberFactory->createMember(MemberType::DiscordBot));
} catch (Exception) {
    echo "Previse ljudi se pokusalo spojiti!", "\n";
}

// foreach ($group as $member) {
//     echo $member->displayJoinedMessage(), "\n";
// }

// echo "\n";

// $group->displayInfo();