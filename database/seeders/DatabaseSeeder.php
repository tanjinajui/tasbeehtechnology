<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   //10user add hobe
        // User::factory(10)->create();
        //single user add hobe
        User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'admin',
            'phone' => '01534930755',
            'email' => 'admin1@admin.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'nip_no' => '862',
        ]);
       $this->call(JobSeeder::class);
        
    }
}
