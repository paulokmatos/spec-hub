<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Paulo',
            'email' => 'paulo@forpoeple.io',
            'password' => Hash::make('123'),
        ]);

        \App\Models\User::factory(10)->create(['password' => Hash::make('123')]);
    }
}
