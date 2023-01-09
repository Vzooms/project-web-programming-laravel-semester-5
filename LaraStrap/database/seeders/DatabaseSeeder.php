<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('courses')->insert([
            'name' => 'HTML Elements',
            'description' => 'An HTML element is defined by a start tag, some content, and an end tag.',
            'video' => 'w3school.mp4'
        ]);

        DB::table('courses')->insert([
            'name' => 'HTML Attributes',
            'description' => 'HTML attributes provide additional information about HTML elements.',
            'video' => 'w3school.mp4'
        ]);

        DB::table('courses')->insert([
            'name' => 'HTML Forms',
            'description' => 'An HTML form is used to collect user input. The user input is most often sent to a server for processing.',
            'video' => 'w3school.mp4'
        ]);

        DB::table('courses')->insert([
            'name' => 'CSS Syntax',
            'description' => 'A CSS rule consists of a selector and a declaration block.',
            'video' => 'w3school.mp4'
        ]);

        DB::table('courses')->insert([
            'name' => 'CSS Selector',
            'description' => 'A CSS selector selects the HTML element(s) you want to style.',
            'video' => 'w3school.mp4'
        ]);

        DB::table('courses')->insert([
            'name' => 'CSS Pseudo-class',
            'description' => 'A pseudo-class is used to define a special state of an element.',
            'video' => 'w3school.mp4'
        ]);

        DB::table('courses')->insert([
            'name' => 'JS Output',
            'description' => 'JavaScript can "display" data in different ways.',
            'video' => 'w3school.mp4'
        ]);

        DB::table('courses')->insert([
            'name' => 'JS Syntax',
            'description' => 'JavaScript syntax is the set of rules.',
            'video' => 'w3school.mp4'
        ]);

        DB::table('courses')->insert([
            'name' => 'JS Data Types',
            'description' => 'JavaScript has 8 datatypes and an object datatype.',
            'video' => 'w3school.mp4'
        ]);


    }
}
