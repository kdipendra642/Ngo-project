<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
            [
                'name'=>'Dipendra Khadka',
                'email'=>'kdipendra642@gmail.com',
                'password'=>bcrypt('Dipendra@123'),
            ]);
    }
}
