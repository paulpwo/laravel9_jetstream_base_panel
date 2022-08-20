<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use App\Models\User;
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

        $this->call([PermissionSeeder::class]);

        // $user = \App\Models\User::factory([
        //     'name' => 'Master user',
        //     'email' => 'paulpwo™gmail.com',
        //     'password' => bcrypt('dragon123'),
        // ])->create();
        // $team = Team::create(
        //     [
        //         'name' => 'Master Team',
        //         'user_id' => $user->id,
        //         'personal_team' => true,
        //     ]
        // );
        // $user->assignRole('SuperAdmin');

        $user = User::factory([
            'name' => 'Master user',
            'email' => 'paulpwo@gmail.com',
            'password' => bcrypt('dragon123')
        ])
        ->withPersonalTeam()
        ->hasAttached(Team::factory()->create([
            'name' => 'Master Team',
            'personal_team' => false,
        ]))
            ->create();
        $user->assignRole('SuperAdmin');

    }
}
