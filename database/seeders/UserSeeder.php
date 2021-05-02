<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(3)->create();

        \App\Models\User::factory(1)->create([
            'name' => 'wilson',
            'num_id' => '1938142124',
            'email' => 'wilson@gmail.com',
            'password' => bcrypt(12345)
        ]);
    }
}
