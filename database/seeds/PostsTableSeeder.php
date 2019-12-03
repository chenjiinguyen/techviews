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
           'id' => 'abc',
           'title' => 'Title Test',
           'id_author' => '100006847333620',
           'created_at' => now(),
           'updated_at' => now(),
           'in_group' => true,
           'reaction' => true,
           'comment' => true,
           'text' => 'Nội dung ẩn',
       ]);
       DB::table('posts')->insert([
            'id' => 'y9RcPLz',
            'title' => 'Khóa Học Facebook Marketing 2019 - Tiếp Cận Target Nâng Cao',
            'id_author' => '100002753472309',
            'id_post' => '381861819185649',
            'created_at' => '2019-07-01 00:17:57',
            'updated_at' => '2019-07-01 00:17:57',
            'in_group' => false,
            'reaction' => true,
            'comment' => true,
            'text' => '<p>Tải kh&oacute;a học :&nbsp;<a href="https://tinyurl.com/yxje247b">https://tinyurl.com/yxje247b</a></p>',
        ]);
    }
}
