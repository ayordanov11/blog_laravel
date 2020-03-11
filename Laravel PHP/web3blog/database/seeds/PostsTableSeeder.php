<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;

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
            'title' => 'Sofia',
            'body' => 'In Sofia there are 607,473 dwellings and 101,696 buildings. According to modern records 39,551 dwellings were constructed until 1949, 119,943 between 1950 and 1969, 287,191 between 1970 and 1989, 57,916 in the 90s and 102,623 between 2000 and 2011. Until 1949, 13,114 buildings were constructed and between 10,000–20,000 in each following decade.',
            'user_id' => '6',
            'slug' => 'First-time-in-Sofia',
            'image' => 'image1.jpg',
            'category_id' => '6'
        ]);
        DB::table('posts')->insert([
            'title' => 'Rila Mountain',
            'body' => 'The flora of Rila contains three local endemics which are seen only in this mountain. These plants are Primula deorum (with the largest population), Rheum rhaponticum and Alchemilla pawlowskii. In the mountain thrives also 36 plants as Campanula lanata, Centaurea mannagettae which are endemic for the Balkans. Some of the plant species have survived the last glacial period by turning into relict organisms.',
            'user_id' => '5',
            'slug' => 'Unique-only-here',
            'image' => 'image2.jpg',
            'category_id' => '5'
        ]);
        DB::table('posts')->insert([
            'title' => 'Nessebur',
            'body' => 'Originally a Thracian settlement, known as Menebria, the town became a Greek colony when settled by Dorians from Megara at the beginning of the 6th century BC, and was an important trading centre from then on and a rival of Apollonia (Sozopol). It remained the only Dorian colony along the Black Sea coast, as the rest were typical Ionian colonies. At 425-424 BC the town joined the Delian League, under the leadership of Athens.',
            'user_id' => '4',
            'slug' => 'Calm-City-Beach',
            'image' => 'image3.jpg',
            'category_id' => '4'
        ]);
        DB::table('posts')->insert([
            'title' => 'Sunny Beach',
            'body' => 'Sunny Beach has a very small permanent population, but during the summer the resort is home to many thousands of tourists. The main strip of high-rise hotels backing onto the beach is 5 kilometers long and extends along a wide bay between Sveti Vlas and Nessebar.',
            'user_id' => '3',
            'slug' => 'Party-all-the-time',
            'image' => 'image4.jpg',
            'category_id' => '3'
        ]);
        DB::table('posts')->insert([
            'title' => 'Sreburna Resort',
            'body' => 'While Lake Srebarna was studied many times in the past by foreign biologists, the first Bulgarian scientist to take an interest in the area was Aleksi Petrov, who visited the reserve in 1911. In 1913, the whole of Southern Dobrudja was incorporated in Romania, but was returned to Bulgaria in 1940, when the area was visited once again by Petrov to examine the colonies of birds that nest there.',
            'user_id' => '2',
            'slug' => 'Animals-in-the-nature',
            'image' => 'image5.jpg',
            'category_id' => '2'
        ]);
        DB::table('posts')->insert([
            'title' => 'Skiing in Pirin',
            'body' => 'Pirin is one of the highest mountains in Bulgaria. It is named by the Slavs, after Perun, their superior God. The mountain is situated in the South-Western part of the country. The larger part of the territory of Pirin was declared as National Park. In 1983 it was included in the UNESCO World Heritage List.',
            'user_id' => '1',
            'slug' => 'I-will-never-forget',
            'image' => 'image6.jpg',
            'category_id' => '1'
        ]);
        DB::table('posts')->insert([
            'title' => 'Plovdiv the old City',
            'body' => 'The history of Plovdiv spans more than eight millennia. The numerous nations that lived here have left their traces on the 12m thick cultural layers of the city. The earliest signs of habitation on the territory of Plovdiv date as far back as the 6th millennium BC.',
            'user_id' => '2',
            'slug' => 'Touch-your-past',
            'image' => 'image7.jpg',
            'category_id' => '2'
        ]);
        DB::table('posts')->insert([
            'title' => 'Sofia',
            'body' => 'Winters are cold and snowy. In the coldest days temperatures can drop below −15 °C (5 °F), most notably in January. The lowest recorded temperature is −28.3 °C.',
            'user_id' => '3',
            'slug' => 'The-capital-of-Bulgaria',
            'image' => 'image8.jpg',
            'category_id' => '3'
        ]);
        DB::table('posts')->insert([
            'title' => 'Madara Horseman',
            'body' => 'Three partially preserved texts in Medieval Greek, carved in the rock, can be found around the image of the rider. They bear important information regarding the history of Bulgaria in the period. The oldest inscription is the work of Tervel (701–718 AD), thus it is considered that the relief was created during his rule or immediately after the Bulgars settled in 680–681 AD.',
            'user_id' => '4',
            'slug' => 'Epic-Moment-with-History',
            'image' => 'image9.jpg',
            'category_id' => '4'
        ]);
    }
}
