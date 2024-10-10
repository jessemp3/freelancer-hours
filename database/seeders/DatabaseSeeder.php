<?php

namespace Database\Seeders;

use App\Models\projects;
use App\Models\Proposal;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Pest\Configuration\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(200)->create();

        User::query()->inRandomOrder()->limit(10)->get()

         ->each(function (User $u) {
            $project = projects::factory()->create(['created_by' => $u->id]);
            Proposal::factory()->count(random_int(4, 45))->create(['project_id' => $project->id]);

        });
    }
}

