<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
           'real_id' => '100002753472309',
           'provider_id' => '1387985281303241',
           'name' => 'Nhựt Minh Nguyễn',
           'avatar' => 'https://graph.facebook.com/100002753472309/picture?width=1920'
       ]);
    }
}
