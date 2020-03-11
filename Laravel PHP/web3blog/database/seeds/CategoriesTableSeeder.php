<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Mountains'
        ]);
        DB::table('categories')->insert([
            'name' => 'Lakes'
        ]);
        DB::table('categories')->insert([
            'name' => 'Forests'
        ]);
        DB::table('categories')->insert([
            'name' => 'Historic Monuments'
        ]);
        DB::table('categories')->insert([
            'name' => 'Rivers'
        ]);
        DB::table('categories')->insert([
            'name' => 'Old Cities'
        ]);
    }
}
