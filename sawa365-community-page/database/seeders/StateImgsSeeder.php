<?php

namespace Database\Seeders;

use App\Models\StateImgs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateImgsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StateImgs::factory('60')->create();
    }
}
