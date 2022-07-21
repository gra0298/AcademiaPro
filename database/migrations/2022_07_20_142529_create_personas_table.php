<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->name();
            $table->document_type();
            $table->identification_number();
            $table->user_rol();
            $table->email();
            $table->phone_number();
            $table->state();
            $table->timestamps();

        });
    }

    /**
     * ','','','','','',''
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
