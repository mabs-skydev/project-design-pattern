<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          =>  'Flén',
            'surname'       =>  'Fouléni',
            'email'         =>  'medicin@email.com',
            'password'      =>  bcrypt('secret'),
            'role_id'   =>  1,
        ]);
    }
}
