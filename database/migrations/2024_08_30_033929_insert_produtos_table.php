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
        DB::table('produtos')->insert([
            ['descricao' => 'sapatos vermelhos','valor' => '220'],
            ['descricao' => 'camisa manga longa','valor' => '110'],
            ['descricao' => 'shorts','valor' => '90'],
            ['descricao' => 'casaco','valor' => '250']
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
