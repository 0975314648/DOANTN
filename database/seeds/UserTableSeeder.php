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
                'fullname'=>'admin',
                'username'=>'admin',
                'password'=>bcrypt('admin'),
                'status'=>1,
                'level'=>1
            ],
            [
                'fullname'=>'Giang Vien',
                'username'=>'giangvien',
                'password'=>bcrypt('123456'),
                'status'=>1,
                'level'=>2
            ],
            [
                'fullname'=>'Sinh Vien',
                'username'=>'sinhvien',
                'password'=>bcrypt('123456'),
                'status'=>1,
                'level'=>3
            ]
        ];
        DB::table('users')->insert($data);

    }
}
