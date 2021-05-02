<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId ('user_id');
              
            $table->string('od_esf', 15)->nullable();
            $table->string('od_cyl', 15)->nullable();
            $table->string('od_eje', 15)->nullable();
            $table->string('od_codigo', 15)->nullable();
            $table->string('od_av', 15)->nullable();
            $table->string('oi_esf', 15)->nullable();
            $table->string('oi_cyl', 15)->nullable();
            $table->string('oi_eje', 15)->nullable();
            $table->string('oi_codigo', 15)->nullable();
            $table->string('oi_av', 15)->nullable();
            $table->string('color', 50)->nullable();
            $table->string('add', 20)->nullable();
            $table->string('bifocal', 15)->nullable();
            $table->string('dep', 15)->nullable();
            $table->string('alt', 15)->nullable();
            $table->text('observaciones')->nullable();
            $table->string('tipo_lente', 15)->nullable();
            $table->string('fotocromatico', 15)->nullable();
            $table->string('material', 15)->nullable();
            $table->string('filtro', 15)->nullable();
            $table->string('dx', 15)->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
