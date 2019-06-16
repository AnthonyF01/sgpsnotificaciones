<?php

use Illuminate\Database\Seeder;

class TblmotivoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblmotivo')->delete();
        
        \DB::table('tblmotivo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Dirección incompleta',
                'sigla' => 'DI',
                'descripcion' => 'Dirección incompleta',
                'created_at' => '2019-06-16 22:01:48',
                'updated_at' => '2019-06-16 22:05:15',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Dirección errada',
                'sigla' => 'DE',
                'descripcion' => 'Dirección errada',
                'created_at' => '2019-06-16 22:06:05',
                'updated_at' => '2019-06-16 22:06:05',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Lugar de riesgo',
                'sigla' => 'LR',
                'descripcion' => 'Lugar de riesgo',
                'created_at' => '2019-06-16 22:06:20',
                'updated_at' => '2019-06-16 22:06:20',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Doble código postal',
                'sigla' => 'DCP',
                'descripcion' => 'Doble código postal',
                'created_at' => '2019-06-16 22:06:40',
                'updated_at' => '2019-06-16 22:06:40',
            ),
        ));
        
        
    }
}