<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100)->nullable();
            $table->string('apellido',100)->nullable();
            $table->string('nacionalidad',100)->nullable();
            $table->string('estudios',100)->nullable();
            $table->string('rut',15)->nullable();
            $table->string('direccion',250)->nullable();
            $table->string('celular',20)->nullable();
            $table->string('celular_emergencia',20)->nullable();
            $table->string('correo',100)->nullable();
            $table->string('sexo',15)->nullable();
            $table->timestamp('fecha_nac')->nullable();
            $table->string('foto',300)->nullable();
            $table->string('camisa',5)->nullable();
            $table->string('pantalon',5)->nullable();
            $table->string('zapatos',5)->nullable();
            $table->string('guantes',5)->nullable();
            $table->string('casco',5)->nullable();
            $table->string('estado_civil',10);
            $table->string('alergias',150)->nullable();
            $table->string('enfermedades',300)->nullable();
            $table->string('medicamentos',300)->nullable();
            $table->string('afp',300)->nullable();
            $table->string('salud',300)->nullable();
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
        Schema::dropIfExists('empleados');
    }
}
