<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([[
            'voornaam' => 'bert',
            'email' => 'bleh@gmail.com',
            'password' => bcrypt('admin'),
        ]
        ,[
            'voornaam' => 'admin',
            'email' => 'mail@gmail.com',
            'password' => bcrypt('admin'),
        ]]);

        DB::table('videos')->insert([
            'name' => 'kattenvideo',
        ]);

        DB::table('chatmessage')->insert([
            [
                'user_id' => '1',
            ],
            [
            'user_id' => '1',
        ]]);

        
    }
}
