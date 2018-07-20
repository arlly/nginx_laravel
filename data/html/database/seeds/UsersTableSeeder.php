<?php

use Illuminate\Database\Seeder;
use App\Eloquent\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++) {
            User::create([
                'name'         => 'test'. $i,
                'email'        => 'test'.$i.'@admin.jp',
                'password'     => bcrypt('p1p1p1p1'),
            ]);
        }
    }
}
