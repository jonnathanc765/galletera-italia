<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user')->nullable();
            $table->string('name')->nullable();
            $table->date('contact_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->nullable();
            $table->enum('lead', ['Facebook','Instagram', 'WhatsApp', 'DM'])->nullable();
            $table->enum('status', ['Contactar DM', 'Datos DM', 'Contactar WhatsApp', 'Datos WhatsApp', 'Enviar Correo', 'Por Llamar', 'Llamado Interesado', 'Llamado desinteresado'])->default('Contactar DM')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
