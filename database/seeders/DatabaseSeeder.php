<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
   /* public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }*/
    
    public function run(){
        $user = new User;
        $user-> name = 'admin';
        $user-> apellidop ='admin';
        $user-> apellidom ='admin';
        $user-> rut = 'admin';
        $user-> role = 'admin';
        $user-> username = 'admin';
        $user-> password = 'admin';
        $user->save();

    }
}
