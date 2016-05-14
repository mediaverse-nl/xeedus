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
        DB::table('users')->insert([
            ['username' => 'bert', 'voornaam' => 'bert', 'email' => 'bleh@gmail.com', 'password' => bcrypt('admin'),],
            ['username' => 'admin', 'voornaam' => 'deveron', 'email' => 'admin@mail.com', 'password' => bcrypt('admin'),]
        ]);

        DB::table('videos')->insert(
            ['name' => 'kattenvideo',]
        );

        DB::table('chatmessage')->insert([
            ['user_id' => '1',],
            ['user_id' => '1',],
            ['user_id' => '1',]
        ]);

        
    }
}
