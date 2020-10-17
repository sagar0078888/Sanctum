<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('users')->insert([
     
            'name'=>'sagar',
            'email'=>'sag@gmail.com',
            'password'=>Hash::make('12345')




        ]);
    }
}
