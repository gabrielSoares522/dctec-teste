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
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("id_tipo_pagamento");
            $table->foreign("id_tipo_pagamento")->references("id")->on("tipo_pagamentos")->onDelete("cascade")->onUpdate("cascade");
            
            $table->integer("qt_parcelas")->nullable();
            $table->float("total");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagamentos', function (Blueprint $table){
            
            $table->dropForeign('lists_id_tipo_pagamento_foreign');
        });
    }
};
