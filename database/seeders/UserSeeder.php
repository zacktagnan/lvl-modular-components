<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    protected $usersDefault;

    public function __construct()
    {
        $this->usersDefault = [
            [
                'name' => 'Admin Test',
                'email' => 'admin@test.es',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'User Test',
                'email' => 'user@test.es',
                'email_verified_at' => now(),
                'password' => Hash::make('xxxxxxxx'),
                'remember_token' => Str::random(10),
            ],
        ];
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos fijos...
        foreach ($this->usersDefault as $row) {
            User::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'email_verified_at' => $row['email_verified_at'],
                'password' => $row['password'],
                'remember_token' => $row['remember_token'],
            ]);
        }

        // Datos aleatorios...
        User::factory(50)->create();
    }
}
