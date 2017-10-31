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
        $users = [
            [
                'name'         => 'Rodrigo',
                'last_name'    => 'lopez',
                'email'        => 'rodrigo@controlmas.mx',
                'job_position' => 'Desarrollo web y mas',
                'password'     => bcrypt('123456')
            ],
            [
                'name'         => 'Eduardo',
                'last_name'    => 'Ortega',
                'email'        => 'eduardo@controlmas.mx',
                'job_position' => 'Desarrollo web y mas',
                'password'     => bcrypt('123456')
            ],
            [
                'name'         => 'Luis',
                'last_name'    => 'Ortiz',
                'email'        => 'luis@controlmas.mx',
                'job_position' => 'Ventas',
                'password'     => bcrypt('123456')
            ],
            [
                'name'         => 'Jorge',
                'last_name'    => 'Rodriguez',
                'email'        => 'jorge@controlmas.mx',
                'job_position' => 'Marketing',
                'password'     => bcrypt('123456')
            ],
            [
                'name'         => 'Cesar',
                'last_name'    => 'Ortega',
                'email'        => 'cesarortega@controlmas.mx',
                'job_position' => 'Diseño Grafico',
                'password'     => bcrypt('123456')
            ],

        ];

        \DB::table('users')->insert($users);
    }

}