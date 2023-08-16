<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Jaya',
            'email'=>'jaya@gmail.com',
            'password'=>bcrypt('jaya123'),
            'mobile'=>'123456654',
            'place'=>'calicut'

        ]);
        User::create([
            'name'=>'gaya',
            'email'=>'gaya@gmail.com',
            'password'=>bcrypt('gaya123'),
            'mobile'=>'876956654',
            'place'=>'ekm'

        ]);
        User::create([
            'name'=>'saya',
            'email'=>'saya@gmail.com',
            'password'=>bcrypt('saya123'),
            'mobile'=>'908456654',
            'place'=>'kollam'

        ]);
        User::create([
            'name'=>'laya',
            'email'=>'laya@gmail.com',
            'password'=>bcrypt('laya123'),
            'mobile'=>'456756654',
            'place'=>'tvm'

        ]);
        User::create([
            'name'=>'maya',
            'email'=>'maya@gmail.com',
            'password'=>bcrypt('aya123'),
            'mobile'=>'12345432',
            'place'=>'kollam'

        ]);
    }
}
