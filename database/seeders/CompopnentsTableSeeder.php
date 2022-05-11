<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use DateTime;

class CompopnentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('components')->insert([
            'user_id' => 1,
            'title' => 'test title',
            'document' => 'test document',
            'code' => '<table></table>',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
