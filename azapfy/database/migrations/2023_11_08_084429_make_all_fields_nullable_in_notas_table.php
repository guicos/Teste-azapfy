<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeAllFieldsNullableInNotasTable extends Migration
{
    public function up()
    {
        Schema::table('notas', function (Blueprint $table) {
            // Defina as colunas como nulas (nullable)
            $table->string('chave')->nullable()->change();
            $table->string('numero')->nullable()->change();
            $table->string('dest_nome')->nullable()->change();
            $table->string('dest_cod')->nullable()->change();
            $table->string('cnpj_remete')->nullable()->change();
            $table->string('nome_remete')->nullable()->change();
            $table->string('nome_transp')->nullable()->change();
            $table->string('cnpj_transp')->nullable()->change();
            $table->string('status')->nullable()->change();
            $table->decimal('valor', 10, 2)->nullable()->change();
            $table->integer('volumes')->nullable()->change();
            $table->timestamp('dt_emis')->nullable()->change();
            $table->timestamp('dt_entrega')->nullable()->change();
        });
    }

    public function down()
    {
        // Reverter as alterações se necessário
    }
}