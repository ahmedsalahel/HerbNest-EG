<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'super manager' , 'email' => 'supermanager@herbnest.eg' , 'password' => 'sm123' , 'role' => 'super'  ],
            ['name' => 'super admin' , 'email' => 'manager@herbnest.eg' , 'password' => 'herb123' , 'role' => 'manage'  ],
            ['name' => 'admin' , 'email' => 'admin@herbnest.eg' , 'password' => 'herbnest123' , 'role' => 'reader'  ],
        ];
        foreach($data as $manager) {
            User::create([
                'name' => $manager['name'],
                'email' => $manager['email'],
                'password' => $manager['password'],
                'role' => $manager['role'],
            ]);
        }
    }
}
