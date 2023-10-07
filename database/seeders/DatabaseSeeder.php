<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Tests\Fixtures\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


         \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@gmail.com',
             'password'=>bcrypt("12345678"),
             'role'=>"ADMIN"
         ]);
        \App\Models\User::factory("20")->create();
       \App\Models\Category::factory("50")->create();
        \App\Models\Product::factory("100")->create();


    }
}
