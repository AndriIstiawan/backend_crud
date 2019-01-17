<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name' => 'Admin',
        	'email' => 'admin@fiture.id',
        	'password' => bcrypt('admin'),
            'jabatan' => 'ADMIN',
            'active' =>true,
            'activation_token' => null

        	
        	]);
        $this->call([
        
    ]);
    }
}
