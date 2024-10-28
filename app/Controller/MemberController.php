<?php

namespace App\Controller;

use App\Model\Member;

class MemberController
{
    public function getAll()
    {
        return (new Member())->findAll();
    }
}