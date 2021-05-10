<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Command;

class CommandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Command::factory()->count(40)->create();
    }
}
