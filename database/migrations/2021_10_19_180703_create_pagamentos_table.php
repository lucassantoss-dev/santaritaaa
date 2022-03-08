<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titular')->nullable();
            $table->string('responsavel')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('quadra')->nullable();
            $table->string('tumulo')->nullable();
            $table->string('complemento')->nullable();
            $table->float('valor')->nullable();
            $table->date('vencimento')->nullable();
            $table->string('secretaria')->nullable();
            $table->string('contato')->nullable();
            $table->UnsignedBigInteger('socio_id');
            $table->timestamps();
        });

        Schema::table('pagamentos', function (Blueprint $table) {
            $table->foreign('socio_id')->references('id')->on('socios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamentos');
    }
}
