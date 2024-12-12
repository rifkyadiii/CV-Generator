<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CV;
use App\Models\Education;
use App\Models\Certification;
use App\Models\Experience;
use App\Models\Project;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

		User::factory(6)->create()->each(function ($user) {
        $cv = CV::factory()->for($user)->create();
        Experience::factory(6)->for($cv)->create();
        Education::factory(6)->for($cv)->create();
        Certification::factory(6)->for($cv)->create();
        Project::factory(6)->for($cv)->create();
    });
   }
}
