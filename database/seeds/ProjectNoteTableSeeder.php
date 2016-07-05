<?php

use Illuminate\Database\Seeder;

class ProjectNoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Sip\Entities\Project::truncate();
        
        factory(\Sip\Entities\ProjectNote::class, 10)->create();
    }
}
