<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'HuongNT';
        $user->email = 'street.demon95@gmail.com';
        $user->password = encrypt('123456');
        $user->role = 0;
        $user->save();

        $user = new \App\User();
        $user->name = 'HuongNT1';
        $user->email = 'huongnt1@nal.vn';
        $user->password = encrypt('123456');
        $user->role = 1;
        $user->save();

        $user = new \App\User();
        $user->name = 'HoaiTTT';
        $user->email = 'hoaittt@nal.vn';
        $user->password = encrypt('123456');
        $user->role = 1;
        $user->save();
    }
}
