<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();

        $fornecedor->nome = 'number3';
        $fornecedor->site = 'number3.com.br';
        $fornecedor->uf = 'RJ';
        $fornecedor->email = 'number3@email.com.br';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Number4' , 
            'site' => 'number4.com.br' , 
            'uf' => 'MT' , 
            'email' => 'number4@email.com.br' , 
        ]);
    }
}
