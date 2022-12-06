<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();//colum id
            $table->bigInteger('user_id');
            $table->string('tittle');
            $table->text('description');
            $table->date('date');
            $table->boolean('status');
            $table->date('done_time')->nullable();
            $table->timestamps();//colum created_at dan update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
