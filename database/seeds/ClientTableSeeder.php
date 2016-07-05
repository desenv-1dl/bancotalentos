<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Sip\Entities\Client::truncate();

        factory(\Sip\Entities\Client::class, 10)->create();
    }
}
