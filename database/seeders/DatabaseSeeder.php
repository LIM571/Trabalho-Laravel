<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('lutadors')->insert([
            'nome' => 'Felipe',
            'apelido' => 'pipo',
            'idade' => '18',
            'peso' => '40',
            'descricao' => 'ele faz programa',
            'arquivo' => 'rato.jpg'
            ]); 
            
        DB::table('lutadors')->insert([
            'nome' => 'carlor',
            'apelido' => 'mentor',
            'idade' => '17',
            'peso' => '60',
            'descricao' => 'bah',
            'arquivo' => 'rato.jpg'
                ]);
        DB::table('lutadors')->insert([
            'nome' => 'julia',
            'apelido' => 'ju',
            'idade' => '16',
            'peso' => '50',
            'descricao' => 'ela vai na academia',
            'arquivo' => 'elefante.jpg'
                        ]);
}
}