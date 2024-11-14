<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Country::create(['name'=>'United Kindom']);
        Country::create(['name'=>'Greece']);
        City::create(['country_id'=> 1,'name'=>'London']);
        City::create(['country_id'=> 1,'name'=>'Liverpool']);
        City::create(['country_id'=> 1,'name'=>'Leicester']);
        City::create(['country_id'=> 2,'name'=>'Athens']);
        City::create(['country_id'=> 2,'name'=>'Patra']);
        City::create(['country_id'=> 2,'name'=>'Zakynthos']);
        Tag::create(['name'=>'Laravel','slug'=>'Laravel']);
        Tag::create(['name'=>'Vue Js','slug'=>'Vue-Js']);
        Tag::create(['name'=>'Livewire','slug'=>'Livewire']);
    }
}
