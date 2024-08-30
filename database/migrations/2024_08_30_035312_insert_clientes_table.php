<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('clientes')->insert([
            ['nome_completo' => 'Eduardo Moreira',  'documento' => '33377755500', 'email' => 'eduardo.moreira@gmail.com',  'nascimento' => '1999-03-01'],
            ['nome_completo' => 'Carlos Santos',    'documento' => '56722211122', 'email' => 'carlos.santos@gmail.com',    'nascimento' => '1992-07-21'],
            ['nome_completo' => 'Diego Martins',    'documento' => '66433211399', 'email' => 'diego.martins@gmail.com',    'nascimento' => '1973-01-11'],
            ['nome_completo' => 'Katarina Lacerda', 'documento' => '55322144922', 'email' => 'katarina.lacerda@gmail.com', 'nascimento' => '1979-11-16']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
