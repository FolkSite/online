<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->smallInteger('nomer', false, true);
            $table->date('date');
            $table->boolean('closed')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nomers');
    }
}
