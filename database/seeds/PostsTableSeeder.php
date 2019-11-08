<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('posts')->insert([
           'hash' => 'abc',
           'title' => 'Title Test',
           'id_author' => '100006847333620',
           'create_time' => now(),
           'update_time' => now(),
           'in_group' => true,
           'reation' => true,
           'comment' => true,
           'text' => 'Nội dung ẩn',
       ]);
    }
}
