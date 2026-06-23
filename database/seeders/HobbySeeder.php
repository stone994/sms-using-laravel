<?php

namespace Database\Seeders;

use App\Models\Hobbies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hobbies::create(['name'=>'cricket']);
        Hobbies::create(['name'=>'footbal']);
        Hobbies::create(['name'=>'bookreading']);

    }
}
