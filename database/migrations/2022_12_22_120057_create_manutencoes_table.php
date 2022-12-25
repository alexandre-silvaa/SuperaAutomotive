<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManutencoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manutencoes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('tipo_manutencao_id')->unsigned()->nullable();
            $table->foreign('tipo_manutencao_id')
                ->references('id')
                ->on('tipos_manutencao');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->integer('carro_id')->unsigned()->nullable();
            $table->foreign('carro_id')
                ->references('id')
                ->on('carros');
            $table->double('valor',10,2)->default(0.0)->nullable();
            $table->date('data');
            $table->text('observacao')->nullable();
            $table->boolean('realizada')->default(0);
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
        Schema::dropIfExists('manutencoes');
    }
}
