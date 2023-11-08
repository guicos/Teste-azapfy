<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('chave');
            $table->string('numero');
            $table->string('dest_nome');
            $table->string('dest_cod');
            $table->string('cnpj_remete');
            $table->string('nome_remete');
            $table->string('nome_transp');
            $table->string('cnpj_transp');
            $table->string('status');
            $table->decimal('valor', 10, 2);
            $table->integer('volumes');
            $table->timestamp('dt_emis');
            $table->timestamp('dt_entrega');
            $table->timestamps();
        });
    }    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
