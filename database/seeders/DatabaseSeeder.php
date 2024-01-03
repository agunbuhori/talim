<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Silber\Bouncer\Database\Ability;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = \App\Models\User::create([
            'name' => 'Developer',
            'email' => 'developer@buhori.com',
            'password' => bcrypt("rahasia")
        ]);

        $user->assign('developer');

        $tables = ['foundations', 'faculties', 'majors', 'subjects', 'students'];
        $abilities = ['view-any', 'view', 'create', 'update', 'delete', 'restore', 'force-delete'];

        foreach ($abilities as $ability) {
            foreach ($tables as $table) {
                Ability::create(['name' => "$ability-$table"]);
            }
        }
    }
}
