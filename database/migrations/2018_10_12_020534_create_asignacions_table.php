<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('empleado');
            $table->string('articulo');
            $table->timestamp('fecha_asig')->nullable();
            $table->string('casco')->nullable();
            $table->string('gorra')->nullable();
            $table->string('bata')->nullable();
            $table->string('camisa')->nullable();
            $table->string('polera')->nullable();
            $table->string('pantalones')->nullable();
            $table->string('zapatos')->nullable();
            $table->string('guantesmetalicos')->nullable();
            $table->string('guantes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignacions');
    }
}
