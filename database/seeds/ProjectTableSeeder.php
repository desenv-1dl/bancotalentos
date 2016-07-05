<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Sip\Entities\Project::truncate();
        
        factory(\Sip\Entities\Project::class, 10)->create();
    }
}
