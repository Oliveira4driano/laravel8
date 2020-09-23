<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->nullable();
            $table->string('cpf', 14)->nullable();
            $table->string('data_nascimento')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone', 14)->nullable();
            $table->string('endereco', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('cep', 9)->nullable();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
