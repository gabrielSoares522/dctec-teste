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
        Schema::create('item_vendas', function (Blueprint $table) {
            $table->id();
            $table->integer("quantidade");
            
            $table->unsignedBigInteger("id_venda");
            $table->foreign("id_venda")->references("id")->on("vendas")->onDelete("cascade")->onUpdate("cascade");
            
            $table->unsignedBigInteger("id_produto");
            $table->foreign("id_produto")->references("id")->on("produtos")->onDelete("cascade")->onUpdate("cascade");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_vendas', function (Blueprint $table){
            
            $table->dropForeign('lists_id_venda_foreign');
            $table->dropForeign('lists_id_produto_foreign');
        });
    }
};
