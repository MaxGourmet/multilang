<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $languages = \Multilang\Languages::all();
        foreach ($languages as $lang) {
            $data = [];
            switch ($lang->code) {
                case 'en':
                    $data = [
                        'name' => 'John',
                        'email' => 'john@gmail.com',
                        'password' => bcrypt('123'),
                        'username' => 'john123',
                        'language_id' => $lang->id
                    ];
                    break;
                case 'de':
                    $data = [
                        'name' => 'Walther',
                        'email' => 'walther@gmail.com',
                        'password' => bcrypt('456'),
                        'username' => 'walther456',
                        'language_id' => $lang->id
                    ];
                    break;
                case 'ru':
                    $data = [
                        'name' => 'Иван',
                        'email' => 'ivan@mail.ru',
                        'password' => bcrypt('789'),
                        'username' => 'ivan789',
                        'language_id' => $lang->id
                    ];
                    break;
                case 'ua':
                    $data = [
                        'name' => 'Василь',
                        'email' => 'vasya@ukr.net',
                        'password' => bcrypt('QWE'),
                        'username' => 'vasyaQWE',
                        'language_id' => $lang->id
                    ];
                    break;
            }
            if (!empty($data)) {
                \Multilang\User::create($data);
            }
        }
    }
}
