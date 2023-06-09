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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id("factura");
            $table->date("fechacreacion");
            $table->unsignedBigInteger("cliente");
            $table->string("tipopago",2);
            $table->timestamps();
            $table->foreign("cliente")->references('id')->on("clientes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
