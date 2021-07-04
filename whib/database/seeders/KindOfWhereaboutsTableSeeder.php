<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KindOfWhereaboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kind_of_whereabouts')->insert([
            'name' => "Series",
        ]);
        DB::table('kind_of_whereabouts')->insert([
            'name' => "Movie",
        ]);
        DB::table('kind_of_whereabouts')->insert([
            'name' => "Book",
        ]);
    }
}
