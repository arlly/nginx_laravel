<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
            'name'         => '管理者',
            'email'        => 'admin@admin.jp',
            'password'     => bcrypt('password'),
        ]);
    }
}
