<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazonEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razon_empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('empleado')->nullable();;
            $table->string('razon')->nullable();;
            $table->timestamp('fecha_ini')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->string('estatus')->nullable();
            $table->string('cargo')->nullable();
            $table->string('sucursal')->nullable();
            $table->string('st')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('razon_empleados');
    }
}
