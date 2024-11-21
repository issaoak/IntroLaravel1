<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([
            [
                'nombre'=>'Isi',
                'apellido'=>'martinez',
                'correo'=>'isid@gmail.com',
                'telefono'=>'4427165618'
            ],
            [
                'nombre'=>'Monse',
                'apellido'=>'martinez',
                'correo'=>'monse@gmail.com',
                'telefono'=>'4427134618'
            ],
            [
                'nombre'=>'Samanta',
                'apellido'=>'ocampo',
                'correo'=>'samoca@gmail.com',
                'telefono'=>'4427165635'
            ]
        ]);
    }
}
