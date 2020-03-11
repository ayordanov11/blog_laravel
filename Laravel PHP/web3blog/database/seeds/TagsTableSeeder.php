<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Sofia'
        ]);
        DB::table('tags')->insert([
            'name' => 'Pirin'
        ]);
        DB::table('tags')->insert([
            'name' => 'Rila'
        ]);
        DB::table('tags')->insert([
            'name' => 'Plovdiv'
        ]);
        DB::table('tags')->insert([
            'name' => 'Happy'
        ]);
        DB::table('tags')->insert([
            'name' => 'Tired'
        ]);
        DB::table('tags')->insert([
            'name' => 'Loved'
        ]);
        DB::table('tags')->insert([
            'name' => 'Excited'
        ]);
        DB::table('tags')->insert([
            'name' => 'Memories'
        ]);
        DB::table('tags')->insert([
            'name' => 'Amazing'
        ]);

    }
}
