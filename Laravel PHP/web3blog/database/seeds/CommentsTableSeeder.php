<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'name' => 'Stiliyan',
            'email' => 'something1@gmail.com',
            'comment' => 'Best place ever',
            'approved' => '1',
            'post_id' => '1'
        ]);
        DB::table('comments')->insert([
            'name' => 'John',
            'email' => 'something2@gmail.com',
            'comment' => 'Unbelivable!!!',
            'approved' => '1',
            'post_id' => '2'
        ]);
        DB::table('comments')->insert([
            'name' => 'Gasten',
            'email' => 'something3@gmail.com',
            'comment' => 'I will never forget this place!',
            'approved' => '1',
            'post_id' => '3'
        ]);
        DB::table('comments')->insert([
            'name' => 'Ivan',
            'email' => 'something4@gmail.com',
            'comment' => 'Looking forward for my next journey!',
            'approved' => '1',
            'post_id' => '4'
        ]);
        DB::table('comments')->insert([
            'name' => 'Leo',
            'email' => 'something5@gmail.com',
            'comment' => 'It could have been better...',
            'approved' => '1',
            'post_id' => '5'
        ]);
                DB::table('comments')->insert([
            'name' => 'Stiliyan',
            'email' => 'something1@gmail.com',
            'comment' => 'Food was quite good.',
            'approved' => '1',
            'post_id' => '6'
        ]);
        DB::table('comments')->insert([
            'name' => 'John',
            'email' => 'something2@gmail.com',
            'comment' => 'The hotel was quite expensive.',
            'approved' => '1',
            'post_id' => '7'
        ]);
        DB::table('comments')->insert([
            'name' => 'Gasten',
            'email' => 'something3@gmail.com',
            'comment' => 'It is a good place to go with your childrean',
            'approved' => '1',
            'post_id' => '8'
        ]);
        DB::table('comments')->insert([
            'name' => 'Ivan',
            'email' => 'something4@gmail.com',
            'comment' => 'I hope one day i will visit more places in Bulgaria.',
            'approved' => '1',
            'post_id' => '9'
        ]);
        DB::table('comments')->insert([
            'name' => 'Leo',
            'email' => 'something5@gmail.com',
            'comment' => 'People are not very kind .. but the country is beautiful',
            'approved' => '1',
            'post_id' => '8'
        ]);
        DB::table('comments')->insert([
            'name' => 'Stiliyan',
            'email' => 'something1@gmail.com',
            'comment' => 'I really loved it !',
            'approved' => '1',
            'post_id' => '7'
        ]);
        DB::table('comments')->insert([
            'name' => 'John',
            'email' => 'something2@gmail.com',
            'comment' => 'My childrean had a great time!',
            'approved' => '1',
            'post_id' => '6'
        ]);
        DB::table('comments')->insert([
            'name' => 'Gasten',
            'email' => 'something3@gmail.com',
            'comment' => 'It was really fun :)',
            'approved' => '1',
            'post_id' => '5'
        ]);
        DB::table('comments')->insert([
            'name' => 'Ivan',
            'email' => 'something4@gmail.com',
            'comment' => 'Every good thing has its end...',
            'approved' => '1',
            'post_id' => '4'
        ]);
        DB::table('comments')->insert([
            'name' => 'Leo',
            'email' => 'something5@gmail.com',
            'comment' => 'I will miss this place for ever.',
            'approved' => '1',
            'post_id' => '3'
        ]);
    }
}
