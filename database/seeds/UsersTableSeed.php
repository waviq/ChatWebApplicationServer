<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name'          =>  'Waviq Subhi',
            'email'         =>  'waviq.subkhi@gmail.com',
            'password'      =>  bcrypt('waviq'),
        ];

        User::create($user);
    }
}
