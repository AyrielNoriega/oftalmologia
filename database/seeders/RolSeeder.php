<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Rol::factory(1)->create([
            'user_id' => 1,
            'rol' => 'admin',
            
        ]);
        
    }
}
