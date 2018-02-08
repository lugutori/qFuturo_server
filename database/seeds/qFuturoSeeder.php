<?php

use Illuminate\Database\Seeder;

class qFuturoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dimension')->insert([
            'name' => '',
            'email' => '',
        ]);
    }
}
