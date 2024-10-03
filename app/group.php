<?php

class Group
{
    public function __construct(private Teacher $teacher = new Teacher('Ivan', 'Mandic'), private array $students = [])
    {}

    public function displayInfo()
    {
        echo "Nastavnik ove grupe je {$this->teacher->getFullName()}", "\n";

        $studentCount = count($this->students);

        echo "Broj polaznika je $studentCount";
    }
}