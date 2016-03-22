<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->delete();

        Multilang\Languages::create(['code' => 'en', 'name' => 'English']);
        Multilang\Languages::create(['code' => 'ru', 'name' => 'Russian']);
        Multilang\Languages::create(['code' => 'ua', 'name' => 'Ukrainian']);
        Multilang\Languages::create(['code' => 'de', 'name' => 'German']);
    }
}
