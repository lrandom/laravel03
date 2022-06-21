<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert([
                'title' => "Hello" . $i,
                'content' => "Hello " . $i,
                'category_id'=>1,
                'views' => 1
            ]);
        }
    }
}
