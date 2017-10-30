<?php

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
        DB::table('users')->insert([
            'name'         => 'Rodrigo',
            'last_name'    => 'lopez',
            'email'        => 'rodrigo@controlmas.mx',
            'job_position' => 'Desarrollo web y mas',
            'password'     => bcrypt('123456')
        ]);
    }

}