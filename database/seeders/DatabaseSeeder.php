<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RolesAndPermissionsSeeder::class);


        $user = \App\Models\User::factory()->withPersonalTeam()->create([
            'name' => 'Master user',
            'email' => 'paulpwo™gmail.com',
            'password' => bcrypt('dragon123'),
        ]);
        $user->assignRole('super-admin');

    }
}
