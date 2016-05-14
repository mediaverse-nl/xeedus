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

        DB::table('categories')->insert([
            ['cate_id' => '0', 'name' => 'main 1',],
            ['cate_id' => '0', 'name' => 'main 2',],
            ['cate_id' => '0', 'name' => 'main 3',],
            ['cate_id' => '1', 'name' => 'sub 1',],
            ['cate_id' => '1', 'name' => 'sub 2',],
            ['cate_id' => '2', 'name' => 'sub 1',],
            ['cate_id' => '2', 'name' => 'sub 2',],
            ['cate_id' => '3', 'name' => 'sub 1',],
            ['cate_id' => '3', 'name' => 'sub 2',],
            ['cate_id' => '3', 'name' => 'sub 3',],
        ]);

        
    }
}
