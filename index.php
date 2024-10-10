<?php

use App\BulletinBoard;
use App\Enum\MemberType;
use App\Factory\MemberFactory;
use App\Group;

require './vendor/autoload.php';

$memberFactory = new MemberFactory();

$board = BulletinBoard::getInstance();
$board->addNotification('Za grupu ABC je nastava otkazana iduci tjedan');
$board->addNotification('Grupa 123 pocinje od 17:00 11.10.2024.');

$group = new Group();

try {
    $group->addMember(
        $memberFactory->createMember(MemberType::Teacher, 'Ivan', 'Mandic')
    );
    $group->addMember(
        $memberFactory->createMember(MemberType::Student, 'Marko', 'Maric')
    );
    $group->addMember(
        $memberFactory->createMember(MemberType::Student, 'Ana', 'Anic')
    );
    $group->addMember(
        $memberFactory->createMember(MemberType::Student, 'Iva', 'Ivic')
    );
    $group->addMember($memberFactory->createMember());
    $group->addMember($memberFactory->createMember(MemberType::DiscordBot));
} catch (Exception) {
    echo "Previse ljudi se pokusalo spojiti!", "\n";
}

echo "\n\n\n";

$group->displayInfo();

$board = BulletinBoard::getInstance();
$board = BulletinBoard::getInstance();
$board = BulletinBoard::getInstance();
$board = BulletinBoard::getInstance();

echo "\n\n\n";

$board->getNotifications();