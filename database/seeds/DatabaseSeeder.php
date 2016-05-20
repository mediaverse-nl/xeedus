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
            ['username' => 'bert', 'voornaam' => 'bert', 'email' => 'bleh@gmail.com', 'password' => bcrypt('admin'), 'role' => 'admin',],
            ['username' => 'admin', 'voornaam' => 'deveron', 'email' => 'admin@mail.com', 'password' => bcrypt('admin'), 'role' => 'admin',],
            ['username' => 'willy', 'voornaam' => 'willy', 'email' => 'user@mail.com', 'password' => bcrypt('admin'), 'role' => 'user',]
        ]);

        DB::table('chatmessage')->insert([
            ['user_id' => '1',],
            ['user_id' => '1',],
            ['user_id' => '1',]
        ]);

        DB::table('categories')->insert([
            ['cate_id' => '0', 'name' => 'main 1 dieren',],
            ['cate_id' => '0', 'name' => 'main 2 sport',],
            ['cate_id' => '0', 'name' => 'main 3 gaming',],
            ['cate_id' => '1', 'name' => 'sub 1 training',],
            ['cate_id' => '1', 'name' => 'sub 2 verzorgen',],
            ['cate_id' => '2', 'name' => 'sub 1 golf',],
            ['cate_id' => '2', 'name' => 'sub 2 voetbal',],
            ['cate_id' => '3', 'name' => 'sub 1 pc',],
            ['cate_id' => '3', 'name' => 'sub 2 console',],
            ['cate_id' => '3', 'name' => 'sub 3 retro',],
        ]);

        DB::table('videos')->insert([
            ['name' => 'katten video', 'category_id' => 1, 'video_key' => str_random(10), 'author_id' => 1,],
            ['name' => 'honden video', 'category_id' => 1, 'video_key' => str_random(10), 'author_id' => 1,],
            ['name' => 'golf video', 'category_id' => 2, 'video_key' => str_random(10), 'author_id' => 2,],
            ['name' => 'voetbal video', 'category_id' => 2, 'video_key' => str_random(10), 'author_id' => 2,],
            ['name' => 'battlefield video', 'category_id' => 3, 'video_key' => str_random(10), 'author_id' => 1,],
            ['name' => 'GTA video', 'category_id' => 3, 'video_key' => str_random(10), 'author_id' => 2,],
            ['name' => 'the sims video', 'category_id' => 3, 'video_key' => str_random(10), 'author_id' => 1,]
        ]);

        DB::table('order')->insert([
            ['user_id' => 1, 'video_id' => 1,],
            ['user_id' => 1, 'video_id' => 3,],
            ['user_id' => 1, 'video_id' => 4,],
            ['user_id' => 2, 'video_id' => 4,],
            ['user_id' => 2, 'video_id' => 2,],
        ]);

        DB::table('author')->insert([
            ['user_id' => 1, 'biography' => 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen',],
            ['user_id' => 2, 'biography' => 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen',],
        ]);
    }
}
