<?php

use Illuminate\Database\Seeder;;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguagesTableSeeder::class);
        $this->command->info('Languages updated!');
        $this->call(UserTableSeeder::class);
        $this->command->info('Users updated!');
    }
}
