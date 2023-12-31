<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Department;
use App\Models\Interaction;
use App\Models\JobTitle;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Contact::factory(100)->create();
        Project::factory(10)->create();
        Interaction::factory(100)->create();
        JobTitle::factory(40)->create();
        Company::factory(10)->create();
        Department::factory(10)->create();

        $this->call([
            RolePermissionsSeeder::class,
            // ShieldSeeder::class,
        ]);
    }
}
