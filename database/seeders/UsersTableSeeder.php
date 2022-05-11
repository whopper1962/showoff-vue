<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mark',
            'email' => 'whopper@gmail.com',
            'password' => 'password1962',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
