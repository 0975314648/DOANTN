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
        //
        $data=[
            [
                'username'=>'admin',
                'password'=>bcrypt('admin'),
                'level'=>1
            ],
            [
                'username'=>'GV001',
                'password'=>bcrypt('123456'),
                'level'=>2
            ],
            [
                'username'=>'sinhvien',
                'password'=>bcrypt('123456'),
                'level'=>3
            ]
        ];
        DB::table('users')->insert($data);

    }
}
