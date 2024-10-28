<?php

namespace App\Model;

use System\Model;

class Genre extends Model
{
    public int $ID;

    public string $naziv;

    public function getClassName(): string
    {
        return self::class;
    }

    public function getTableName(): string
    {
        return 'zanrovi';
    }
}