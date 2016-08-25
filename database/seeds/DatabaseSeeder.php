<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barbarian = Barbarian::create([
        	'name' => 'Stronkman',
        	'level' => 1,
        	'class' => 'Barbarian',
        	'max_hp' => 10,
        	'max_mp' => 2,
        	'current_hp' => 10,
        	'current_mp' => 2,
        	'str' => 8,
        	'dex' => 5,
        	'con' => 8,
        	'int' => 1,
        	'wis' => 1,
        	'cha' => 3,
        ]);

        $sorcerer = Sorcerer::create([
        	'name' => 'Wandman',
        	'level' => 1,
        	'class' => 'Sorcerer',
        	'max_hp' => 8,
        	'max_mp' => 10,
        	'current_hp' => 8,
        	'current_mp' => 10,
        	'str' => 1,
        	'dex' => 4,
        	'con' => 4,
        	'int' => 8,
        	'wis' => 8,
        	'cha' => 3,
        ]);
    }
}
