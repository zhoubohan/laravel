<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            ['name' => 'sanguo', 'prize' => 100],
            ['name' => 'kongzi', 'prize' => 202],
            ['name' => 'sanguo', 'prize' => 170],
            ['name' => 'shuihu', 'przie' => 120],
            ['name' => 'honglou', 'prize' => 106],
            ['name' => 'laozi', 'prize' => 70],
        ]);
    }
}
