<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //              'email' => str_random(10).'@gmail.com',
        DB::table('users')->insert([
           'name' => 'Stiliyan',
           'email' => 'something1@gmail.com',
           'password' => bcrypt('secret'),
           'avatar' => 'avatar1.jpg'
        ]);
        DB::table('users')->insert([
           'name' => 'Alexander',
           'email' => 'something2@gmail.com',
           'password' => bcrypt('secret'),
           'avatar' => 'avatar2.jpg'
        ]);
        DB::table('users')->insert([
           'name' => 'John',
           'email' => 'something3@gmail.com',
           'password' => bcrypt('secret'),
           'avatar' => 'avatar3.jpg'
        ]);
        DB::table('users')->insert([
           'name' => 'Erik',
           'email' => 'something4@gmail.com',
           'password' => bcrypt('secret'),
           'avatar' => 'avatar4.jpg'
        ]);
        DB::table('users')->insert([
           'name' => 'Gasten',
           'email' => 'something5@gmail.com',
           'password' => bcrypt('secret'),
           'avatar' => 'avatar5.jpg'
        ]);
        DB::table('users')->insert([
           'name' => 'Chung Kuah',
           'email' => 'admin@gmail.com',
           'password' => bcrypt('admin'),
           'avatar' => 'avatar6.jpg'
        ]);

    }
}
