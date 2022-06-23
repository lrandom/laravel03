<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        /*        for ($i = 0; $i < 10; $i++) {
                    DB::table('posts')->insert([
                        'title' => "Hello" . $i,
                        'content' => "Hello " . $i,
                        'category_id'=>1,
                        'views' => 1
                    ]);
                }*/
        //salt base
        /*        for ($i = 0; $i < 10; $i++) {
                    DB::table('users')->insert([
                        'name' => 'lrandom' . $i,
                        'email' => 'lrandom@gmail.com' . $i,
                        'password' => Hash::make('12345'),
                    ]);
                    DB::table('user_infos')->insert([
                        'phone' => '086812092' . $i,
                        'user_id' => $i,
                        'address' => 'Quảng Ninh' . $i
                    ]);
                }*/

        DB::table('types')->insert([
            'name' => 'Nhà cửa - đời sống'
        ]);
        DB::table('types')->insert([
            'name' => 'Thiết bị nghe nhìn'
        ]);
        DB::table('types')->insert([
            'name' => 'Điện - Điện tử - Điện lạnh'
        ]);

        DB::table('products')->insert([
            'name' => 'Điều hoà Daikin',
            'content' => 'Điều hoà inverter',
            'price' => 9000000
        ]);
        DB::table('products')->insert([
            'name' => 'Macbook Pro 2020',
            'content' => 'Macbook Pro lập trình siêu khét',
            'price' => 30000000
        ]);
        DB::table('products')->insert([
            'name' => 'Iphone 13',
            'content' => 'Iphone siêu nét',
            'price' => 30000000
        ]);
        DB::table('products')->insert([
            'name' => 'Loa Bluetooth JBL',
            'content' => 'Loa siêu trầm',
            'price' => 3000000
        ]);


    }
}
