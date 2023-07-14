<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admins;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Admins::create([
        'name'=>"NFA Admin",
        'login'=>'nfa-admins',
        'passwd'=>Hash::make('nfa#admin'),
        'remember_token'=>Str::random(30),
       ]);
    }
}
