<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertWidgets extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('widgets')->insert([
            'company_name' => 'Australia PowerBall',
            'url' => 'https://www.linkpicture.com/q/logo3_10.png',
            'winning_price' => '32.6',
            'live_winning_price' => '133710',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('widgets')->insert([
            'company_name' => 'Super Enalotto',
            'url' => 'https://www.linkpicture.com/q/logo1.png',
            'winning_price' => '32.6',
            'live_winning_price' => '233710',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('widgets')->insert([
            'company_name' => 'Euro Millions',
            'url' => 'https://www.linkpicture.com/q/logo2_36.png',
            'winning_price' => '32.6',
            'live_winning_price' => '333710',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('widgets')->insert([
            'company_name' => 'Florida Lotto',
            'url' => 'https://www.linkpicture.com/q/logo4_5.png',
            'winning_price' => '32.6',
            'live_winning_price' => '433710',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('widgets')->insert([
            'company_name' => 'Lotto 6aus49',
            'url' => 'https://www.linkpicture.com/q/logo5_6.png',
            'winning_price' => '32.6',
            'live_winning_price' => '533710',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('widgets')->insert([
            'company_name' => 'Power Ball',
            'url' => 'https://www.linkpicture.com/q/logo6_2.png',
            'winning_price' => '32.6',
            'live_winning_price' => '633710',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('widgets')->insert([
            'company_name' => 'France Loto',
            'url' => 'https://www.linkpicture.com/q/logo7_1.png',
            'winning_price' => '32.6',
            'live_winning_price' => '733710',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('widgets')->insert([
            'company_name' => 'Irish Lotto',
            'url' => 'https://www.linkpicture.com/q/logo8_1.png',
            'winning_price' => '32.6',
            'live_winning_price' => '833710',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('widgets')->insert([
            'company_name' => 'Thunder Ball',
            'url' => 'https://www.linkpicture.com/q/logo9_1.png',
            'winning_price' => '32.6',
            'live_winning_price' => '933710',
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
