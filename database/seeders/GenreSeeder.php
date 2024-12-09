<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'name' => 'Horor',
            ],
            [
                'name' => 'Drama',
            ],
            [
                'name' => 'Komedija',
            ]
        ]);
    }
}
