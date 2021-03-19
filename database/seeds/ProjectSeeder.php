<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Task;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory()->has(Task::factory()->count(5))->create();
    }
}
