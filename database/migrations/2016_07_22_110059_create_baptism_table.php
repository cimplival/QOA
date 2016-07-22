<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaptismTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baptisms', function (Blueprint $table) {
            $table->string('christian_name');
            $table->string('family_name');
            $table->date('date_of_baptism');
            $table->string('place_of_baptism');
            $table->string('name_of_godparent');
            $table->string('minister');
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
        Schema::drop('baptisms');
    }
}
