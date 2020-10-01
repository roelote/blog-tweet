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
            'name' => 'juan',
            'email'=> 'juan@a.com',
            'password'=> bcrypt('asdasdasd')
        ]);


        factory(User::class,10)->create();    

    }



}
