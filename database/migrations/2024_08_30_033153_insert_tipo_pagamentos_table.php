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
        DB::table('tipo_pagamentos')->insert([
            ['nome' => 'Dinheiro'],
            ['nome' => 'Credito'],
            ['nome' => 'Debito'],
            ['nome' => 'Cheque'],
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
