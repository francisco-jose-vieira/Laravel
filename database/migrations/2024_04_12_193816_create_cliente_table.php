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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id(); // int
            $table->string('nome'); // string
            $table->string('cpf'); // string
            $table->string('email'); // string
            $table->string('fone'); // string
            $table->date('nascimento'); // data
            $table->datetime('data'); // data e hora
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
