<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KindOfWhereaboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soorten_items')->insert([
            'name' => "Series",
        ]);
        DB::table('soorten_items')->insert([
            'name' => "Movie",
        ]);
        DB::table('soorten_items')->insert([
            'name' => "Book",
        ]);
    }
}
