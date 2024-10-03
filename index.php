<?php

require './app/person.php';
require './app/student.php';
require './app/teacher.php';
require './app/group.php';

$student = new Student('Marko', 'Maric');
$student2 = new Student('Ana', 'Anic');
$student3 = new Student('Iva', 'Ivic');

$group = new Group(students: [$student, $student2, $student3]);
$group->displayInfo();