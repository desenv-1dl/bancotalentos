<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Sip\Entities\User::truncate();

        factory(\Sip\Entities\User::class)->create([
            'name' => 'Copeiro',
            'email' => 'marciocar@gmail.com',
            'password' => bcrypt(123456),
            'remember_token' => str_random(10)
        ]);

        factory(\Sip\Entities\User::class, 10)->create();
    }
}
