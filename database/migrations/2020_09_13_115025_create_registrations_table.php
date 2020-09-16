<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('classname');
            $table->string('name');
            $table->string('fathername');
            $table->string('education');
            $table->string('professiondesignation');
            $table->string('presentaddress');
            $table->string('permanentaddress');
            $table->string('telephonemobile');
            $table->string('email');
            $table->string('yearofjoin');
            $table->string('photo');
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
        Schema::dropIfExists('registrations');
    }
}
