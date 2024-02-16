<?php

namespace Database\Seeders;
use App\Models\Listing;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\Listing::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'Tim Bernes',
            'email' => 'tim@test.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Senior Developer Python',
        //     'tags' => 'python, api, flask',
        //     'company' => 'Pychart Corp',
        //     'location' => 'Lagos',
        //     'email' => 'py@gmail.com',
        //     'website' => 'https://www.python.com',
        //     'description' => 'Lorem ipsum dolor asit met consectur adecpticism elit. Ipsam minima elit dolop et silo reprehenderit possimus  volutap cum expediata ',


        // ]);

        // Listing::create([
        //     'title' => 'Frontend Developer Javascript',
        //     'tags' => 'react, vue, angular',
        //     'company' => 'Jlibs Group',
        //     'location' => 'Abuja',
        //     'email' => 'Jsajax@gmail.com',
        //     'website' => 'https://www.jsajax.com',
        //     'description' => 'reprehenderit possimus ipsum met consectur adecpticism elit. Ipsam minima dolor elit dolop et silo Lorem volutap cum expediata asit ',
        // ]);

    }
}
