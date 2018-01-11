<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(
            [
                'name'          => 'Berkat Jaya Harefa',
                'email'      => 'dev.berkat@gmail.com',
                'password'      => bcrypt('admin123')
            ]
        );
    }
}
