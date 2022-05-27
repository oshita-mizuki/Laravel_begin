<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class dummys extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            'name'  => 'oshita',
            'password'   => 'pass',
            'email' => 'oshita@example.com',
        ]);
    }
}
