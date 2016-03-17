<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards_types', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->unique('name');
            $table->smallInteger('price', false, true)->default(0);
            $table->string('css_class_name');
            $table->string('export_prefix');
            $table->softDeletes(); // объявления с удаленным типом должны показываться, но не должны создаваться
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('boards_types');
    }
}
