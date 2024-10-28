<?php

namespace App\Model;

use System\Model;

class Member extends Model
{
    public function getClassName(): string
    {
        return self::class;
    }

    public function getTableName(): string
    {
        return 'clanovi';
    }
}