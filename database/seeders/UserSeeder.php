<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Vladimir Kozisck';
        $user->email = 'vkozisck@gmail.com';
        $user->password = bcrypt('Dsist.2020');
        $user->save();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@tpg.com';
        $user->password = bcrypt('Dsist.2021');
        $user->save();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@tpg.com';
        $user->password = bcrypt('user123');
        $user->save();
    }
}
