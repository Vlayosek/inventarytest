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
        $user->email = 'vladimir.kozisck@gmail.com';
        $user->password = bcrypt('qweasd123');
        $user->save();
    }
}
