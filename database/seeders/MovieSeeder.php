<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'name' => 'Titanic',
                'year' => 1999,
            ],
            [
                'name' => 'LOTR',
                'year' => 2001
            ]
        ]);
    }
}
