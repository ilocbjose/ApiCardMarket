<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    DB::table('cards')->insert([
        	'name' => Str::random(10),
        	'description'=> Str::random(10),
        	'collection'=> Str::random(10),

        ]);
    }
}
