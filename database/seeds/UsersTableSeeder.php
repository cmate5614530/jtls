<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'testuser@gmail.com',
            'password' => Hash::make('password'),
            'role'=>'user',
            'remember_token'=>  Hash::make('remembermg'),
            'created_at'    =>  date('Y-m-d H:i:s'),
            'updated_at'    =>  date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'testadmin@gmail.com',
            'password' => Hash::make('password'),
            'role'=>'admin',
            'remember_token'=>  Hash::make('remembermg'),
            'created_at'    =>  date('Y-m-d H:i:s'),
            'updated_at'    =>  date('Y-m-d H:i:s'),
        ]);
    }
}
