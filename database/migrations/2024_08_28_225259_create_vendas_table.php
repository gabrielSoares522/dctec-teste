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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_pagamento");
            $table->foreign("id_pagamento")->references("id")->on("pagamentos")->onDelete("cascade")->onUpdate("cascade");
            
            $table->unsignedBigInteger("id_cliente");
            $table->foreign("id_cliente")->references("id")->on("clientes")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamp("dt_venda");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas', function (Blueprint $table){
            
            $table->dropForeign('lists_id_pagamento_foreign');
            $table->dropForeign("lists_id_cliente_foreign");
        });
    }
};
