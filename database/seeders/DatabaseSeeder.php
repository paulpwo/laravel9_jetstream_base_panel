<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

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

        $this->call([PermissionSeeder::class]);


        $user = \App\Models\User::factory()->create([
            'name' => 'Master user',
            'email' => 'paulpwo™gmail.com',
            'password' => bcrypt('dragon123'),
        ])->withPersonalTeam()
            ->hasAttached(Team::factory()->count(1))
            ->create();
        $user->assignRole('SuperAdmin');

    }
}
