<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class TeamMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'name' => 'Kim Somet',
                'email' => 'kim.somet@example.com',
                'role' => 'freelancer',
            ],
            [
                'name' => 'Srey Vannarith',
                'email' => 'srey.vannarith@example.com',
                'role' => 'freelancer',
            ],
            [
                'name' => 'Cheu Mengheang',
                'email' => 'cheu.mengheang@example.com',
                'role' => 'freelancer',
            ],
            [
                'name' => 'My Thong',
                'email' => 'my.thong@example.com',
                'role' => 'freelancer',
            ],
        ];

        foreach ($members as $member) {
            User::updateOrCreate(
                ['email' => $member['email']], // unique key
                [
                    'name'        => $member['name'],
                    'role'        => $member['role'],
                    'password'    => Hash::make('password123'), // default password
                    'email_verified_at' => now(),
                ]
            );
        }
    }
}
