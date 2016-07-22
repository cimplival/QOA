<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChristiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('christians', function (Blueprint $table) {
            $table->string('christian_name');
            $table->string('family_name');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('parents_or_guardian_name');
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
        Schema::drop('christians');
    }
}
