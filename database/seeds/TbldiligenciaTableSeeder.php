<?php

use Illuminate\Database\Seeder;

class TbldiligenciaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbldiligencia')->delete();
        
        \DB::table('tbldiligencia')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Con Aviso',
                'sigla' => 'CA',
                'descripcion' => 'Con Avisos',
                'created_at' => '2019-06-16 22:00:52',
                'updated_at' => '2019-06-16 22:01:22',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Con firma',
                'sigla' => 'CF',
                'descripcion' => 'Con firma',
                'created_at' => '2019-06-16 22:06:53',
                'updated_at' => '2019-06-16 22:06:53',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Motivada',
                'sigla' => 'MT',
                'descripcion' => 'Motivada',
                'created_at' => '2019-06-16 22:07:04',
                'updated_at' => '2019-06-16 22:07:04',
            ),
        ));
        
        
    }
}