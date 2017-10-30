<?php

use Illuminate\Database\Seeder;

class ProspectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prospects')->insert([
            'website' => 'controlmas.mx',
            'url' => 'www.controlmas.mx',
            'address' => 'direccion de controlmas',
            'order' => 'desarrollo web',
            'email' => 'hola@controlmas.mx',
            'phone' => '5517324531',
            'contact_name' => 'Eduardo Ortega',
            'comments' => 'aqui los comentarios',
            'tracing' => 'aqui el sequimiento',
            'status' => 'aqui el status'
        ]);
    }
}
