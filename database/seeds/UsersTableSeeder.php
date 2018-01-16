<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name'        => 'Berkat Jaya Harefa',
                'email'      => 'dev.berkat@gmail.com',
                'password'   => bcrypt('admin123'),
                'created_at'   => Carbon::now('Asia/Jakarta'),
            ],
            [
                'name'        => 'Harapan Jaya Harefa',
                'email'      => 'niasharapan@gmail.com',
                'password'   => bcrypt('admin123'),
                'created_at'   => Carbon::now('Asia/Jakarta'),
            ],
        ]);
    }
}
