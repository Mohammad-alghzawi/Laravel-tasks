<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\User;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('users')->insert([
            'name' => 'moh',
            'email' => 'moh@gmail.com',
            'password' => '1458'
        ]);
        DB::table('users')->insert([
            'name' => 'mohammad',
            'email' => 'mohaa@gmail.com',
            'password' => '14581111'
        ]);

        


    }
}


// php artisan migrate:refresh --seed